<?php

/**
 * Footer Component
 *
 * This file renders the footer of the portfolio.
 * It includes navigation links, legal information, and social media links.
 *
 * @package PortfolioMaximeGermis
 */

// Include GlobalVar file to define $baseUrl
require_once __DIR__ . '/../../lib/GlobalVar.php';
?>

<footer>
  <div class="footer-main-content">
    <!-- Logo link to home page -->
    <a href="<?= url('home') ?>" class="logo-link" title="Retour à l'accueil">
      <img class="logo" src="<?= url('public/assets/logos/logo-128.png') ?>" alt="Logo Maxime Germis" width="128" height="128" />
    </a>

    <!-- Footer content wrapper -->
    <div class="footer-content-wrapper">
      <h2 class="secondary-title">
        Un projet en tête&nbsp;?
        <span class="line-break">
          Discutons-en
          <span class="icon-wrapper">
            <i aria-hidden="true" focusable="false" class="mdi_call-made icon-arrow" role="presentation"></i>
          </span>
        </span>
      </h2>

      <!-- Main site navigation links -->
      <nav class="website-navigation" aria-label="Liens du site web"></nav>
      <ul>
        <span class="gray-text">Site Web</span>
        <li><a href="<?= url('home') ?>" title="Accueil">Accueil</a></li>
        <li><a href="<?= url('about') ?>" title="À propos">À propos</a></li>
        <li><a href="<?= url('projects') ?>" title="Projets">Projets</a></li>
        <li><a href="<?= url('contact') ?>" title="Contact">Contact</a></li>
      </ul>

      <div class="footer-secondary">
        <!-- Legal navigation links -->
        <nav class="legal-navigation" aria-label="Liens légaux">
          <ul>
            <span class="gray-text">Légal</span>
            <li><a href="<?= url('rgpd') ?>" title="Politique de confidentialité">Politique de confidentialité</a></li>
            <li><a href="<?= url('legacy') ?>" title="Mentions légales">Mentions légales</a></li>
          </ul>
        </nav>

        <!-- Social media links -->
        <nav class="social-navigation" aria-label="Réseaux sociaux">
          <a href="https://www.linkedin.com/in/maxime-germis/"
            target="_blank"
            rel="noopener noreferrer"
            aria-label="LinkedIn - Maxime Germis"
            title="LinkedIn">
            <i class="mdi_linkedin" aria-hidden="true"></i>
          </a>
          <a href="https://www.behance.net/maximegermis"
            target="_blank"
            rel="noopener noreferrer"
            aria-label="Behance - Maxime Germis"
            title="Behance">
            <i class="ri_behance-fill" aria-hidden="true"></i>
          </a>
          <a href="https://github.com/Maxime422"
            target="_blank"
            rel="noopener noreferrer"
            aria-label="GitHub - Maxime Germis"
            title="GitHub">
            <i class="logos-devicon_github" aria-hidden="true"></i>
          </a>
        </nav>
      </div>
    </div>
  </div>

  <div class="footer-sub-content">
    <!-- Copyright and design credits -->
    <span>&copy; <?= date('Y') ?> Nexora. Tous droits réservés.</span>

    <span>Design & développement : Maxime Germis</span>

    <!-- Language switcher navigation -->
    <nav class="lang-switcher" aria-label="Sélecteur de langue">
      <a href="?lang=fr"
        class="<?= getCurrentLang() === 'fr' ? 'active' : '' ?>"
        hreflang="fr"
        aria-label="Version française"
        title="Version française"
        <?= getCurrentLang() === 'fr' ? 'aria-current="true"' : '' ?>>
        FR
      </a>
      <span aria-hidden="true">/</span>
      <a href="?lang=en"
        class="<?= getCurrentLang() === 'en' ? 'active' : '' ?>"
        hreflang="en"
        aria-label="English version"
        title="English version"
        <?= getCurrentLang() === 'en' ? 'aria-current="true"' : '' ?>>
        EN
      </a>
    </nav>
  </div>
</footer>
