<?php
class sfNestedCommentPluginConfiguration extends sfPluginConfiguration
{
  public function initialize()
  {
    if ($this->configuration instanceof sfApplicationConfiguration)
    {
      if (in_array('sfNestedComment', sfConfig::get('sf_enabled_modules', array())))
      {
        $this->dispatcher->connect('routing.load_configuration', array('sfNestedCommentConfig', 'listenToRoutingLoadConfigurationEvent'));
        $this->dispatcher->connect('context.load_factories', array('sfNestedCommentConfig', 'listenToContextLoadFactoriesEvent'));
      }
      if (in_array('sfNestedCommentAdmin', sfConfig::get('sf_enabled_modules', array())))
      {
        $this->dispatcher->connect('routing.load_configuration', array('sfNestedCommentConfig', 'addRouteForNestedCommentAdmin'));
      }
      sfOutputEscaper::markClassAsSafe('sfNestedCommentsRenderer');
    }
  }
}