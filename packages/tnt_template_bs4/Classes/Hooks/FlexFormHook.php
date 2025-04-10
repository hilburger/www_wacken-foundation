<?php

namespace TntDigitalagentur\TntTemplateBs4\Hooks;

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Core\Core\Environment;
use TYPO3\CMS\Core\Utility\GeneralUtility;

class FlexFormHook
{
    public function parseDataStructureByIdentifierPostProcess(array $dataStructure, array $identifier): array
    {
        // Debug
        // Debug-Ausgabe für die Entwicklung
        // file_put_contents('debug_flexform.txt', print_r($identifier, true), FILE_APPEND);

        if ($identifier['type'] === 'tca' &&
            $identifier['tableName'] === 'tt_content' &&
            (strpos($identifier['dataStructureKey'], 'news_pi1') !== false)) {

            $file = ExtensionManagementUtility::extPath('tnt_template_bs4') . 'Configuration/FlexForm/NewsOptions.xml';

            // Pfadprüfung für Debugging
            // file_put_contents('debug_flexform.txt', 'Dateipfad: ' . $file . "\n", FILE_APPEND);

            $content = file_get_contents($file);
            if ($content) {
                $dataStructure['sheets']['extraEntry'] = GeneralUtility::xml2array($content);
            }
        }
        return $dataStructure;
    }
}
