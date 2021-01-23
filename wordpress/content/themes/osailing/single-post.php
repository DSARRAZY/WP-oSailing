<?php
get_header(); // header.php
?>
<main>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article class="post">
        <header class="post__header">
            <img class="post__header__image" src="<?php the_post_thumbnail_url(); ?>" />
            <h1 class="post__header__title"><?php the_title(); ?></h1>
        </header>
        <main class="post__content">
            <?php the_content(); ?>
        </main>
        <footer class="post__footer">
            Dans
            <?php the_category(); ?>
            le <time class="post__footer__date" datetime="<?php the_date('Ymd'); ?>"><?php echo get_the_date(); ?></time>
        </footer>
    </article>
<?php endwhile; endif; ?>
</main>
<section class="pagination">
    <a class="pagination--previous-link button" href="javascript:void(0)">Article précédent</a>
    <a class="pagination--next-link button" href="javascript:void(0)">Article suivant</a>
</section>
<?php get_footer(); ?>