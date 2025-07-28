<?php snippet('nav') ?>

<section class="main">
  <div class="painting">
    <?php foreach ($page->files()->sorted() as $photo): ?>
     <?php snippet ('painting-srcset', ['photo' => $photo])?>
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
        <?php if($page->prevListed()) :?>
          <a href="<?=$page->prevListed()->url()?>">
            <?= asset('assets/icons/arrow-lines.svg')->read()?>
          </a>
        <?php endif ?>
      </div>
      <div class="right">
        <?php if($page->nextListed()) :?>
        <a href="<?= $page->nextListed()->url() ?>">
          <?= asset('assets/icons/arrow-lines.svg')->read()?>
        </a>
        <?php endif ?>
      </div>
    </div>
    <div class="back-x">
      <a href="<?= $page->parent()->url() ?>">
        <?= asset('assets/icons/x.svg')->read()?>
      </a>
    </div>
</section>


<?php snippet('footer') ?>