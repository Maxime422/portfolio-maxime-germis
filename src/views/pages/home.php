<?php

/**
 * Home Page
 *
 * This file renders the home page of the portfolio.
 * It includes a hero section with a background video, language switcher, and main content.
 *
 * @package PortfolioMaximeGermis
 */

// Include GlobalVar file to define $baseUrl
require_once __DIR__ . '/../../lib/GlobalVar.php';

// Head variables SEO
$title = $_SESSION['translations']['home_title'] ?? "Portfolio Maxime Germis";
$description = $_SESSION['translations']['home_description'] ?? "Portfolio professionnel de Maxime Germis, développeur web.";

// Components variables
$footer = "footer";

ob_start();
?>

<main id="home-page">
  <!-- Hero section with background video -->
  <video autoplay muted playsinline id="bg-video">
    <source src="<?= url('public/assets/videos/0001-0350.mp4') ?>" type="video/mp4">
  </video>
  <section class="content">
    <div id="header">
      <div class="small-line"></div>

      <!-- Language switcher navigation -->
      <nav class="lang-switcher" aria-label="Sélecteur de langue">
        <a href="?lang=fr" class="<?= getCurrentLang() === 'fr' ? 'active' : '' ?>" hreflang="fr" title="Version française">FR</a>
        <span>/</span>
        <a href="?lang=en" class="<?= getCurrentLang() === 'en' ? 'active' : '' ?>" hreflang="en" title="English version">EN</a>
      </nav>
    </div>
    <div class="main-content">
      <div class="text-content">
        <div class="main-text">
          <!-- Status indicator and main title -->
          <span class="green-text"><i class="green-light" aria-hidden="true"></i><?= translate('status_available') ?></span>
          <h1 id="primary-title"><?= translate('name_maxime') ?></h1>
          <span class="subtitle">Développeur Web Full Stack</span>
        </div>
        <div class="sub-text">
          <img class="logo" src="<?= url('public/assets/logos/logo-128.png') ?>" alt="Logo Maxime Germis" />
          <div class="links">
            <span>Nexora Project</span>
            <!-- Social links -->
            <nav aria-label="Réseaux sociaux">
              <a href="https://www.linkedin.com/in/maxime-germis/" target="_blank" rel="noopener" aria-label="LinkedIn - Maxime Germis" title="LinkedIn">
                <i class="mdi_linkedin" aria-hidden="true"></i>
              </a>
              <a href="https://www.behance.net/maximegermis" target="_blank" rel="noopener" aria-label="Behance - Maxime Germis" title="Behance">
                <i class="ri_behance-fill" aria-hidden="true"></i>
              </a>
              <a href="https://github.com/Maxime422" target="_blank" rel="noopener" aria-label="GitHub - Maxime Germis" title="GitHub">
                <i class="logos-devicon_github" aria-hidden="true"></i>
              </a>
            </nav>
          </div>
          <!-- Tags -->
          <div class="tags">
            <span class="gray-text">Développement web</span>
            <span class="gray-text">UI UX Design</span>
            <span class="gray-text">Conception</span>
          </div>
        </div>
      </div>
      <div class="nav-links">
        <!-- Main navigation links -->
        <a href="<?= url('about') ?>" class="gray-text" title="À propos">À propos</a>
        <a href="<?= url('projects') ?>" class="gray-text" title="Projets">Projets</a>
        <a href="<?= url('contact') ?>" class="gray-text" title="Contact">Contact</a>

        <!-- Call-to-action -->
        <a href="<?= url('contact') ?>" class="btn-primary" title="Me contacter">Me contacter<i aria-hidden="true" focusable="false" class="mdi_call-made"></i></a>
      </div>
    </div>
  </section>
</main>

<?php $content = ob_get_clean();
require_once(__DIR__ . '/../layouts/layout.php');
?>