<?php

namespace DorsetDigital\TawkTo;

use SilverStripe\Core\Extension;
use SilverStripe\SiteConfig\SiteConfig;
use SilverStripe\View\Requirements;

class PageControllerExtension extends Extension
{
    /**
     * Add the script to the end of the page if it's in the config
     * We remove any tags here, since they shouldn't be in the snippet
     */
    protected function init() {
        $this->owner->init();
        $config = SiteConfig::current_site_config();
        if ($config->TawkToEmbedCode != "") {
            $embed = strip_tags($config->TawkToEmbedCode);
            Requirements::customScript($embed);
        }
    }
}