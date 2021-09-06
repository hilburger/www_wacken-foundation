<?php

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(
   array(
      'Reisepartner',
      'tnt_ces_partner',
      'EXT:tnt_ces/Resources/Public/Icons/Extension.svg' // Extension Icon
   ),
   'CType',
   'tnt_ces_partner' // Ist der selbe Wert wie aus der ext_localconf.php (CType)
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(
   array(
      'Image Tooltip',
      'tnt_ces_imgtooltip',
      'EXT:tnt_ces/Resources/Public/Icons/Extension.svg' // Extension Icon
   ),
   'CType',
   'tnt_ces_imgtooltip' // Ist der selbe Wert wie aus der ext_localconf.php (CType)
);


// Eigene Felder hier
//
$customFields = [
		'tnt_ces_email' => [
			'exclude' => FALSE,
			'label' => 'E-Mail',
			'config' => [
					'type' => 'input',
					'size' => 30,
					'eval' => 'trim'
			],
		],
		'tnt_ces_www' => [
			'exclude' => FALSE,
			'label' => 'E-Mail',
			'config' => [
					'type' => 'input',
					'size' => 30,
					'eval' => 'trim'
			],
		],
		'tnt_ces_phone' => [
			'exclude' => FALSE,
			'label' => 'Telefon',
			'config' => [
					'type' => 'input',
					'size' => 30,
					'eval' => 'trim'
			],
		],
		'tnt_ces_categories' => [
			'label' => 'Kategorie/n',
			'config' => [
				'type' => 'select',
				// 'renderType' => 'selectCheckBox',
				'size' => 4,
				'maxitems' => 4,
				'items' => [
					['Flugzeug', 1],
					['Bahn', 2],
					['Bus', 3],
					['World Metal Camp', 4],
				]
			],
		],
];
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $customFields);


// Partner CE
//
$GLOBALS['TCA']['tt_content']['types']['tnt_ces_partner'] = array(
   'showitem' => '
        -palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.general;general,

        image;LLL:EXT:tnt_ces/Resources/Private/Language/locallang_db.xlf:photo,
        header;LLL:EXT:tnt_ces/Resources/Private/Language/locallang_db.xlf:header,
        subheader;LLL:EXT:tnt_ces/Resources/Private/Language/locallang_db.xlf:position,
        tnt_ces_email;LLL:EXT:tnt_ces/Resources/Private/Language/locallang_db.xlf:email,
        tnt_ces_www;LLL:EXT:tnt_ces/Resources/Private/Language/locallang_db.xlf:www,
        tnt_ces_phone;LLL:EXT:tnt_ces/Resources/Private/Language/locallang_db.xlf:phone,
        bodytext;LLL:EXT:tnt_ces/Resources/Private/Language/locallang_db.xlf:description,
        tnt_ces_categories;LLL:EXT:tnt_ces/Resources/Private/Language/locallang_db.xlf:categories,

        --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:tabs.appearance,
        --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.frames;frames,
        --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:tabs.access,
        --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.visibility;visibility,
        --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.access;access,
        --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:tabs.extended,
    ',
	'columnsOverrides' => [
		'bodytext' => [
		    'config' => [
				'enableRichtext' => true,
				'richtextConfiguration' => 'default'
		    ]
		]
	]
);

// Image Tooltip CE
//
$GLOBALS['TCA']['tt_content']['types']['tnt_ces_imgtooltip'] = array(
   'showitem' => '
        -palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.general;general,

        image;LLL:EXT:tnt_ces/Resources/Private/Language/locallang_db.xlf:photo.imgtooltip,
        header;LLL:EXT:tnt_ces/Resources/Private/Language/locallang_db.xlf:header.imgtooltip,
        tnt_ces_www;LLL:EXT:tnt_ces/Resources/Private/Language/locallang_db.xlf:www,
        bodytext;LLL:EXT:tnt_ces/Resources/Private/Language/locallang_db.xlf:description,

        --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:tabs.appearance,
        --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.frames;frames,
        --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:tabs.access,
        --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.visibility;visibility,
        --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.access;access,
        --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:tabs.extended,
    ',
	'columnsOverrides' => [
		'bodytext' => [
		    'config' => [
				'enableRichtext' => true,
				'richtextConfiguration' => 'default'
		    ]
		]
	]
);