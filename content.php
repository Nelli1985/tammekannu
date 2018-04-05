<!--<img src="<php echo get_template_directory_uri(); ?>/home.png" class="media-object" style="width:100%" alt="Home">-->
	<?php while ( have_posts() ) : the_post(); ?>      
	<div class="blog-description">
        <p>
			<?php the_content(); ?>
		</p>
      </div>
	<?php endwhile; ?>