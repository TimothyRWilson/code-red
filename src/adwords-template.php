<?php /* Template Name: Adwords Template */ get_header( 'adwords' ); ?>

<main role="main" aria-label="Content" class="pt-0">
	<!-- section -->
	<section class="home-hero">
		<div class="container-fluid h-100">
			<div class="row h-100 justify-content-center align-items-center">
				<div class="col-md-5 img-container">
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
					<img src="<?php echo get_template_directory_uri(); ?>/img/test/img-5.jpg" alt="<?php echo getallheaders(); ?>" class="img-fluid content-img">
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
							<div class="col-md-6 mb-3">
								<label for="validationTooltip01">First name</label>
								<input type="text" class="form-control" id="validationTooltip01" placeholder="First name" value="Tim" required>
								<div class="valid-tooltip">
									Looks good!
								</div>
							</div>
							<div class="col-md-6 mb-3">
								<label for="validationTooltip02">Last name</label>
								<input type="text" class="form-control" id="validationTooltip02" placeholder="Last name" value="Wilson" required>
								<div class="valid-tooltip">
									Looks good!
								</div>
							</div>
						</div>
						<div class="form-row">
							<div class="col-md-12 mb-3">
								<label for="validationTooltip01">Business email address</label>
								<input type="text" class="form-control" id="validationTooltip01" placeholder="Business Email Address" required>
								<div class="valid-tooltip">
									Looks good!
								</div>
							</div>
							<div class="col-md-12 mb-3">
								<label for="validationTooltip02">Work phone number</label>
								<input type="text" class="form-control" id="validationTooltip02" placeholder="Work phone number" value="" required>
								<div class="valid-tooltip">
									Looks good!
								</div>
							</div>
						</div>
						<div class="form-row">
							<div class="col-md-12 mb-3">
								<label for="validationTooltip01">Company Name</label>
								<input type="text" class="form-control" id="validationTooltip01" placeholder="Company Name" required>
								<div class="valid-tooltip">
									Looks good!
								</div>
							</div>
							<div class="col-md-12 mb-3">
								<label for="validationTooltip01">Job Title</label>
								<input type="text" class="form-control" id="validationTooltip01" placeholder="Job Title" required>
								<div class="valid-tooltip">
									Looks good!
								</div>

							</div>
						</div>

						<div class="form-row">
							<div class="col-md-6 mb-3">
								<label for="validationTooltip01">Industry</label>
								<select type="text" class="form-control" id="validationTooltip01" placeholder="Company Name" required></select>
								<div class="valid-tooltip">
									Looks good!
								</div>
							</div>
							<div class="col-md-6 mb-3">
								<label for="validationTooltip01">Country</label>
								<select type="text" class="form-control" id="validationTooltip01" placeholder="" required></select>
								<div class="valid-tooltip">
									Looks good!
								</div>
							</div>
						</div>
						<div class="form-row">
							<div class="col-md-1 mb-3">
								<input type="checkbox">
							</div>
							<div class="col-md-11">
								<p style="font-size: 14px;">
									Tick this box if you wish to receive further information on how blockchain technology can help to transform your business. 
								</p>
								<p>
									<span class="small">
									<em>
										We're committed to your privacy. KompiTech uses the information you provide to us to contact you about our relevant content, products, and services. You may unsubscribe from these communications at any time. For more information check out our <a href="/privacy-policy">Privacy Policy</a> 
									</em>
								</span>
							</p>
							</div>
						</div>
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
