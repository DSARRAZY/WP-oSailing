<?php
get_header('front-page'); // header-front-page.php
?>

  <section class="banner" id="banner">
    <h2 class="banner__title"><?php bloginfo('description'); ?></h2>
    <img src="<?php echo get_theme_file_uri('assets/images/banner.jpg'); ?>" class="banner__image" />
  </section>
  <main class="post-list post-list--home" id="post-list">
    <article class="post post--excerpt">
      <img class="post__image" src="https://picsum.photos/300/200?random=1" />
      <h3 class="post__title">Une rencontre inattendue</h3>
      <p class="post__excerpt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis et, architecto ea quam hic tempora?</p>
      <a href="javascript:void(0)" class="post__link">Lire la suite</a>
    </article>
    <article class="post post--excerpt">
      <img class="post__image" src="https://picsum.photos/300/200?random=2" />
      <h3 class="post__title">Escapade gourmande</h3>
      <p class="post__excerpt">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt exercitationem dicta quas! Ducimus veniam obcaecati vitae provident.</p>
      <a href="javascript:void(0)" class="post__link">Lire la suite</a>
    </article>
    <article class="post post--excerpt">
      <img class="post__image" src="https://picsum.photos/300/200?random=3" />
      <h3 class="post__title">Le paradis?</h3>
      <p class="post__excerpt">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Explicabo, error.</p>
      <a href="javascript:void(0)" class="post__link">Lire la suite</a>
    </article>
    <a class="button" href="javascript:void(0)">Voir les articles plus anciens</a>
  </main>
  <section class="category-list" id="values">
    <div class="category">
      <h4 class="category__name"><a class="category__name__link" href="javascript:void(0)">Escales</a></h4>
      <span class="category__post-count">19</span>
    </div>
    <div class="category">
      <h4 class="category__name"><a class="category__name__link" href="javascript:void(0)">Semaines en mer</a></h4>
      <span class="category__post-count">123</span>
    </div>
    <div class="category">
      <h4 class="category__name"><a class="category__name__link" href="javascript:void(0)">Rencontres</a></h4>
      <span class="category__post-count">214</span>
    </div>
  </section>

<?php get_footer(); ?>