<?php

namespace Application\Models;

use Application\Lib\DatabaseConnexion;

class ProjectModel
{
  private DatabaseConnexion $connexion;

  public function __construct()
  {
    $this->connexion = new DatabaseConnexion();
  }
}
