<?php

get_header();

?>

<main class="post-list">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post();

get_template_part('template-parts/post-excerpt');

endwhile; endif; ?>

</main>

<?php get_footer(); ?>