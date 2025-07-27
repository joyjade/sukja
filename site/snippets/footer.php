<?php 
  $contact = $site->find('about/contact');
  $insta = $site->find('about')->instagram();
  $template = $page->template()->name()

  ?>

<footer>
  <ul>
    <li>
      <a href="<?= $contact->url()?>">
        <?= ( $template == 'painting' || $template =='paintings') ? 'Contact the artist about pricing and availability' : 'Contact' ?>
      </a>
    </li>
    <li>
      <a href="<?= $insta ?>" target="_blank">Instagram</a>
    </li>
  </ul>
</footer>
<?= js(['assets/js/global.js', '@auto'])?> 
</body>

</html>