<?php use_helper('I18N') ?>
<?php $commentableObject = $reply->getCommentableObject() ?>
<?php $callable = sfConfig::get('app_sfNestedComment_url_method') ?>
<?php $url_callable = $callable ? url_for(call_user_func($callable, $commentableObject), true) : '' ?>
<?php if ($url_callable): ?>
  <strong><?php echo $reply->getAuthorName() ?></strong><?php echo __(' replied to your comment on ')?> <a href="<?php echo $url_callable ?>" ><?php echo $commentableObject->__toString() ?></a>
<?php else: ?>
  <strong><?php echo $reply->getAuthorName() ?></strong><?php echo __(' replied to your comment on ')?> <?php echo $commentableObject->__toString() ?>
<?php endif; ?>
<br/>
<?php echo $reply->getContent(ESC_RAW) ?>
<?php if ($url_callable): ?>
  <a href="<?php echo $url_callable.'#comment-'.$reply->getId() ?>"><?php echo __('Go to comment') ?></a>
<?php endif; ?>
<br/><br/>
<?php echo __('In reply to your comment:') ?>
<br/>
<?php echo $comment->getContent(ESC_RAW) ?>
