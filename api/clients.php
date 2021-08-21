<?php
require __DIR__ . '/../vendor/autoload.php';

$clients = Clients::getAll();
echo json_encode($clients, true);
