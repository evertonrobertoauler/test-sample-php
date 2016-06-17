<?php
include 'vendor/autoload.php';

use AspectMock\Kernel;

$kernel = Kernel::getInstance();
$kernel->init([
  'debug' => true,
  'includePaths' => [__DIR__ . '/src'],
]);