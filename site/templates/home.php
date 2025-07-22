<?php snippet('nav') ?>
  <section>
    <?php if($image = $page->image()): ?>
      <img class="feature-img" src="<?= $image->url() ?>" alt="<?= $image->alt() ?> | Credit: <?= $image->credit() ?>">
    <?php endif ?>
  </section>
<?php snippet('footer') ?>