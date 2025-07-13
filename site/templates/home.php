<?php snippet('nav') ?>
<div class="section">
  <?php if($image = $page->image()): ?>
    <img class="feature-img" src="<?= $image->url() ?>" alt="<?= $image->alt() ?> | Credit: <?= $image->credit() ?>">
  <?php endif ?>
</div>
<?php snippet('footer') ?>