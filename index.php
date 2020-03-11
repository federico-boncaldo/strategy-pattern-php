<?php

require 'vendor/autoload.php';

$app = new App\App;

$app->log('Some information here.', new App\LogToXWebService);