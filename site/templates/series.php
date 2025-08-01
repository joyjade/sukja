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
      <?php snippet('painting', ['painting' => $painting, 'classroom' => 'series']) ?>      
    <?php endforeach ?>	
  </div>

</section>
<?php snippet('footer') ?>
