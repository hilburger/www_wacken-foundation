<?php

namespace TntDigitalagentur\TntTemplateBs4\Hooks;

use TYPO3\CMS\Core\Core\Environment;
use TYPO3\CMS\Core\Utility\GeneralUtility;

class FlexFormHook
{
    public function parseDataStructureByIdentifierPostProcess(array $dataStructure, array $identifier): array
    {
        // Debug
        file_put_contents(
           Environment::getVarPath() . '/log/flexform_debug.log',
           date('Y-m-d H:i:s') . ' - ' . json_encode([
               'identifier' => $identifier,
               'sheets' => array_keys($dataStructure['sheets'] ?? [])
           ]) . PHP_EOL,
           FILE_APPEND
        );

        if ($identifier['type'] === 'tca' &&
            $identifier['tableName'] === 'tt_content' &&
            $identifier['dataStructureKey'] === 'news_pi1,list') {

            $file = Environment::getExtensionPath('tnt_template_bs4') . '/Configuration/FlexForm/NewsOptions.xml';

            // Debug
            file_put_contents(
                Environment::getVarPath() . '/log/flexform_debug.log',
                date('Y-m-d H:i:s') . ' - File exists: ' . (file_exists($file) ? 'Yes' : 'No') . PHP_EOL,
                FILE_APPEND
            );

            $content = file_get_contents($file);
            if ($content) {
                $dataStructure['sheets']['extraEntry'] = GeneralUtility::xml2array($content);

                // Debug
                file_put_contents(
                    Environment::getVarPath() . '/log/flexform_debug.log',
                    date('Y-m-d H:i:s') . ' - Parsed XML: ' . json_encode(array_keys($dataStructure['sheets'])) . PHP_EOL,
                    FILE_APPEND
                );
            }
        }
        return $dataStructure;
    }
}
