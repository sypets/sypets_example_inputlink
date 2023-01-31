<?php
// all use statements must come first
use Sypets\SypetsExampleInputlink\Controller\InputlinkController;
use TYPO3\CMS\Core\Imaging\IconRegistry;
//use TYPO3\CMS\Core\Imaging\IconProvider\FontawesomeIconProvider;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;
use TYPO3\CMS\Core\Utility\GeneralUtility;

// Prevent Script from being called directly
defined('TYPO3') or die();

// encapsulate all locally defined variable (and everything else)
(function () {
    ExtensionUtility::configurePlugin(
        // extension name (CamelCase'd extension key)
        'SypetsExampleInputlink',
        // plugin name
        'Inputlink',
        // controller action (use FQCN)
        [
            InputlinkController::class => 'show',

        ]
    );


    // Page TSconfig
    ExtensionManagementUtility::addPageTSConfig("@import 'EXT:sypets_example_inputlink/Configuration/TSconfig/Page/Wizards/NewContentElement.tsconfig'");


    // icons
    /*
    $iconRegistry = GeneralUtility::makeInstance(
        IconRegistry::class
    );
    // FontawesomeIconProvider is no longer available in TYPO3 v12, deactivate for now

    $iconRegistry->registerIcon(
        'inputlink-plugin', // Icon-Identifier
        FontawesomeIconProvider::class,
        ['name' => 'vcard']
    );
    */

})();
