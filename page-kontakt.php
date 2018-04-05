<?php get_header(); ?>

	<div id="primary" class="site-content">
    	<div id="content" role="main">

      		<?php while ( have_posts() ) : the_post(); ?>
 				<div class="contact-content">
					<div class="container">
						 <div class="row">
						<h1>Võta meiega ühendust</h1>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<div class="contact-form">
									<?php the_content(); ?>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="contact-data">
									<p class="contact-data-org">
									<?php echo get_field('kontakt_org'); ?>
									</p>
									<p>
										<?php echo get_field('kontakt_aadress'); ?>
									</p>
									<p>
										<?php echo get_field('kontakt_telefon'); ?>
									</p>
									<p>
										<?php echo get_field('kontakt_epost'); ?>
									</p>
									<p>
										Leia meid <a href="https://www.facebook.com/tammekannu/" style="color:#e75727">Facebook</a>'ist
									</p>
								</div>
							</div>
						</div>
						<div class="row">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2110.009912716184!2d27.046347516131252!3d58.07230631820354!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46eadfcefb9bd2e9%3A0x6b15fdeaf33fb583!2sTammek%C3%A4nnu+Holiday+House!5e0!3m2!1set!2see!4v1522168168879" width="800" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>
					</div>
				</div>
      		<?php endwhile; // end of the loop. ?>

    	</div><!-- #content -->
  </div><!-- #primary -->

<?php get_footer(); ?>