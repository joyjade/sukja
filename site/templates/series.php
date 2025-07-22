<?php snippet('nav') ?>
<section class="main">
  <h1><?= $page->title() ?></h1>
  
  <?php if ($page->description()->isNotEmpty()): ?>
    <p class="description"><?= $page->description() ?></h1>
  <?php endif ?>

  <div class="gallery">
    <?php foreach ($page->children()->listed() as $painting): ?>
      <?php snippet('painting', ['painting' => $painting, 'classroom' => 'series']) ?>      
    <?php endforeach ?>	
  </div>

</section>
<?php snippet('footer') ?>
