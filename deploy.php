<?php
namespace Deployer;

require 'recipe/common.php';
require 'recipe/rsync.php';

// Project name
set('application', 'my_project');
set('release_name', function () {
    return (string) run('date +"%Y-%m-%d_%H-%M-%S"');
});

// Project repository
set('repository', 'git@gitlab.com:tnt_hilburger/www_wacken-foundation.git');

// [Optional] Allocate tty for git clone. Default value is false.
set('git_tty', true);

// Shared files/dirs between deploys
add('shared_files', []);
add('shared_dirs', []);

// Writable dirs by web server
add('writable_dirs', []);
set('allow_anonymous_stats', false);

// Hosts

host('staging.wacken-foundation.tnt-digitalagentur.de')
    ->user('p573155')
    ->forwardAgent(true)
    ->multiplexing(true)
    ->addSshOption('UserKnownHostsFile', '/dev/null')
    ->addSshOption('StrictHostKeyChecking', 'no')
    ->set('deploy_path', '/home/www/p573155/html/staging-wacken-foundation');

task('deploy', [
    'deploy:unlock',
    'deploy:info',
    'deploy:prepare',
    'deploy:lock',
    'deploy:release',
    'rsync',
    'deploy:shared',
    'deploy:symlink',
    'deploy:typo3_fixfolderstructure',
    'deploy:typo3_database_updateschema',
    'deploy:typo3_language_update',
    'deploy:typo3_clear_cache',
    'deploy:unlock',
    'cleanup',
])->desc('Deploy your project');
after('deploy', 'success');

task('deploy:typo3_language_update', function () {
    run('{{bin/php}} {{release_path}}/vendor/bin/typo3cms language:update');
})->desc('TYPO3: Update Language File');


task('deploy:typo3_fixfolderstructure', function () {
    run('{{bin/php}} {{release_path}}/vendor/bin/typo3cms  install:fixfolderstructure ');
})->desc('TYPO3: Fix Folder Structure');

task('deploy:typo3_database_updateschema', function () {
    run('{{bin/php}} {{release_path}}/vendor/bin/typo3cms database:updateschema');
})->desc('TYPO3: Update Databaseschema');

task('deploy:typo3_clear_cache', function () {
    run('{{bin/php}} {{release_path}}/vendor/bin/typo3cms cache:flush');
})->desc('TYPO3: Clear cache');

set('typo3_webroot', 'public');

set('rsync_src', __DIR__);
set('rsync',[
    'exclude'      => [
        '.git',
        'deploy.php',
        '.ddev',
        '.env',
        '.gitignore',
        '.gitlab-ci.yml',
        'readme.md',
        '.idea',
        ''
    ],
    'exclude-file' => false,
    'include'      => [],
    'include-file' => false,
    'filter'       => [],
    'filter-file'  => false,
    'filter-perdir'=> false,
    'flags'        => 'rzlv', // Recursive, with compress
    'options'      => ['delete'],
    'timeout'      => 60,
]);

/**
 * Shared directories
 */
set('shared_dirs', [
    '{{typo3_webroot}}/fileadmin',
    '{{typo3_webroot}}/uploads',
    'var/labels'
]);

/**
 * Shared files
 */
set('shared_files', [
    '.env'
]);
