<?php get_header(); ?>
	<?php if ( have_posts() ) { ?>
		<ul>
			<?php while ( have_posts() ) { the_post(); ?>
				<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
			<?php } ?>
		</ul>
		<?php if ( function_exists('wp_pagenavi') ) wp_pagenavi(); ?>
	<?php } ?>
<?php get_footer(); ?>