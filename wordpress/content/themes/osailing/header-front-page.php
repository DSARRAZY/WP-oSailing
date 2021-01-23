<?php get_template_part('template-parts/header-start'); ?>
<body class="home">
  <header class="header header--vertical">
    <div class="logo logo--vertical">
      <img src="<?php echo get_theme_file_uri('assets/images/logo.svg'); ?>" class="logo__image" alt="" />
      <h1 class="logo__text"><?php bloginfo('name'); ?></h1>
    </div>
    <nav class="menu menu--vertical anchor-menu">
      <ul class="menu__list">
        <li class="menu__list__item"><a class="menu__list__item__link active anchor-menu-link" href="#banner">Intro</a></li>
        <li class="menu__list__item"><a class="menu__list__item__link anchor-menu-link" href="#post-list">Articles</a></li>
        <li class="menu__list__item"><a class="menu__list__item__link anchor-menu-link" href="#values">Valeurs</a></li>
      </ul>
    </nav>
  </header>