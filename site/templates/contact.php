<?php snippet('nav') ?>
<section class="content">

  
<?php if($page->title()->lower() == "thanks"): 
  $contact = $page->siblings()->listed()->first();
  ?> 
  
  <a href="<?= url('about/contact')?>" class="purple-link back">Back to Contact </a>
  <div class="alert success">
    <h2><?= $contact->success() ?></h2>
    </br>
  </div>  

<?php else: ?>  
  <h1><?= $page->title()->html() ?></h1>

  <?php if( $details=$page->details()->kirbytext() ) :?>
  <div class="details"><?= $details ?></div>
  <?php endif ?>
  <form action="https://api.web3forms.com/submit" method="POST" id="contact">

  <!-- Replace with your Access Key -->
  <input type="hidden" name="access_key" value="<?= $page->secret() ?>">

  <!-- Form Inputs -->
  <div class="field">
    <label for="name">Name <abbr title="required">*</abbr></label>
    <input type="text" name="name"  id="name" required>
  </div>

  <input type="hidden" name="subject" id="subject" value="<?= $page->subject()?>">
  <!-- <div class="field">
    <label for="email">Subject <abbr title="required">*</abbr></label>
    <input type="hidden" name="from_name" value="<?= $page->subject()?>">
  </div> -->

  <div class="field">
    <label for="email">Email <abbr title="required">*</abbr></label>
    <input type="email" name="email" id="email" required>
  </div>
  <div class="field">
    <label for="text">
        Message <abbr title="required">*</abbr>
    </label>
    <textarea name="message" required></textarea>
  </div>

  <!-- Honeypot Spam Protection -->
  <input type="checkbox" name="botcheck" class="hidden" style="display: none;">

  <!-- Custom Confirmation / Success Page -->
  <input type="hidden" name="redirect" value="<?= url('about/thanks')?>/">

  <button id="send" type="submit" class="button">Send Message</button>

  </form>
<?php endif ?>
  </div>
</section>
<?php snippet('footer') ?>