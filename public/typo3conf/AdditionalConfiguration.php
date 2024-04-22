<?php

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
            // This GFX configuration allows processing by installed ImageMagick 6
            'GFX' => [
                'processor' => getenv('TYPO3_INSTALL_GFX_PROCESSOR'),
                'processor_path' => getenv('TYPO3_INSTALL_GFX_PROCESSOR_PATH'),
                'processor_path_lzw' => getenv('TYPO3_INSTALL_GFX_PROCESSOR_PATH_LZW'),
                'processor_colorspace' => getenv('TYPO3_INSTALL_GFX_PROCESSOR_COLORSPACE'),
            ],
            // This mail configuration sends all emails to mailhog
            'MAIL' => [
                'defaultMailFromAddress' => getenv('TYPO3_INSTALL_MAIL_DEFAULTMAILFROMADDRESS'),
                'defaultMailFromName' => getenv('TYPO3_INSTALL_MAIL_DEFAULTMAILFROMNAME'),
                'transport' => getenv('TYPO3_INSTALL_MAIL_TRANSPORT'),
                'transport_sendmail_command' => getenv('TYPO3_INSTALL_MAIL_TRANSPORT_SENDMAIL_COMMAND'),
                'transport_smtp_encrypt' => getenv('TYPO3_INSTALL_MAIL_TRANSPORT_SMTP_ENCRYPT'),
                'transport_smtp_password' => getenv('TYPO3_INSTALL_MAIL_TRANSPORT_SMTP_PASSWORD'),
                'transport_smtp_server' => getenv('TYPO3_INSTALL_MAIL_TRANSPORT_SMTP_SERVER'),
                'transport_smtp_username' => getenv('TYPO3_INSTALL_MAIL_TRANSPORT_SMTP_USERNAME'),
            ],
            'SYS' => [
                'trustedHostsPattern' => getenv('TYPO3_INSTALL_SYS_TRUSTEDHOSTSPATTERN'),
                'devIPmask' => getenv('TYPO3_INSTALL_SYS_DEVIPMASK'),
                'displayErrors' => getenv('TYPO3_INSTALL_SYS_DISPLAYERRORS'),
                'sitename' => getenv('TYPO3_INSTALL_SYS_SITENAME'),
            ],
            'BE' => [
                'debug' => getenv('TYPO3_INSTALL_BE_DEBUG'),
            ]
        ]
    ]
);
