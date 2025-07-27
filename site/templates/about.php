<?php snippet('nav') ?>
  <section>
    <?= $page->bio()->kirbytext() ?>
  </section>
  <section class="links">
    <?php foreach($page->children() as $link): ?>
      <a href="<?= $link->url() ?>" class="purple-link"><?= $link->about_label()?></a>
    <?php endforeach ?>
  </section>

  <section class="insta">
    <div>
      <span>Recent posts on Instagram</span>
      <a href="" class="purple-link">Follow @sukjakang</a>
    </div>  
  </section>
<?php snippet('footer') ?>