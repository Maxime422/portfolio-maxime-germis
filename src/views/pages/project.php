<!doctype html>
<html lang="fr" data-theme="light">

<?php require_once(__DIR__ . '/../components/head.php') ?>

<body>
  <?= $content ?? "<p>Content not found.</p>" ?>

  <?php if ($footer): ?>
    <?php require_once(__DIR__ . '/../components/footer.php'); ?>
  <?php endif; ?>

  <!-- Essential Scripts -->
  <script type="module" src="<?= url('public/js/modules/functions.js') ?>"></script>

  <?php if (isset($scriptName)): ?>
    <script type="module" src="<?= url('public/js/pages/' . htmlspecialchars($scriptName)) ?>"></script>
  <?php endif; ?>

  <script>
    if ('serviceWorker' in navigator) {
      window.addEventListener('load', () => {
        navigator.serviceWorker.register('<?= url('public/service-worker.js') ?>');
      });
    }
  </script>
</body>

</html>
