<?php snippet('nav') ?>

<section class="main">
  <div class="painting">
    <?php foreach ($page->files()->sorted() as $photo): ?>
      <figure>
        <img src="<?= $photo->url() ?>" alt="">
      </figure>
      <?php endforeach ?>	
      <h3><?= $page->title() ?></h3>
      <p class="subtitle"><?= $page->specs() ?></p>
  </div>


  <a href="<?=$page->prevListed() ? $page->prevListed()->url() : '' ?>">Prev</a>
  <a href="<?=$page->nextListed() ? $page->nextListed()->url() : ''?>">Next</a>
</section>

<?php snippet('footer') ?>