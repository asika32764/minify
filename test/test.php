<?php
error_reporting(-1);
include_once __DIR__ . '/../vendor/autoload.php';
echo \Asika\Minifier\CssMinifier::process(__DIR__ . '/test.css');
