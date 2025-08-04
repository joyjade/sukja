<figure>
  <?php if($max == 'full') : ?>
    <img
        loading="eager"
        alt="<?= $photo->alt() ?>"
        src="<?= $photo->resize(400)->url() ?>"
        srcset="<?= $photo->srcset([400, 600, 900, 1200, 1800]) ?>"
        width="<?= $photo->resize(1800)->width() ?>"
        height="<?= $photo->resize(1800)->height() ?>"
        aria-describedby="materials"
    >
  <?php else : ?>
    <img
      loading="lazy"
      <?php if($photo->alt()->isNotEmpty()): ?>
        alt="<?= $photo->alt() ?>"
      <?php else : ?>
        alt="Photo of painting by the artist"
      <?php endif ?>
      src="<?= $photo->resize(400)->url() ?>"
      srcset="<?= $photo->srcset([400, 600, 900]) ?>"
      width="<?= $photo->resize(900)->width() ?>"
      height="<?= $photo->resize(900)->height() ?>"
      aria-describedby="materials"
    >
  <?php endif ?>
</figure>