<?php

// O Adapter é um padrão de projeto estrutural que permite objetos com interfaces incompatíveis colaborarem entre si.

require '../vendor/autoload.php';

use app\library\Client;
use app\library\SmsNotification;
use app\library\SmsNotificationAdapter;

$client = new Client;
$client->send(new SmsNotificationAdapter(new SmsNotification));
