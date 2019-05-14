<?php /* Template Name: Adwords Template */ get_header( 'adwords' ); ?>

<main role="main" aria-label="Content" class="pt-0">
	<!-- section -->
	<section class="home-hero">
		<div class="container-fluid h-100">
			<div class="row h-100 justify-content-center align-items-center">
				<div class="col-md-5">
					<img src="<?php echo get_template_directory_uri(); ?>/img/test/none.png" alt="" class="img-fluid">
				</div>
				<!-- /col-md-6 -->
				<div class="col-md-5 text-white">
					<h2>
						Build Innovative Blockchain Applications and 
						watch your Business grow
					</h2>
					<p>
						Find out how KompiTech MANBLOCK can help you improve
						transparency and grow revenue. 
						<span class="font-weight-bold">
							Talk to our experts today.
						</span>
					</p>
					<a href="#" class="cta btn btn-orange">
						Inquire Now
					</a>
				</div>
			</div>
			<!-- //.row -->
		</div>
		<!-- //.container-fluid -->
		<div class="bg-blob">

		</div>
	</section>


	<section class="content-section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-5 offset-md-1">
					<h3>
						How Blockchain Technology Can Help My Business
					</h3>
					<p>
						Blockchain is an emerging, future-proof technology designe to help 
						businesses address a variety of industry-specific needs including
						transparency issues, mitigation of fraud, and maximization of customer
						satisfaction. 
					</p>

					<h3>
						How KompiTech <span class="text-uppercase">manblock</span> Works
					</h3>
					<p>
						KompiTech <span class="text-uppercase">manblock</span> is a fully managed, Blockchain-as-a-Service (Baas) platform operating on a fully scalable and
						reliable Hyperledger Fabric.
					</p>
				</div>
				<!-- //.col -->
				<div class="col-md-4 offset-1">
					<form class="needs-validation signup-form" novalidate>
						<div class="form-row">
							<div class="col-12">
								<h3 class="text-center">
									Sign Up for a No-Obligation Blockchain Demo
								</h3>
							</div>
							<div class="col-md-4 mb-3">
								<label for="validationTooltip01">First name</label>
								<input type="text" class="form-control" id="validationTooltip01" placeholder="First name" value="Mark" required>
								<div class="valid-tooltip">
									Looks good!
								</div>
							</div>
							<div class="col-md-4 mb-3">
								<label for="validationTooltip02">Last name</label>
								<input type="text" class="form-control" id="validationTooltip02" placeholder="Last name" value="Otto" required>
								<div class="valid-tooltip">
									Looks good!
								</div>
							</div>
							<div class="col-md-4 mb-3">
								<label for="validationTooltipUsername">Username</label>
								<div class="input-group">
									<div class="input-group-prepend">
										<span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
									</div>
									<input type="text" class="form-control" id="validationTooltipUsername" placeholder="Username" aria-describedby="validationTooltipUsernamePrepend" required>
									<div class="invalid-tooltip">
										Please choose a unique and valid username.
									</div>
								</div>
							</div>
						</div>
						<div class="form-row">
							<div class="col-md-6 mb-3">
								<label for="validationTooltip03">City</label>
								<input type="text" class="form-control" id="validationTooltip03" placeholder="City" required>
								<div class="invalid-tooltip">
									Please provide a valid city.
								</div>
							</div>
							<div class="col-md-3 mb-3">
								<label for="validationTooltip04">State</label>
								<input type="text" class="form-control" id="validationTooltip04" placeholder="State" required>
								<div class="invalid-tooltip">
									Please provide a valid state.
								</div>
							</div>
							<div class="col-md-3 mb-3">
								<label for="validationTooltip05">Zip</label>
								<input type="text" class="form-control" id="validationTooltip05" placeholder="Zip" required>
								<div class="invalid-tooltip">
									Please provide a valid zip.
								</div>
							</div>
						</div>
						<button class="btn btn-primary" type="submit">Submit form</button>
					</form>
				</div>
			</div>
			<!-- //.row -->
		</div>
		<!-- //.container -->
		

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>

				<br class="clear">

				<?php edit_post_link(); ?>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else : ?>

			<!-- article -->
			<article>

				<h2><?php esc_html_e( 'Sorry, nothing to display.', 'kompitech' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

	</section>
	<!-- /section -->
</main>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>
