<?php
use TYPO3\CMS\Core\Imaging\IconRegistry;

defined('TYPO3') || die();

/***************
 * PageTS
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:tnt_ces/Configuration/TSconfig/Page.tsconfig">');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:tnt_ces/Configuration/TSconfig/User.tsconfig">');

call_user_func(
    function()
	{

		if (TYPO3 === 'BE') {
			/** @var IconRegistry $iconRegistry */
   $iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
			$iconRegistry->registerIcon(
				'tnt_ces_partner',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:tnt_ces/Resources/Public/Icons/Backend/Extension.svg']
			);
			$iconRegistry->registerIcon(
				'tnt_ces_imgtooltip',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:tnt_ces/Resources/Public/Icons/Backend/Extension.svg']
			);
		}

		// wizards
		//
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
		  'mod.wizards.newContentElement.wizardItems.common {
			elements {
			  tnt_ces_partner {
				  iconIdentifier = tnt_ces_partner
				  title = LLL:EXT:tnt_ces/Resources/Private/Language/locallang_db.xlf:tx_tnt_ces_domain_model_partner
				  description = LLL:EXT:tnt_ces/Resources/Private/Language/locallang_db.xlf:tx_tnt_ces_domain_model_partner.description
				  tt_content_defValues {
				  CType = tnt_ces_partner
				}
			  }
			}
			show := addToList(tnt_ces_partner)
		  }'
		);
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
		  'mod.wizards.newContentElement.wizardItems.common {
			elements {
			  tnt_ces_imgtooltip {
				  iconIdentifier = tnt_ces_imgtooltip
				  title = LLL:EXT:tnt_ces/Resources/Private/Language/locallang_db.xlf:tx_tnt_ces_domain_model_imgtooltip
				  description = LLL:EXT:tnt_ces/Resources/Private/Language/locallang_db.xlf:tx_tnt_ces_domain_model_imgtooltip.description
				  tt_content_defValues {
				  CType = tnt_ces_imgtooltip
				}
			  }
			}
			show := addToList(tnt_ces_imgtooltip)
		  }'
		);
    },
    // $_EXTKEY
);
