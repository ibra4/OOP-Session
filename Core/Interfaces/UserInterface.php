<?php

namespace Core\Interfaces;

use Core\User;

interface UserInterface
{
    public function getAll() : array;

    public function getFirst() : User;

    public function hasAccess($permission, \Core\Files\JsonManager $jsonManager);
}
