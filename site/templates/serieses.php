<?php snippet('nav') ?>
<section class="main">
  <?php foreach ($page->children()->listed() as $series): ?>
    <div class="series">
      <a href="<?= $series->url() ?>">
      <h3><?= $series->title() ?></h3>
      <?php if ($cover = $series->cover()->toPage()): ?>
        <?php if ($photo = $cover->files()->sorted()->first()): ?>
        <figure>
          <img src="<?= $photo->url()?>" alt="<?= $photo->alt()?>">
        </figure>
        <?php endif ?>
      <?php endif ?>
      </a>
    </div>
    <?php endforeach ?>	
</section>
<?php snippet('footer') ?>
