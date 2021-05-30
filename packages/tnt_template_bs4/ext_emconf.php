<?php

/**
 * Extension Manager/Repository config file for ext "tnt_template_bs4".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'TNT Template BS4',
    'description' => 'Bootstrap 4 Template der TNT Digitalagentur, Hamburg',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'bootstrap_package' => '11.0.0-11.0.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'TntDigitalagentur\\TntTemplateBs4\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'TNT Digitalagentur',
    'author_email' => 'info@tnt-digitalagentur.de',
    'author_company' => 'TNT Digitalagentur',
    'version' => '1.0.0',
];
