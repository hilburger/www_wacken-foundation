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
            'bootstrap_package' => '13.0.0-13.0.99',
            'typo3' => '12.0.0-12.4.99'
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
    'author' => 'TNT Digitalagentur',
    'author_email' => 'info@tnt-digitalagentur.de',
    'author_company' => 'TNT Digitalagentur',
    'version' => '2.1.0',
];
