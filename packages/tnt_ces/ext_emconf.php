<?php

/**
 * Extension Manager/Repository config file for ext "tnt_ces".
 */
$EM_CONF[$_EXTKEY] = [
	'title' => 'TNT Content Elements',
	'description' => 'Special Content Elements by TNT',
	'category' => 'plugin',
	'author' => 'Thomas Hilburger',
	'author_email' => 'hilburger@tnt-digitalagentur.de',
	'author_company' => 'TNT Digitalagentur',
	'state' => 'beta',
	'uploadfolder' => 0,
	'createDirs' => '',
	'clearCacheOnLoad' => 1,
	'version' => '2.0.0',
	'constraints' => [
		'depends' => [
			'typo3' => '10.4.0-10.4.99',
		],
		'conflicts' => [],
		'suggests' => [],
	],
];