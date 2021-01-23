<article class="post post--excerpt">
    <img class="post__image" src="<?php the_post_thumbnail_url(); ?>" />
    <h3 class="post__title"><?php the_title(); ?></h3>
    <p class="post__excerpt"><?php echo get_the_excerpt(); ?></p>
    <a href="<?php the_permalink(); ?>" class="post__link">Lire la suite</a>
</article>