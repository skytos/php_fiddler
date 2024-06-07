<?php

namespace App;

class User {
	private $name;

	function __construct($name) {
		$this->name = $name;
	}

	function greet() {
		printf("Hello. I'm %s.\n", $this->name);
	}
}
