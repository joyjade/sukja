<?php snippet('nav') ?>
<section class="main">
  <?php foreach ($page->children()->listed() as $painting): ?>
    <div class="painting">
      <a href="<?= $painting->url() ?>">
      <h3><?= $painting->title() ?></h3>
      <p class="subtitle"><?= $painting->specs() ?></p>

      <?php 
        $photo = $painting->images()->sorted()->first();
         snippet ('painting-srcset', ['photo' => $photo])
      ?>

      </a>
    </div>
  <?php endforeach ?>	
</section>

<?php snippet('footer') ?>