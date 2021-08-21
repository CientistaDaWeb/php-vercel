<?php

class Clients
{
    private $clients = [
        [
            'id' => 10,
            'name' => 'Fernando'
        ],
        [
            'id' => 2,
            'name' => 'Henrique'
        ]
    ];

    public static function getAll()
    {
        return self::$clients;
    }
}
