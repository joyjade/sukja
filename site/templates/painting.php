<?php snippet('nav') ?>

<section class="main">
  <div class="painting">
    <?php foreach ($page->files()->sorted() as $photo): ?>
      <figure>
        <img
            alt="<?= $photo->alt() ?>"
            src="<?= $photo->resize(400)->url() ?>"
            srcset="<?= $photo->srcset([300, 600, 900, 1200, 1800]) ?>"
            width="<?= $photo->resize(1800)->width() ?>"
            height="<?= $photo->resize(1800)->height() ?>"
        >
      </figure>
    <?php endforeach ?>	
      <h3><?= $page->title() ?></h3>

      <?php $materials = $page->materials()->isNotEmpty() ? $page->materials() : $page->parent()->materials();
        if ($materials): ?>
        <p class="subtitle"><?= $materials ?></p>
      <?php endif ?>
      <p class="subtitle"><?= $page->specs() ?></p>
  </div>


  <div class="nav-arrows">
    <div class="left">
      <a href="<?=$page->prevListed() ? $page->prevListed()->url() : '' ?>">
        <?= asset('assets/icons/arrow-lines.svg')->read()?>
      </a>
    </div>
    <div class="right">
      <a href="<?=$page->nextListed() ? $page->nextListed()->url() : ''?>">
        <?= asset('assets/icons/arrow-lines.svg')->read()?>
      </a>
    </div>
  </div>
</section>

<?php snippet('footer') ?>