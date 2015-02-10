<?php

namespace Itp\Music;

use \Itp\Base\Database;
use \PDO;

class GenreQuery extends Database {
	public function __construct()
	{
		parent::__construct();
	}

	// Returns all genres from the genres table ordered by genre name
	public function getAll()
	{
		$sql = "
			SELECT genre, id
			FROM genres
			ORDER BY genre ASC
		";

		$statement = parent::$pdo->prepare($sql);
		$statement->execute();
		$genres = $statement->fetchAll(PDO::FETCH_OBJ);

		return $genres;
	}
}