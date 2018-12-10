<?php

use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;



$serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/secret/sapiadvertiser-35f0f-a96e6598d2d9.json');

$firebase = (new Factory)
    ->withServiceAccount($serviceAccount)
    ->create();

$database = $firebase->getDatabase();

(print_r($database));