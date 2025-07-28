<figure>
  <img
      alt="<?= $photo->alt() ?>"
      src="<?= $photo->resize(400)->url() ?>"
      <?php if($max == 'full') : ?>
        srcset="<?= $photo->srcset([400, 600, 900, 1200, 1800]) ?>"
      <?php else : ?>
        srcset="<?= $photo->srcset([400, 600, 900]) ?>"
      <?php endif ?>
      width="<?= $photo->resize(1800)->width() ?>"
      height="<?= $photo->resize(1800)->height() ?>"
  >
</figure>