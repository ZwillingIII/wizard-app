<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php');

$dotenv = Dotenv\Dotenv::create(realpath($_SERVER['DOCUMENT_ROOT']));
$dotenv->load();

require_once $_SERVER['DOCUMENT_ROOT'] . '/app/Helpers/helpers.php';