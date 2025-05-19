<?php
// Fonction pour obtenir la langue actuelle
function getCurrentLang(): string
{
  return $_SESSION['lang'] ?? 'fr';
}

// Fonction pour obtenir une traduction
function translate(string $key): string
{
  global $translations;
  return $translations[$key] ?? $key;
}

// Fonction pour générer les URLs
function url(string $path = ''): string
{
  $base = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/') . '/';
  return $base . ltrim($path, '/');
}
