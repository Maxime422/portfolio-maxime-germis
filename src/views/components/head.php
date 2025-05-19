<?php
require_once __DIR__ . '/../../lib/GlobalVar.php';
?>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?= htmlspecialchars($title ?? "Portfolio Maxime Germis | Développeur Web") ?></title>

  <!-- Primary Meta Tags -->
  <meta name="description" content="<?= htmlspecialchars($description ?? "Portfolio professionnel de Maxime Germis, développeur web passionné. Découvrez ses projets web, ses compétences en PHP, JavaScript et technologies modernes, ainsi que son parcours de formation. Disponible pour collaborer sur vos sites, applications et besoins numériques.") ?>" />
  <meta name="author" content="Maxime Germis" />
  <meta name="keywords" content="portfolio, web developer, frontend, backend, fullstack" />

  <link rel="icon" type="image/png" sizes="76x76" href="<?= url('public/assets/logos/logo-128.png') ?>" />
  <link rel="stylesheet" href="<?= url('public/css/style.css') ?>" />
  <link rel="stylesheet" href="<?= url('public/css/icons.css') ?>" />

  <!-- Preconnect for Performance -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700;800;900&display=swap" rel="stylesheet" />

  <!-- PWA Manifest -->
  <link rel="manifest" href="<?= url('public/manifest.json') ?>" />
</head>
