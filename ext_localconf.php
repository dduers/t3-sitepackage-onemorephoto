<?php

use Dduers\T3SitepackageOnemorephoto\Controller\ContactFormController;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

/**
 * Complete Page Plugins
 */

ExtensionUtility::configurePlugin(
    't3_sitepackage_onemorephoto',
    'ContactForm',
    [
        ContactFormController::class => 'show, perform',
    ],
    // non-cacheable actions
    [
        ContactFormController::class => 'perform',
    ],
    ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
);
