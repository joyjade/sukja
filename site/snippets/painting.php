<div class="<?=$classroom?>">
  <a href="<?= $painting->url() ?>">
    <figure>
      <img src="<?= $painting->files()->sorted()->first()->url()?>" alt="<?= $painting->alt()?>">
    </figure>
  </a>
  <h3><?= $painting->title()?></h3>
  <p class="subtitle"><?= $painting->specs() ?></p>

</div>