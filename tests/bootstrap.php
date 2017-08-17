<?php

if (!$_SERVER["DOCUMENT_ROOT"]) {
    $_SERVER["DOCUMENT_ROOT"] = realpath(dirname(__FILE__) . '/../');
}
include_once $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';

