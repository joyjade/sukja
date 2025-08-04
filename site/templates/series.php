<?php snippet('nav') ?>
<section class="main">
  <div class="heading">

    <h1><?= $page->title() ?></h1>
    
    <?php if ($page->description()->isNotEmpty()): ?>
      <p class="description"><?= $page->description() ?></p>
    <?php endif ?>
    
    <?php if ($page->materials()->isNotEmpty()): ?>
      <p class="year"><?= $page->materials() ?></p>
    <?php endif ?>
      
    <?php if ($page->year()->isNotEmpty()): ?>
      <p class="year"><?= $page->year()->toDate('Y') ?></p>
    <?php endif ?>
  </div>

  <div class="gallery">
    <?php foreach ($page->children()->listed() as $painting): ?>

      <div class="series">
        <a href="<?= $painting->url() ?>">
          <?php 
                $photo = $painting->files()->sorted()->first();
                snippet ('painting-srcset', ['photo' => $photo, 'max' => 'grid'])
              ?>
        <h3><?= $painting->title()?></h3>
      </a>
      <p class="subtitle"><?= $painting->specs() ?></p>
      </div>

    <?php endforeach ?>	
  </div>

</section>
<?php snippet('footer') ?>
