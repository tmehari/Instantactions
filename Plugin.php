<?php

namespace Kanboard\Plugin\InstantRemove;

use Kanboard\Core\Plugin\Base;

class Plugin extends Base
{
    public function initialize()
    {
        $this->template->hook->attach("template:dashboard:sidebar",'InstantRemove:Sidebar/remove' );
    }

    public function getPluginName()
    {
        return 'InstantRemove';
    }

    public function getPluginDescription()
    {
        return t('This plugin makes it possible to remove tasks instantly');
    }

    public function getPluginAuthor()
    {
        return 'Mehari';
    }

    public function getPluginVersion()
    {
        return '0.0.1';
    }

    public function getPluginHomepage()
    {
        return 'https://github.com/Alokaado/instant_remove';
    }
}
