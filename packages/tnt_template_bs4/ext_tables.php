<?php
defined('TYPO3_MODE') || die();

$tempColumns = array(
    'tnt_hideon_device' => [
        'exclude' => 1,
        'label' => 'Verstecke den Inhalt auf bestimmten Geräten',
        'config' => [
            'type' => 'check',
            'items' => [
                ['Smartphone', ''],
                ['Tablet', ''],
                ['Computer', ''],
            ],
            'cols' => '3',
        ],
    ],
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns(
    'tt_content',
    $tempColumns,
    1
);



#add field in specific place
$myPallet = '--linebreak--,tnt_hideon_device';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
    'tt_content',
    'frames',
    $myPallet,
    'after:section_frame'
);
