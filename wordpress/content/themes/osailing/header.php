<?php get_template_part('template-parts/header-start'); ?>
<body class="single">
  <header class="header">
    <div class="logo">
      <img src="<?php echo get_theme_file_uri('assets/images/logo.svg'); ?>" class="logo__image" alt="" />
      <a href="<?php echo bloginfo('url'); ?>" class="logo__text"><?php bloginfo('name'); ?></span>
    </div>
    <nav class="menu">
      <ul class="menu__list">
        <li class="menu__list__item"><a class="menu__list__item__link" href="javascript:void(0)">Escales</a></li>
        <li class="menu__list__item"><a class="menu__list__item__link" href="javascript:void(0)">Semaines en mer</a></li>
        <li class="menu__list__item"><a class="menu__list__item__link" href="javascript:void(0)">Rencontres</a></li>
      </ul>
    </nav>
  </header>