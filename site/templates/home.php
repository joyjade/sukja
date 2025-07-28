<?php snippet('nav') ?>
  <section>
    <?php if($image = $page->image()): ?>
      <img 
      class="feature-img" 
      src="<?= $image->resize(400)->url() ?>"
      srcset="<?= $image->srcset([400, 600, 900, 1200, 1800]) ?>"
      alt="<?= $image->alt() ?> | Credit: <?= $image->credit() ?>">
    <?php endif ?>
  </section>
<?php snippet('footer') ?>