<?php

namespace Core;

class Database
{
    public $table;

    private $data = [
        'posts' => [
            'post 1',
            'post 2',
            'post 3',
            'post 4'
        ],
        'users' => [
            [
                'username' => 'ahmad',
                'role' => 'admin'
            ],
            [
                'username' => 'salah',
                'role' => 'editor'
            ],
            [
                'username' => 'sara',
                'role' => 'admin'
            ]

        ]
    ];

    public function __construct($host, $user, $password, $dbname)
    {
        echo 'Database Connected!!<br>';
    }

    public function getAll() {
        return $this->data[$this->table];
    }

    public function getFirst() {
        return $this->data[$this->table][0];
    }
}
