<div class="<?=$classroom?>">
  <a href="<?= $painting->url() ?>">
    <?php 
          $photo = $painting->files()->sorted()->first();
          snippet ('painting-srcset', ['photo' => $photo, 'max' => 'grid'])
        ?>
  </a>
  <h3><?= $painting->title()?></h3>
  <p class="subtitle"><?= $painting->specs() ?></p>

</div>