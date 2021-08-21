<?php

require __DIR__ . '/../vendor/autoload.php';

echo json_encode(App / Clients::getAll(), true);
