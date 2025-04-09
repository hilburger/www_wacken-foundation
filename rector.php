<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\PostRector\Rector\NameImportingPostRector;
use Rector\ValueObject\PhpVersion;
use Ssch\TYPO3Rector\CodeQuality\General\ConvertImplicitVariablesToExplicitGlobalsRector;
use Ssch\TYPO3Rector\Set\Typo3LevelSetList;
use Ssch\TYPO3Rector\Set\Typo3SetList;
use Ssch\TYPO3Rector\Configuration\Typo3Option;

// Remove the ExtEmConfRector import since the class structure has changed

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->paths([
        __DIR__ . '/packages',
    ]);

    $rectorConfig->phpVersion(PhpVersion::PHP_82);

    // FQN classes are imported by default
    $rectorConfig->importNames();

    // Define sets of rules
    $rectorConfig->sets([
        Typo3SetList::CODE_QUALITY,
        Typo3SetList::GENERAL,
        Typo3LevelSetList::UP_TO_TYPO3_12,
    ]);

    // Remove the ExtEmConfRector configuration as it's no longer needed in this form
    // In newer versions, this is handled by the rule sets automatically

    // Register additional rules
    $rectorConfig->rule(ConvertImplicitVariablesToExplicitGlobalsRector::class);

    // TYPO3 PHPStan configuration for better analysis
    $rectorConfig->phpstanConfig(Typo3Option::PHPSTAN_FOR_RECTOR_PATH);

    // Skip certain paths/files
    $rectorConfig->skip([
        // Skip some paths
        __DIR__ . '/packages/*/Resources/*',
        __DIR__ . '/packages/*/node_modules/*',
        __DIR__ . '/packages/*/vendor/*',

        // Skip specific post-rector in certain files/paths
        NameImportingPostRector::class => [
            __DIR__ . '/packages/*/ext_localconf.php',
            __DIR__ . '/packages/*/ext_tables.php',
            __DIR__ . '/packages/*/Configuration/TCA/*',
            __DIR__ . '/**/Configuration/ExtensionBuilder/*',
            __DIR__ . '/**/ClassAliasMap.php',
        ],
    ]);
};