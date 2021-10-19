<?php
\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)-> configureContainer(
    (
        new \B13\Container\Tca\ContainerConfiguration(
            '1col-container',
            '1 Spalte',
            'Container zum Zusammenfassen',
            [
                [
                    ['name' => 'Inhalt', 'colPos' => 201]
                ]
            ]
        )
    )
    ->setIcon('EXT:container/Resources/Public/Icons/container-1col.svg')
    //->setBackendTemplate('EXT:tnt_template_bs4/Resources/Private/Extensions/container/Templates/1col-container_be.html')
);

$GLOBALS['TCA']['tt_content']['types']['1col-container'] = [
    'showitem' => '
                sys_language_uid,CType,--palette--;;headers,layout,colPos,tx_container_parent,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                    --palette--;;frames,
                    --palette--;;appearanceLinks,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;hidden,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
                '
];
$GLOBALS['TCA']['tt_content']['types']['1col-container']['previewRenderer'] = 'B13\Container\Backend\Preview\ContainerPreviewRenderer';

\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)-> configureContainer(
    (
        new \B13\Container\Tca\ContainerConfiguration(
            '1col-container-narrow',
            '1 schmale Spalte',
            '1 schmale zentrierte Spalte',
            [
                [
                    ['name' => 'Linke Spalte', 'colPos' => 201]
                ]
            ]
        )
    )
    ->setIcon('EXT:container/Resources/Public/Icons/container-1col.svg')
    //->setBackendTemplate('EXT:tnt_template_bs4/Resources/Private/Extensions/container/Templates/1col-container_be.html')
);

\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)-> configureContainer(
    (
        new \B13\Container\Tca\ContainerConfiguration(
            '2col-container',
            '2 Spalten',
            '2 Spalten je 50%',
            [
                [
                    ['name' => 'Linke Spalte', 'colPos' => 201],
                    ['name' => 'Rechte Spalte', 'colPos' => 202]
                ]
            ]
        )
    )
    ->setIcon('EXT:container/Resources/Public/Icons/container-2col.svg')
    ->setBackendTemplate('EXT:tnt_template_bs4/Resources/Private/Extensions/container/Templates/2col-container_be.html')
);

\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)-> configureContainer(
    (
        new \B13\Container\Tca\ContainerConfiguration(
            '2col-container-66-33',
            '2 Spalten: 66% zu 33%',
            '2 Spalten in 66% zu 33%',
            [
                [
                    ['name' => 'Linke Spalte', 'colPos' => 201, 'colspan' => 2],
                    ['name' => 'Rechte Spalte', 'colPos' => 202]
                ]
            ]
        )
    )
    ->setIcon('EXT:container/Resources/Public/Icons/container-2col-left.svg')
    //->setBackendTemplate('EXT:tnt_template_bs4/Resources/Private/Extensions/container/Templates/2col-container_be.html')
);

\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)-> configureContainer(
    (
        new \B13\Container\Tca\ContainerConfiguration(
            '2col-container-33-66',
            '2 Spalten: 33% zu 66%',
            '2 Spalten in 33% zu 66%',
            [
                [
                    ['name' => 'Linke Spalte', 'colPos' => 201],
                    ['name' => 'Rechte Spalte', 'colPos' => 202, 'colspan' => 2]
                ]
            ]
        )
    )
    ->setIcon('EXT:container/Resources/Public/Icons/container-2col-right.svg')
    //->setBackendTemplate('EXT:tnt_template_bs4/Resources/Private/Extensions/container/Templates/2col-container_be.html')
);

\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)-> configureContainer(
    (
        new \B13\Container\Tca\ContainerConfiguration(
            '3col-container',
            '3 Spalten',
            '3 Spalten je 33%',
            [
                [
                    ['name' => 'Linke Spalte', 'colPos' => 201],
                    ['name' => 'Mittlere Spalte', 'colPos' => 202],
                    ['name' => 'Rechte Spalte', 'colPos' => 203]
                ]
            ]
        )
    )
    ->setIcon('EXT:container/Resources/Public/Icons/container-3col.svg')
    //->setBackendTemplate('EXT:tnt_template_bs4/Resources/Private/Extensions/container/Templates/3col-container_be.html')
);
