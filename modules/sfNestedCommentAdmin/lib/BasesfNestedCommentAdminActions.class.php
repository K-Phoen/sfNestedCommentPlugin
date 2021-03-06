<?php

require_once dirname(__FILE__).'/sfNestedCommentAdminGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/sfNestedCommentAdminGeneratorHelper.class.php';

class BasesfNestedCommentAdminActions extends autoSfNestedCommentAdminActions
{
  public function preExecute()
  {
    parent::preExecute();

    $this->getContext()->getConfiguration()->loadHelpers('I18N');
  }

  protected function prepareMailParameter($reply, $comment)
  {
    $subject_string = '%1% replied to your comment on "%2%"';
    $params = array(
        'subject' => __($subject_string, array(
                      '%1%' => $reply->getAuthorName(),
                      '%2%' => $reply->getCommentableObject()->__toString())),
        'to' => $comment->getAuthorEmail(),
        'from' => sfConfig::get('app_sfNestedComment_from_email', 'no-reply@'.$this->getRequest()->getHost()),
        'message' => array(
          'html' => $this->getPartial('sfNestedCommentMail/replyHtml', array('reply' => $reply, 'comment' => $comment)),
          'text' => $this->getPartial('sfNestedCommentMail/replyText', array('reply' => $reply, 'comment' => $comment)),
        )
    );
    $event = $this->dispatcher->filter(new sfEvent($this, 'sf_nested_comment.reply.prepare_mail_parameter'), $params);
    return $event->getReturnValue();
  }

  public function executeTogglePublish(sfWebRequest $request)
  {
    $comment = $this->getRoute()->getObject();
    $comment->setIsModerated(!$comment->getIsModerated());
    $comment->save();

    $this->dispatcher->notify(new sfEvent($this, 'admin.save_object', array('object' => $comment)));

    $this->redirect('@sf_nested_comment');
  }

  public function executeNew(sfWebRequest $request)
  {
    parent::executeNew($request);
    $this->parent_comment = sfNestedCommentQuery::create()->findPk($request->getParameter('id'));
    $this->form->setDefault('sf_comment_id', $this->parent_comment->getId());
    $this->form->setDefault('commentable_model', $this->parent_comment->getsfNestedCommentableModel()->getCommentableModel());
    $this->form->setDefault('commentable_id', $this->parent_comment->getsfNestedCommentableModel()->getCommentableId());
    $this->form->setDefault('sf_commentable_model_id', $this->parent_comment->getSfCommentableModelId());
    $this->form->setDefault('author_name', $this->getUser()->getAuthorName());
    $this->form->setDefault('author_email', $this->getUser()->getAuthorEmail());
    $this->form->setDefault('author_url', $this->getUser()->getAuthorWebsite());
    $this->form->setDefault('user_id', $this->getUser()->getAuthorId());
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $isNew = $form->getObject()->isNew();
      $notice = $isNew ? __('Your reply was saved successfully.') : __('The item was updated successfully.');

      $sf_nested_comment = $form->save();

      $this->dispatcher->notify(new sfEvent($this, 'admin.save_object', array('object' => $sf_nested_comment)));

      $email_pref = sfNestedCommentConfig::isMailEnabled();
      $enable_mail_alert = $email_pref === true || $email_pref == 'moderated';

      if ($isNew && $enable_mail_alert && $sf_nested_comment->isReply())
      {
        $userComment = $sf_nested_comment->getsfNestedCommentRelatedBySfCommentId();
        $params = $this->prepareMailParameter($sf_nested_comment, $userComment);
        sfNestedCommentTools::sendEmail($this->getMailer(), $params);
      }

      $this->getUser()->setFlash('notice', $notice);
      $this->redirect('@sf_nested_comment');
    }
    else
    {
      $this->getUser()->setFlash('error', __('The item has not been saved due to some errors.'), false);
    }
  }
}
