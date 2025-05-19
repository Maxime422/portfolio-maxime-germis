<?php

namespace Application\Lib;

use Dotenv\Dotenv;
require_once __DIR__ . '/../../vendor/autoload.php';

$dotenv = Dotenv::createImmutable(__DIR__ . '/../../');
$dotenv->load();
class DatabaseConnexion
{
  public ?\PDO $database = null;

  public function getConnexion(): \PDO
  {
    if ($this->database === null) {
      $this->database = new \PDO('mysql:host=' . $_ENV['DB_HOST'] . ';dbname=' . $_ENV['DB_NAME'] . ';charset=utf8', $_ENV['DB_USER'], $_ENV['DB_PASSWORD']);
    }

    return $this->database;
  }
}
