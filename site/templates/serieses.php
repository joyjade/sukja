<?php snippet('nav') ?>
  <div>
  <?php foreach ($page->children()->listed() as $series): ?>
    <h3><?= $series->title() ?></h3>
  <?php endforeach ?>	
  </div>
<?php snippet('footer') ?>