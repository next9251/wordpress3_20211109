<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>WordPress 課題</title>
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Amatic+SC&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&family=Noto+Serif+JP:wght@500&family=Shippori+Mincho&display=swap" rel="stylesheet">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header class="header">
    <a href="<?php echo esc_url(home_url('/')); ?>" class="header__logo">
      <?php bloginfo('name'); ?>
      <nav class=" header-nav">
        <ul class="header-nav__ul">
          <li class="header-nav__list"><a href="/about-page.html">About</a></li>
          <li class="header-nav__list"><a href="/news.html">News</a></li>
          <li class="header-nav__list"><a href="/service.html">Service</a></li>
          <li class="header-nav__list"><a href="/recruit.html">Recruit</a></li>
          <li class="header-nav__list"><a href="/contact.html">Contact</a></li>
        </ul>
      </nav>
      <div class="menu" id="menu">
        <span class="menu__line--top"></span>
        <span class="menu__line--middle"></span>
        <span class="menu__line--bottom"></span>
      </div>
      <nav class="header__nav--sp">
        <ul class="header-nav__ul--sp">
          <li class="header-nav__list--sp"><a href="/about-page.html">About</a></li>
          <li class="header-nav__list--sp"><a href="/news.html">News</a></li>
          <li class="header-nav__list--sp"><a href="/service.html">Service</a></li>
          <li class="header-nav__list--sp"><a href="/recruit.html">Recruit</a></li>
          <li class="header-nav__list--sp"><a href="/contact.html">Contact</a></li>
          <li class="header-nav__list--sp header__logo"><a href="page-about.html">株式会社estra</a></li>
        </ul>
      </nav>
  </header>