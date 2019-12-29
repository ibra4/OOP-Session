<?php

namespace Core;

// Aliasing :
// use Core\Interfaces\PostInterface as f;

class Post implements Interfaces\PostInterface
{
    public function setDatabase(Database $database) {
        $this->database = $database;
        $this->database->table = 'posts';
    }
    public function getAll()
    {
        return $this->database->getAll();
    }
}
