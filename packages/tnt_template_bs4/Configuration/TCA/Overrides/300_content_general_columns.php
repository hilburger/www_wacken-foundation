<?php

defined('TYPO3_MODE') || die();
/***************
 * Adjust columns for generic usage
 */

$GLOBALS['TCA']['tt_content']['columns']['background_color_class'] = [
    'exclude' => TRUE,
    'displayCond' => 'FIELD:frame_class:!=:none',
    'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:field.background_color_class',
    'config' => [
        'type' => 'select',
        'renderType' => 'selectSingle',
        'items' => [
            ['none', 'none'],
            ['primary', 'primary'],
            ['secondary', 'secondary'],
            ['light', 'light'],
            ['dark', 'dark'],
            ['black', 'black']
        ]
    ],
    'l10n_mode' => 'exclude',
];
