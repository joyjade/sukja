<?php snippet('nav') ?>
<section class="main">
  <h1><?= $page->title() ?></h1>
  
  <?php if ($page->description()->isNotEmpty()): ?>
    <p class="description"><?= $page->description() ?></h1>
  <?php endif ?>

  <!-- <?php dump($page->children()->listed()) ?> -->
  <div class="gallery">
    <?php foreach ($page->children()->listed() as $painting): ?>
      <div class="series">
        <a href="<?= $painting->url() ?>">
          <figure>
            <img src="<?= $painting->files()->sorted()->first()->url()?>" alt="<?= $painting->alt()?>">
          </figure>
        </a>
      </div>
      <?php endforeach ?>	
  </div>

</section>
<?php snippet('footer') ?>
