<?php
/**
 * General Configuration
 *
 * All of your system's general configuration settings go in here. You can see a
 * list of the available settings in vendor/craftcms/cms/src/config/GeneralConfig.php.
 */

return [
    '*' => [
        'basePath' => $basePath = realpath(dirname(__DIR__, 1)) . '/public',
        'cpTrigger' => 'cms',
        'defaultWeekStartDay' => 0,
        'devMode' => getenv('DEV_MODE') === 'true',
        'enableCsrfProtection' => true,
        'errorTemplatePrefix' => '_errors/',
        'isSystemOn' => true,
        'omitScriptNameInUrls' => true,
        'securityKey' => getenv('SECURITY_KEY'),
        'siteName' => 'Craft Base',
        'siteUrl' => getenv('SITE_URL'),
        'timezone' => 'America/Chicago',
        'useEmailAsUsername' => true,
        'staticAssetCacheTime' => '',
    ],
];