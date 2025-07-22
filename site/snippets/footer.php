<?php 
  $contact = $site->find('about/contact');
  $insta = $site->find('about')->instagram()
  ?>

<footer>
  <ul>
    <li>
      <a href="<?= $contact->url()?>">Contact</a>
    </li>
    <li>
      <a href="<?= $insta ?>" target="_blank">Instagram</a>
    </li>
  </ul>
</footer>
<?= js(['assets/js/global.js', '@auto'])?> 
</body>

</html>