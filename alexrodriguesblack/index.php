<?php get_header();
 ?>

  <section class="6" id="main">

	<article id="blog" class="left-col">

	<?php query_posts('showposts=1'); if (have_posts()) : while (have_posts()) : the_post(); ?>

	<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
	<div class="meta">
<?php edit_post_link(__('Edit This')); ?>
	<p> at <?php the_time(); ?>  <?php the_author_posts_link(); ?></p>
	<?php the_content(); ?>
	<p><?php the_tags(); ?></p>
</div>
<?php endwhile;?>

	<p><?php next_posts_link(); ?></p>
	<p><?php previous_posts_link(); ?></p>

<?php else : ?>

	<h1>Not Found</h1>
	<p>Silly monkey.</p>

<?php endif; wp_reset_query(); ?>

</article>

<?php get_sidebar(); ?>
</section>
 <?php get_footer(); ?>