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
