<?php snippet('nav') ?>
  <section>
    <?php if($image = $site->banner()->toFile()): ?>
      <img 
      class="feature-img desktop-crop" 
      src="<?= $image->resize(400)->url() ?>"
      srcset="<?= $image->srcset([400, 600, 900, 1200, 1800]) ?>"
      alt="<?= $image->alt() ?> | Credit: <?= $image->credit() ?>">
    <?php endif ?>
    <?php if($image = $site->mobile()->toFile()): ?>
      <a href="<?= $site->find('paintings')->url() ?>">
        <img 
        class="feature-img mobile-crop" 
        src="<?= $image->resize(400)->url() ?>"
        srcset="<?= $image->srcset([400, 600]) ?>"
        alt="<?= $image->alt() ?> | Credit: <?= $image->credit() ?>">
      </a>
    <?php endif ?>
  </section>
<?php snippet('footer') ?>