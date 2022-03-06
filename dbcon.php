<?php
require __DIR__.'/vendor/autoload.php';

use Kreait\Firebase\Factory;
use Kreait\Firebase\Auth;

$factory = (new Factory)
->withServiceAccount('ungacompany-6485c-firebase-adminsdk-3qr93-0ab066d7a0.json')
->withDatabaseUri('https://ungacompany-6485c-default-rtdb.firebaseio.com/');

$database = $factory->createDatabase();
$auth = $factory->createAuth();

?> 