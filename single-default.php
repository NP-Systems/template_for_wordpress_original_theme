<?php get_header(); ?>

<?php if(have_posts()): the_post(); ?>
  <article <?php post_class( 'article-content' ); ?>>
    <h1><?php the_title(); ?></h1>
    <?php the_content(); ?>
  </article>
<?php endif; ?>
this is single-default.php
</main>

<?php get_footer(); ?>
