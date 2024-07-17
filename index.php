<?php
require_once('bootstrap/app.php');

use App\Helpers\Wizard;

$wizard = new Wizard();

vardump($wizard->getElixirs());
