<?php

namespace App;

class Clients
{
    const CLIENTS = [
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
        return self::CLIENTS;
    }
}
