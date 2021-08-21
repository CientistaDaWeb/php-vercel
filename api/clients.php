<?php
require __DIR__ . '/../vendor/autoload.php';

$clients = \App\Clients::getAll();
echo json_encode($clients, true);
