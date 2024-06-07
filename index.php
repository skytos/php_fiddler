<?php

spl_autoload_register(function ($class_name) {
	// replace \'s with \'s or /'s depending on OS, lowercase, and add .php
	require strtolower(strtr($class_name, '\\', DIRECTORY_SEPARATOR)) . '.php';
});

// note that you can get rid of the use line if you just use App\User on the new lines
use App\User;

$user1 = new User("Sky");
$user1->greet();

$user2 = new User("Phil");
$user2->greet();
