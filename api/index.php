<?php

/**
 * Vercel Serverless Entrypoint
 * This file forwards all Vercel requests to the standard Laravel public/index.php
 */

require __DIR__ . '/../public/index.php';
