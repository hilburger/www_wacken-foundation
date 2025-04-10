<?php
namespace TntDigitalagentur\TntTemplateBs4\EventListener;

use TYPO3\CMS\Core\Configuration\Event\AfterFlexFormDataStructureParsedEvent;
use TYPO3\CMS\Core\Core\Environment;
use TYPO3\CMS\Core\Utility\GeneralUtility;

class FlexFormParsingListener
{
    public function __invoke(AfterFlexFormDataStructureParsedEvent $event): void
    {
        $identifier = $event->getIdentifier();

        if ($identifier['type'] === 'tca' &&
            $identifier['tableName'] === 'tt_content' &&
            $identifier['dataStructureKey'] === 'news_pi1,list') {

            $dataStructure = $event->getDataStructure();
            $file = Environment::getPublicPath() . '/typo3conf/ext/tnt_template_bs4/Configuration/FlexForm/NewsOptions.xml';
            $content = file_get_contents($file);

            if ($content) {
                $dataStructure['sheets']['extraEntry'] = GeneralUtility::xml2array($content);
                $event->setDataStructure($dataStructure);
            }
        }
    }
}
