<?php

class Clients
{
    private $clients = [
        [
            'id' => 10,
            'name' => 'Fernando'
        ]
    ];

    public static function getAll()
    {
        return json_encode(self::$clients, true);
    }
}
