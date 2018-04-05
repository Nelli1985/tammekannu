<?php /* Template Name: Avaleht */ ?>

<?php get_header(); ?>

	<div id="blog-welcome">
		<img src="<?php echo get_template_directory_uri(); ?>/home.png" class="media-object" style="width:100%" alt="Home">
			<div class="blog-header">
				<h1 class="blog-tagline"><?php bloginfo('description'); ?></h1>
			</div>
	</div>
	
	<div class="blog-description">
		<?php while ( have_posts() ) : the_post(); ?>  
			<?php the_content(); ?>
		<?php endwhile; ?>
    </div>

<?php get_footer(); ?>