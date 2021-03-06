<?php
class PluginsfNestedComment extends BasesfNestedComment
{
  protected $commentableObjects = array();

  public function  __toString()
  {
    return $this->getContent();
  }

  public function findAndCreateRoot($scope)
  {
    $root = sfNestedCommentQuery::create()->findRoot($scope);
    if (null === $root)
    {
      $root = new sfNestedComment();
      $root->setSfCommentableModelId($scope);
      $root->makeRoot();
    }
    return $root;
  }

  public function preSave(PropelPDO $con = null)
  {
    //save sfNestedCommentableModel first
    if ($this->asfNestedCommentableModel && $this->sf_commentable_model_id == null)
    {
      $this->asfNestedCommentableModel->save($con);
      $this->setSfCommentableModelId($this->asfNestedCommentableModel->getId());
    }
    if (!$this->isReply())
    {
      $root = $this->findAndCreateRoot($this->getSfCommentableModelId());
      if ($this->isNew())
      {
        $this->setLeftValue(0); //just to make sure that it is not inTree
        $this->insertAsLastChildOf($root);
      }
    }
    else
    {
      if ($this->isNew())
      {
        $parent = sfNestedCommentQuery::create()->findPk($this->getSfCommentId());
        $this->insertAsLastChildOf($parent);
      }
    }
    return parent::preSave($con);
  }

  public function  postSave(PropelPDO $con = null)
  {
    $this->updateCommentCounterObject($con);
    return parent::postSave($con);
  }

  public function  postDelete(PropelPDO $con = null)
  {
    $this->updateCommentCounterObject($con);
    return parent::postDelete($con);
  }

  protected function updateCommentCounterObject(PropelPDO $con = null)
  {
    $commentable = $this->getsfNestedCommentableModel($con);
    $comments = sfNestedCommentQuery::create()
      ->filterBySfCommentableModelId($commentable->getId())
      ->count($con);
    $approveds = sfNestedCommentQuery::create()
      ->approved()
      ->filterBySfCommentableModelId($commentable->getId())
      ->count($con);
    $commentable->setNbApprovedComments($approveds);
    $commentable->setNbComments($comments);
    $commentable->save($con);
  }
  
  public function getApprovedChildren($criteria = null, PropelPDO $con = null)
  {
    $criteria = (null == $criteria) ? new Criteria() : clone $criteria;
    $criteria->add(sfNestedCommentPeer::IS_MODERATED, false);
    $criteria->addAscendingOrderByColumn(sfNestedCommentPeer::CREATED_AT);
    return $this->getChildren($criteria, $con);
  }

  public function getCommentableObject()
  {
    $scope = $this->getSfCommentableModelId();
    if (!isset($this->commentableObjects[$scope]))
    {
      $commentableObject = sfNestedCommentTools::getCommentableObject($this->getsfNestedCommentableModel());
      $this->commentableObjects[$scope] = $commentableObject;
    }
    return $this->commentableObjects[$scope];
  }

  public function isReply()
  {
    return $this->getSfCommentId() ? true : false;
  }

  public function getCommentableTitle()
  {
    return $this->getCommentableObject()->__toString();
  }
  
  public function getLink()
  {
    $callable = sfNestedCommentConfig::getUrlCommentableCallable();
    if ($callable)
    {
      $commentableUrl = call_user_func($callable, $this->getCommentableObject());
      return $commentableUrl .= '#comment-'.$this->getId();
    }
    return '';
  }
}
