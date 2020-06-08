<?php
require_once __DIR__ . '/vendor/autoload.php';
use Pack\Test\Service;
$obj = new Service();
$msg = $obj->hello();
var_dump($msg);