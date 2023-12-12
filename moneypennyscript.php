<?php
defined('_JEXEC') or die;

use Joomla\CMS\Plugin\CMSPlugin;
use Joomla\CMS\Factory;

class PlgSystemMoneypennyscript extends CMSPlugin
{
    public function onBeforeCompileHead()
    {
        $app = Factory::getApplication();

        // Check if we are in the site application (frontend)
        if ($app->isClient('site')) {
            $document = Factory::getDocument();
            $script = $this->params->get('script', '');

            if (!empty($script)) {
                $document->addScriptDeclaration($script);
            }
        }
    }
}
