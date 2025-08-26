<?php snippet('nav'); 
  $materials = $page->materials()->isNotEmpty() ? $page->materials() : $page->parent()->materials();
?>

<section class="main">
  <div class="painting">
    <?php foreach ($page->files()->sorted() as $photo): ?>
     <?php snippet ('painting-srcset', ['photo' => $photo, 'max' => 'full'])?>
    <?php endforeach ?>	

    <h3><?= $page->title() ?></h3>

    <?php if ($materials): ?>
      <p class="subtitle" id="materials"><?= $materials ?></p>
    <?php endif ?>
    <p class="subtitle"><?= $page->specs() ?></p>
    <?php if( $year = $page->year()->toDate('Y')) :?>
      <p class="subtitle"><?= $year ?></p>
    <?php endif ?>
  </div>

  <!-- NAVIGATION -->
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