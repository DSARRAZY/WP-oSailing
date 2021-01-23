<?php

get_header('front-page'); // header-front-page.php

// boucle classique = boucle qui récupère du contenu selon le contexte courant
// contexte courant sur ce template => page "Accueil"
if (have_posts()) : while (have_posts()) : the_post();

        // "require" un morceau de template
        get_template_part('template-parts/home-banner');

    endwhile;
endif;

// fonction / template tag créée dans inc/template-tags.php
// => c'est un template tag "maison"
the_homepage_categories();

?>

<a class="button" href="<?php echo get_post_type_archive_link('post'); ?>">Voir tous les articles</a>

</main>

<?php

get_template_part('template_parts/categories-list');

get_footer(); // footer.php

?>