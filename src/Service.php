<?php
namespace OffbeatWP\LocalSeo;

use OffbeatWP\Services\AbstractService;
use OffbeatWP\Contracts\SiteSettings;


class Service extends AbstractService
{
    const ID = 'seo-settings';

    protected $settings;

    public function register(SiteSettings $settings)
    {

        $settings->addPage(\OffbeatWP\LocalSeo\SettingsScripts::class);

    }
}

