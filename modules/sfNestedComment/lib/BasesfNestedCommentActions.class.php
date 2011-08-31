<?php
class BasesfNestedCommentActions extends sfActions
{
  public function preExecute()
  {
    $this->getContext()->getConfiguration()->loadHelpers('I18N');
  }

  protected function prepareMailParameter($comment)
  {
    if ($comment->getIsModerated())
    {
      $subject_string = __('Please moderate: New comment on "%object_to_string%"', array(
        '%object_to_string%'  => $comment->getCommentableObject()->__toString(),
      ));
    }
    else
    {
      $subject_string = __('New comment on "%1%"', array(
        '%object_to_string%'  => $comment->getCommentableObject()->__toString(),
      ));
    }

    $params = array(
      'subject' => $subject_string,
      'to'      => $comment->getCommentableObject()->getAuthorEmail(),
      'from'    => sfConfig::get('app_sfNestedComment_from_email', 'no-reply@'.$this->getRequest()->getHost()),
      'message' => array(
        'html' => $this->getPartial('sfNestedCommentMail/commentHtml', array('comment' => $comment)),
        'text' => $this->getPartial('sfNestedCommentMail/commentText', array('comment' => $comment)),
      )
    );

    $event = $this->dispatcher->filter(new sfEvent($this, 'sf_nested_comment.comment.prepare_mail_parameter'), $params);

    return $event->getReturnValue();
  }

  public function executeAddComment(sfWebRequest $request)
  {
    $this->commentForm = new sfNestedCommentFrontForm(null, $this->getUser());
    $bindValues = $request->getParameter($this->commentForm->getName());
    if (sfNestedCommentConfig::isRecaptchaEnabled())
    {
      $captcha = array(
        'recaptcha_challenge_field' => $request->getParameter('recaptcha_challenge_field'),
        'recaptcha_response_field'  => $request->getParameter('recaptcha_response_field'),
      );
      $bindValues = array_merge($bindValues, array('captcha' => $captcha));
    }

    $this->commentForm->bind($bindValues);
    if ($this->commentForm->isValid())
    {
      $comment = $this->commentForm->save();

      $this->getUser()->setFlash('add_comment', $comment->getIsModerated() ? 'moderated' : 'normal');

      $this->dispatcher->notify(new sfEvent($this, 'sf_nested_comment.add', array('object' => $comment)));

      $email_pref = sfNestedCommentConfig::isMailEnabled();
      if ($email_pref == true || ($email_pref == 'moderated' && $comment->getIsModerated()))
      {
        $params = $this->prepareMailParameter($comment);
        sfNestedCommentTools::sendEmail($this->getMailer(), $params);
      }

      if ($request->isXmlHttpRequest())
      {
        sfConfig::set('sf_web_debug', false);

        $this->setLayout(false);

        $commentableObject = $comment->getCommentableObject();
        $comments = sfNestedCommentTools::getComments($commentableObject, $request);

        return $this->renderPartial('sfNestedComment/comments', array(
          'object'      => $commentableObject,
          'comments'    => $comments,
          'commentForm' => sfNestedCommentTools::createCommentForm($commentableObject))
        );
      }
      else
      {
        return $this->redirect($request->getReferer());
      }
    }
    else
    {
      if (!$request->isXmlHttpRequest())
      {
        return __('Error');
      }
      else
      {
        sfConfig::set('sf_web_debug', false);

        $this->getResponse()->setStatusCode(404);
        $this->setLayout(false);

        return $this->renderPartial('sfNestedComment/add_comment', array(
          'commentForm' => $this->commentForm
        ));
      }
    }
  }

  public function executeCommenting(sfWebRequest $request)
  {
    $this->forward404Unless($request->isXmlHttpRequest());

    $commentableObject = PropelQuery::from($request->getParameter('commentable_model'))
      ->findPk($request->getParameter('commentable_id'));

    $comments = sfNestedCommentTools::getComments($commentableObject, $request);

    return $this->renderPartial('sfNestedComment/comment_list', array(
      'comments' => $comments
    ));
  }

  public function executePreview(sfWebRequest $request)
  {
    $this->forward404Unless($request->isXmlHttpRequest() && $request->isMethod('post'));
    $this->setLayout(false);

    $commentText = sfNestedCommentTools::clean($request->getPostParameter('commentText'));
    return $this->renderText($commentText);
  }
}
