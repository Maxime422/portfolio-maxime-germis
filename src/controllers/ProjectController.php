<?php

namespace Application\controllers;

use Application\Models\users\UserModel;

class ProjectController
{
  public function home(): void
  {
    // require the login page
    require_once './src/views/pages/home.php';
  }

  public function contact(): void
  {
    // require the login page
    require_once './src/views/pages/contact.php';
  }

  public function projects(): void
  {
    // require the login page
    require_once './src/views/pages/projects.php';
  }

  public function about(): void
  {
    // require the login page
    require_once './src/views/pages/about.php';
  }

  public function legacy(): void
  {
    // require the login page
    require_once './src/views/pages/legacy.php';
  }
}
