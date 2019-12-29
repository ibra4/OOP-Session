<?php

namespace Core;

use Core\Interfaces\UserInterface;
use Core\Files\JsonManager;

class User implements UserInterface
{
    private $database;

    public $username, $role;
    
    public function __construct(Database $database)
    {
        $this->database = $database;
        $this->database->table = 'users';
    }

    public function getAll() : array {
        return $this->database->getAll();
    }

    public function getFirst() : self {
        $user = $this->database->getFirst();
        $this->username = $user['username'];
        $this->role = $user['role'];
        return $this;
    }
    
    public function hasAccess($permission, JsonManager $manager) {
        return $manager->exists($this->role, $permission);
    }
}
