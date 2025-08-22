<?php snippet('nav') ?>
  <section>
    <?= $page->bio()->kirbytext() ?>
  </section>
  <section class="links">
    <?php foreach($page->children()->listed() as $link): ?>
      <a href="<?= $link->url() ?>"><?= $link->about_label()?></a>
    <?php endforeach ?>
  </section>

  <section class="insta">
    <div class='headline'>
      <span>Recent posts on Instagram</span>
      <a href="">Follow @sukjakang</a>
    </div>  
<!-- Elfsight Instagram Feed | Untitled Instagram Feed -->
    <script src="https://elfsightcdn.com/platform.js" async></script>

    <div class="elfsight-app-918b3613-98b1-4b21-bb57-c71c366f8eaf" data-elfsight-app-lazy></div>
  </section>
<?php snippet('footer') ?>