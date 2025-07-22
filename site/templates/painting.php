<?php snippet('nav') ?>

<section class="main">
  <div class="painting">
    <?php foreach ($page->files()->sorted() as $photo): ?>
      <figure>
        <img src="<?= $photo->url() ?>" alt="">
      </figure>
      <?php endforeach ?>	
      <h3><?= $page->title() ?></h3>
      <p class="subtitle"><?= $page->materials() ?></p>
      <p class="subtitle"><?= $page->specs() ?></p>
  </div>


  <div class="nav-arrows">
    <div class="left">
      <a href="<?=$page->prevListed() ? $page->prevListed()->url() : '' ?>">
        <img src="<?= url('assets/icons/arrow-lines.svg')?>" class="arrow" alt="">
      </a>
    </div>
    <div class="right">
      <a href="<?=$page->nextListed() ? $page->nextListed()->url() : ''?>">
        <img src="<?= url('assets/icons/arrow-lines.svg')?>" class="arrow" alt="">
      </a>
    </div>
  </div>
</section>

<?php snippet('footer') ?>