<?php

class DatabaseConnection
{
	public ?PDO $database = null;

	public function getConnection()
	{
    	if ($this->database === null) {
        	$this->database = new PDO('mysql:host=localhost;dbname=sin;charset=utf8', 'root', '');
    	}

    	return $this->database;
	}
}