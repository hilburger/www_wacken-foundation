<?php
defined('TYPO3_MODE') || die();

/***************
 * Add default RTE configuration
 */
$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['tnt_template_bs4'] = 'EXT:tnt_template_bs4/Configuration/RTE/Default.yaml';

/***************
 * Add field to tx_news
 */
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS'][\TYPO3\CMS\Core\Configuration\FlexForm\FlexFormTools::class]['flexParsing'][] = \TntDigitalagentur\TntTemplateBs4\Hooks\FlexFormHook::class;

/***************
 * PageTS
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:tnt_template_bs4/Configuration/TsConfig/Page/All.tsconfig">');

/*
 * Forms
 */
call_user_func(function () {

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScriptSetup(
        trim('
             module.tx_form {
                 settings {
                     yamlConfigurations {
                         100 = EXT:tnt_template_bs4/Configuration/Form/CustomFormSetup.yaml
                     }
                 }
             }
         ')
    );
});
