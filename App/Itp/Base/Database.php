<?php

namespace Itp\Base;

use \PDO;

class Database {
	protected static $pdo;
	private $host = 'itp460.usc.edu';
	private $dbname = 'music';
	private $user = 'student';
	private $password = 'ttrojan';

	public function __construct()
	{
		if (!self::$pdo) {
			$connectionString = "mysql:host=" . $this->host . ";dbname=" . $this->dbname;
			self::$pdo = new PDO($connectionString, $this->user, $this->password);
		}
	}
}