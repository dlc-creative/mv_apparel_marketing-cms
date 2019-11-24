<?php
/**
* Template Name: Lookbook
**/

get_header(); ?>
<?php
$url = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$slug = explode('/', $url);
$feed = $slug[4];
if (isset($feed) && $feed !== "") :
?>
  <div id="lookbook" class="lookbook-<?php echo $feed; ?>">
    <div class="lookbook-item">
      <img src="/wp-content/themes/mv/images/lookbook/<?php echo $feed; ?>/lookbook.jpg" />
    </div>
    <div class="lookbook-item">
      <img src="/wp-content/themes/mv/images/lookbook/<?php echo $feed; ?>/lookbook2.jpg" />
    </div>
    <div class="lookbook-item">
      <img src="/wp-content/themes/mv/images/lookbook/<?php echo $feed; ?>/lookbook3.jpg" />
    </div>
    <div class="lookbook-item">
      <img src="/wp-content/themes/mv/images/lookbook/<?php echo $feed; ?>/lookbook4.jpg" />
    </div>
    <div class="lookbook-item">
      <img src="/wp-content/themes/mv/images/lookbook/<?php echo $feed; ?>/lookbook5.jpg" />
    </div>
    <div class="lookbook-item">
      <img src="/wp-content/themes/mv/images/lookbook/<?php echo $feed; ?>/lookbook6.jpg" />
    </div>
    <div class="lookbook-item">
      <img src="/wp-content/themes/mv/images/lookbook/<?php echo $feed; ?>/lookbook7.jpg" />
    </div>
    <div class="lookbook-item">
      <img src="/wp-content/themes/mv/images/lookbook/<?php echo $feed; ?>/lookbook8.jpg" />
    </div>
    <div class="lookbook-item">
      <img src="/wp-content/themes/mv/images/lookbook/<?php echo $feed; ?>/lookbook9.jpg" />
    </div>
    <div class="lookbook-item">
      <img src="/wp-content/themes/mv/images/lookbook/<?php echo $feed; ?>/lookbook10.jpg" />
    </div>
    <div class="lookbook-item">
      <img src="/wp-content/themes/mv/images/lookbook/<?php echo $feed; ?>/lookbook11.jpg" />
    </div>
    <div class="lookbook-item">
      <img src="/wp-content/themes/mv/images/lookbook/<?php echo $feed; ?>/lookbook12.jpg" />
    </div>
  </div>
<?php else : ?>
  <div id="genders">
    <a href="women"><div id="female" class="gender" style="background-image: url('/wp-content/themes/mv/images/columbus.jpg');">WOMEN</div></a>
    <a href="men"><div id="male" class="gender" style="background-image: url('/wp-content/themes/mv/images/summer.jpg');">MEN</div></a>
  </div>
<?php endif; ?>
<?php get_footer(); ?>
