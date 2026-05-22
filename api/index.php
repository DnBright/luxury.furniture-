<?php

/**
 * Vercel Serverless Entrypoint for Laravel
 * Routes all requests through Laravel's HTTP kernel
 */

// Set correct working directory to the Laravel root
chdir(__DIR__ . '/..');

// Define storage path writable on Vercel's /tmp
$_ENV['STORAGE_PATH'] = '/tmp';

// Set up writable SQLite database on serverless /tmp
if (!file_exists('/tmp/database.sqlite')) {
    $dbSource = __DIR__ . '/../database/database.sqlite';
    if (file_exists($dbSource)) {
        copy($dbSource, '/tmp/database.sqlite');
    } else {
        // Fallback to prevent crash
        touch('/tmp/database.sqlite');
    }
}

define('LARAVEL_START', microtime(true));

// Maintenance mode check
if (file_exists($maintenance = __DIR__ . '/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// Autoloader
require __DIR__ . '/../vendor/autoload.php';

// Bootstrap Laravel and handle request
$app = require_once __DIR__ . '/../bootstrap/app.php';

use Illuminate\Http\Request;
$app->handleRequest(Request::capture());
