<?php snippet('nav') ?>
<section class="main">
  <?php foreach ($page->children()->listed()->sortBy('year', 'desc') as $series): ?>
    <div class="series">
      <a href="<?= $series->url() ?>">
      <h3><?= $series->title() ?></h3>
      <?php if ($cover = $series->cover()->toPage()): ?>
        <?php 
          if ($photo = $cover->files()->sorted()->first()): 
            snippet ('painting-srcset', ['photo' => $photo, 'max' => 'grid']);
          endif; ?>
      <?php endif ?>
      </a>
    </div>
    <?php endforeach ?>	
</section>
<section class="pseudo-footer">
  <a href="/" class="purple-link">
    Contact the artist about pricing and availability
  </a>
</section>
<?php snippet('footer') ?>
