<?php
session_start();

// Gestion basique de la langue
if (isset($_GET['lang'])) {
  $_SESSION['lang'] = $_GET['lang'];
  $url = strtok($_SERVER["REQUEST_URI"], '?');
  header("Location: $url");
  exit;
}

// Charge les traductions
$lang = $_SESSION['lang'] ?? 'fr';
$translations = require __DIR__ . '/src/lang/' . $lang . '.php';

require_once './vendor/autoload.php';
$baseUrl = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/') . '/';

try {
  if (isset($_GET['action'])) {
    $controller = new \Application\controllers\ProjectController();
    $action = $_GET['action'] ?? 'index';
    if (method_exists($controller, $action)) {
      $controller->$action();
    } else {
      throw new Exception("Undefined action : $action");
    }
  } else {
    require './src/views/pages/home.php';
  }
} catch (Exception $e) {
  $errorMessage = $e->getMessage();
  require './src/views/pages/error-404.php';
}
