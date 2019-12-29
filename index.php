<?php

use Core\Files\JsonManager;

define('ROOT', dirname(__FILE__));

require_once 'Functions/autoloader.php';
require_once 'Functions/helper.php';
require_once 'Config/config.php';

spl_autoload_register('autoloader');

$database = new Core\Database('host', 'user', 'password', 'dbname');

// Constructor Injection
$user = new Core\User($database);
$all_users = $user->getAll();
$first_user = $user->getFirst();

// Setter Injection
$posts = new Core\Post();
$posts->setDatabase($database);
$all_posts = $posts->getAll();

d($all_posts);
d($all_users);

echo '<h1>First User</h1>';
d($first_user);

$jsonService = new JsonManager('permissions/roles.json');
d($first_user->hasAccess('add user', $jsonService));