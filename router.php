<?php
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if ($uri !== '/' && file_exists(__DIR__ . $uri)) {
    return false;
}

include __DIR__ . '/index.php';
