<?php get_header(); ?>

	<main role="main" aria-label="Content" style="padding: 120px; height: 100vh;">
		<!-- section -->
		<section style="height: 100vh;">

			<!-- article -->
			<article id="post-404">

				<h1><?php esc_html_e( 'Page not found', 'kompitech' ); ?></h1>
				<h2>
					<a href="<?php echo esc_url( home_url() ); ?>"><?php esc_html_e( 'Return home?', 'kompitech' ); ?></a>
				</h2>

			</article>
			<!-- /article -->

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
