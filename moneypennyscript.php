<?php
defined('_JEXEC') or die;

use Joomla\CMS\Plugin\CMSPlugin;
use Joomla\CMS\Factory;

class PlgSystemMoneypennyscript extends CMSPlugin
{
    public function onBeforeCompileHead()
    {
        $document = Factory::getDocument();

        // Retrieve the script from the plugin parameters
        $script = $this->params->get('script', '');

        if (!empty($script)) {
            $document->addScriptDeclaration($script);
        }
    }
}
