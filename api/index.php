<?php

/**
 * Vercel Serverless Entrypoint for Laravel
 * Routes all requests through Laravel's HTTP kernel
 */

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

chdir(__DIR__ . '/..');

// Set up writable storage directories in Vercel's /tmp
$storagePath = '/tmp/laravel_storage';
if (!is_dir($storagePath)) {
    mkdir($storagePath, 0777, true);
    mkdir($storagePath . '/framework/cache', 0777, true);
    mkdir($storagePath . '/framework/sessions', 0777, true);
    mkdir($storagePath . '/framework/views', 0777, true);
    mkdir($storagePath . '/logs', 0777, true);
}

// Ensure database exists
if (!file_exists('/tmp/database.sqlite')) {
    $dbSource = __DIR__ . '/../database/database.sqlite';
    if (file_exists($dbSource)) {
        copy($dbSource, '/tmp/database.sqlite');
    } else {
        touch('/tmp/database.sqlite');
    }
}

// Clean up problematic cache files
@unlink(__DIR__ . '/../bootstrap/cache/packages.php');
@unlink(__DIR__ . '/../bootstrap/cache/services.php');

define('LARAVEL_START', microtime(true));

if (file_exists($maintenance = __DIR__ . '/../storage/framework/maintenance.php')) {
    require $maintenance;
}

require __DIR__ . '/../vendor/autoload.php';

$app = require_once __DIR__ . '/../bootstrap/app.php';

// Override storage path!
$app->useStoragePath($storagePath);

use Illuminate\Http\Request;
$app->handleRequest(Request::capture());
