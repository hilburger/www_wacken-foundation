<?php

/**
 * ddev-generated: Automatically generated TYPO3 AdditionalConfiguration.php file.
 * ddev manages this file and may delete or overwrite the file unless this comment is removed.
 * It is recommended that you leave this file alone.
 */

//if (getenv('IS_DDEV_PROJECT') == 'true') {
    $GLOBALS['TYPO3_CONF_VARS'] = array_replace_recursive(
        $GLOBALS['TYPO3_CONF_VARS'],
        [
            'DB' => [
                'Connections' => [
                    'Default' => [
                        'dbname' => getenv('TYPO3_INSTALL_DB_DBNAME'),
                        'host' => getenv('TYPO3_INSTALL_DB_HOST'),
                        'password' => getenv('TYPO3_INSTALL_DB_PASSWORD'),
                        'port' => getenv('TYPO3_INSTALL_DB_PORT'),
                        'user' => getenv('TYPO3_INSTALL_DB_USER'),
                    ],
                ],
            ],
            // This GFX configuration allows processing by installed ImageMagick 6
            'GFX' => [
                'processor' => getenv('TYPO3_INSTALL_GFX_PROCESSOR'),
                'processor_path' => getenv('TYPO3_INSTALL_GFX_PROCESSOR_PATH'),
                'processor_path_lzw' => getenv('TYPO3_INSTALL_GFX_PROCESSOR_PATH_LZW'),
                'processor_colorspace' => getenv('TYPO3_INSTALL_GFX_PROCESSOR_COLORSPACE'),
            ],
            // This mail configuration sends all emails to mailhog
            'MAIL' => [
                'transport' => getenv('TYPO3_INSTALL_MAIL_TRANSPORT'),
                'transport_smtp_server' => getenv('TYPO3_INSTALL_MAIL_TRANSPORT_SMTP_SERVER'),
                //'transport_sendmail_command' => getenv('TYPO3_INSTALL_MAIL_TRANSPORT_SENDMAIL_COMMAND'),
                'defaultMailFromAddress' => getenv('TYPO3_INSTALL_MAIL_DEFAULTMAILFROMADDRESS'),
            ],
            'SYS' => [
                'trustedHostsPattern' => getenv('TYPO3_INSTALL_SYS_TRUSTEDHOSTSPATTERN'),
                'devIPmask' => getenv('TYPO3_INSTALL_SYS_DEVIPMASK'),
                'displayErrors' => getenv('TYPO3_INSTALL_SYS_DISPLAYERRORS'),
            ],
        ]
    );
//}
