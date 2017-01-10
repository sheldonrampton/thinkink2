<?php
// $Id: page.tpl.php,v 1.1.2.2.4.2 2011/01/11 01:08:49 dvessel Exp $
?>
<div id="page" class="container-16 clearfix">
  <?php if ($is_front) : ?>
    <div id="social-icons">
      <a href="http://www.linkedin.com/company/2250307"><?php print theme('image', array(
        'path' => 'images/linkedin.png',
        'alt' => 'LinkedIn',
        'title' => 'LinkedIn',
      )); ?></a>
      <a href="http://www.facebook.com/pages/THINK-INK-DESIGN/342036964781"><?php print theme('image', array(
        'path' => 'images/facebook.png',
        'alt' => 'Facebook',
        'title' => 'Facebook',
      )); ?></a>
      <a href="http://twitter.com/#!/THINKINKDESIGN"><?php print theme('image', array(
        'path' => 'images/twitter.png',
        'alt' => 'Twitter',
        'title' => 'Twitter',
      )); ?></a>
    </div>
  <?php endif; ?>
  <div id="site-header" class="clearfix">
    <div id="branding" class="grid-4 clearfix">
    <?php if ($linked_logo_img): ?>
      <span id="logo" class="grid-1 alpha"><?php print $linked_logo_img; ?></span>
    <?php endif; ?>
    <?php if ($linked_site_name): ?>
      <h1 id="site-name" class="grid-3 omega"><?php print $linked_site_name; ?></h1>
    <?php endif; ?>
    <?php if ($site_slogan): ?>
      <div id="site-slogan" class="grid-3 omega"><?php print $site_slogan; ?></div>
    <?php endif; ?>
    </div>

  <?php if ($main_menu_links || $secondary_menu_links): ?>
    <div id="site-menu" class="grid-12">
      <?php print $main_menu_links; ?>
      <?php print $secondary_menu_links; ?>
    </div>
  <?php endif; ?>

  <?php if ($page['search_box']): ?>
    <div id="search-box" class="grid-6 prefix-10"><?php print render($page['search_box']); ?></div>
  <?php endif; ?>
  </div>

  <div id="site-subheader" class="prefix-1 suffix-1 clearfix">
  <?php if ($page['highlighted']): ?>
    <div id="highlighted" class="<?php print ns('grid-14', $page['header'], 7); ?>">
      <?php print render($page['highlighted']); ?>
    </div>
  <?php endif; ?>

  <?php if ($page['header']): ?>
    <div id="header-region" class="region <?php print ns('grid-14', $page['highlighted'], 7); ?> clearfix">
      <?php print render($page['header']); ?>
    </div>
  <?php endif; ?>
  </div>


  <div id="main" class="column <?php print ns('grid-16', $page['sidebar_first'], 4, $page['sidebar_second'], 3) . ' ' . ns('push-4', !$page['sidebar_first'], 4); ?>">
    <?php if ($title && isset($node) && $node->type == 'image'): ?>
      <h1 class="title" id="page-title"><?php print $title; ?></h1>
    <?php endif; ?>
    <?php if ($tabs): ?>
      <div class="tabs"><?php print render($tabs); ?></div>
    <?php endif; ?>
    <?php print $messages; ?>
    <?php print render($page['help']); ?>

    <div id="main-content" class="region clearfix">
      <?php print render($page['content']); ?>
       <?php if ($page['footer']): ?>
      <div id="footer-region" class="region grid-14 clearfix">
                <?php print render($page['footer']); ?>
     </div>
    <?php endif; ?>

        <div id="footer" class="prefix-1 suffix-1">
        <?php print theme('image', array(
          'path' => 'sites/all/themes/ninesixty/images/contact_22.jpg',
          'alt' => '2819 Royal Avenue, Madison, WI 53719 . 608-251-7300 . Fax 608-251-2141 . www.thinkinkanddesign.com',
          'title' => '2819 Royal Avenue, Madison, WI 53719 . 608-251-7300 . Fax 608-251-2141 . www.thinkinkanddesign.com',
        )); ?><br />
        <p>©2017 Think Ink &amp; Design</p>


  </div>
    </div>

    <?php print $feed_icons; ?>
  </div>

<?php if ($page['sidebar_first']): ?>
  <div id="sidebar-left" class="column sidebar region grid-4 <?php print ns('pull-12', $page['sidebar_second'], 3); ?>">
    <?php print render($page['sidebar_first']); ?>
  </div>
<?php endif; ?>

<?php if ($page['sidebar_second']): ?>
  <div id="sidebar-right" class="column sidebar region grid-3">
    <?php print render($page['sidebar_second']); ?>
  </div>
<?php endif; ?>

</div>
