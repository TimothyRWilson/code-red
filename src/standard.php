<?php /* Template Name: Standard */ get_header(); ?>

<main role="main" aria-label="Content" class="sub-page">
	<!-- section -->
	<section>
<div class="container-fluid hero">
  <div class="welcome row justify-content-center h-100">
  <h1><?php the_title(); ?></h1>
</div>
<!-- //row -->
</div>
<!-- //container -->
		


			<!-- article -->
			<div class="container page-content">
				<div class="row">
					<div class="col-md-10">
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<?php the_content(); ?>
						</article>
					</div>
					<!-- //col -->
				</div>
				<!-- //row -->
			</div>


		<?php endwhile; ?>

		<?php else : ?>

			<!-- article -->
			<article>

				<h2><?php esc_html_e( 'Sorry, nothing to display.', 'kompitech' ); ?></h2>

				<!-- /article -->

			<?php endif; ?>

		</section>
		<!-- /section -->
	</main>

	<?php get_footer(); ?>
