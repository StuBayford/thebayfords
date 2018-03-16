<?php
/**
 * Template Name: Home Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */


get_header();

$container   = get_theme_mod( 'understrap_container_type' );
$banner_image = get_theme_mod( 'banner_image' );
$organisation_logo_1 = get_theme_mod( 'organisation_logo_1' );
$organisation_link_1 = get_theme_mod( 'organisation_link_1' );
$organisation_logo_2 = get_theme_mod( 'organisation_logo_2' );
$organisation_link_2 = get_theme_mod( 'organisation_link_2' );
$organisation_logo_3 = get_theme_mod( 'organisation_logo_3' );
$organisation_link_3 = get_theme_mod( 'organisation_link_3' );
?>

<!-- BANNER -->
<?php if($banner_image): ?>
	<div class="jumbotron jumbotron-fluid" style="background-image: url('<?=$banner_image; ?>')">
  	<div class="jumbotron-inner">
  		<div class="container">
	  		<div class="jumbotron-content">
			    <h1 class="display-4 text-shadow">Help Street Kids in Brazil</h1>
			    <p class="lead text-shadow">Support our work with children living in extreme poverty on the streets of Recife</p>
			    <a class="btn btn-primary icon donate" href="https://churchmissionsociety.org/give-regularly?donation_code=A.BASR&donation_desc=Rosie%20and%20Stu%20Bayford" target="_blank" role="button">Please Donate</a>
			  </div>
		  </div>
	  </div>
	</div>
<?php endif; ?>
<!-- BANNER END -->

<!-- INTRO -->
<div class="bg-light">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col col-md-8 py-5 text-center">
				<h1>Our Mission</h1>
				<p>We have a heart for helping street children in South America, particularly in Brazil. We feel a deep call to Recife, Brazil, having visited there in 2015 when we were struck by the desperate situation that so many children find themselves in living on the streets.</p>
			</div>
		</div>
	</div>
</div>
<!-- INTRO END -->

<!-- CTA -->
<div class="bg-dark">
	<div class="container py-3">
		<div class="row justify-content-center">
			<div class="p-3 col col-md-7">
				<h2 class="text-light text-center">Receive Our Updates</h2>
				<!-- CUSTOM FORM -->
				<form id="form-subscribe" action="https://thebayfords.us17.list-manage.com/subscribe/post?u=df905cb0077cb725cce603f04&amp;id=d6770b97c6" method="post" name="form-subscribe" role="form">
					<div id="form-subscribe-status" class="input-group">
					  <input id="email" class="form-control" type="email" name="email" placeholder="Email address" aria-label="Email Address" aria-describedby="basic-addon2" required>
					  <input id="status" type="text" value="subscribed" name="status" aria-hidden="true" hidden>
					  <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
				  	<input id="spam" type="text" name="spam" tabindex="-1" value="" aria-hidden="true" hidden>
					  <div class="input-group-append">
					    <button id="submit" class="btn btn-quarternary subscribe" type="submit">Subscribe</button>
					  </div>
					</div>
				</form>
				<!-- CUSTOM FORM END -->
				<!-- Begin MailChimp Signup Form -->
<!-- 				<div id="mc_embed_signup">
					<form action="https://thebayfords.us17.list-manage.com/subscribe/post?u=df905cb0077cb725cce603f04&amp;id=d6770b97c6" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
				    <div id="mc_embed_signup_scroll" class="input-group">
							<input type="email" value="" name="EMAIL" class="form-control" id="mce-EMAIL" placeholder="email address" required>
					     real people should not fill this in and expect good things - do not remove this or risk form bot signups
					    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_df905cb0077cb725cce603f04_d6770b97c6" tabindex="-1" value=""></div>
					    <div class="input-group-append">
					    	<input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="btn btn-quarternary subscribe">
					    </div>
					    </div>
					</form>
				</div> -->
				<!--End mc_embed_signup-->
			</div>
		</div>
	</div>
</div>
<!-- CTA END -->

<!-- FORM SUBSCRIBE MESSAGE -->
<div id="form-subscribe-message" class="message mx-3 container alert alert-dismissable fade">
	<span id="form-subscribe-message-text"></span>
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	  <span aria-hidden="true">&times;</span>
	</button>
</div>
<!-- FORM SUBSCRIBE MESSAGE END -->


<!-- CAUSES -->
<div class="causes bg-primary">
	<div class="container">
		<div class="row justify-content-center">
			<div class="causes-left col-md-7">
				
			</div>
			<div class="causes-right col-md-5">
			</div>
		</div>
	</div>
</div>
<!-- CAUSES END -->


<!-- LATEST POSTS -->
<?php $args = array(
	'numberposts' 	   => 2,
	'orderby'          => 'date',
	'order'            => 'DESC',
	'post_type'        => 'post',
	'post_status'      => 'publish',
	'suppress_filters' => true
);

$posts = get_posts($args);

if($posts): ?>

	<div class="bg-secondary">
		<div class="container">
			<div class="card-deck row py-5">

				<div class="col-md-4 mt-5">
			    <h2 class="text-light icon">Our latest news</h2>
		  	</div>
				
				<?php foreach ($posts as $post):
					setup_postdata( $post );

					$post_id = get_the_ID();
					$post_slug = $post->post_name;
					$post_url = get_permalink($post_id);
					$post_title = get_the_title($post_id);
					$post_excerpt = get_the_excerpt($post_id);
					$post_image_url = get_the_post_thumbnail_url($post_id, 'medium');
					$post_date = get_the_date('jS F y', $post_id); ?>

					<div class="col-md-4 py-3">
		      	<div class="card">
		      		<?php if ($post_image_url): ?>
			      		<div class="card-img-top" style="background-image: url('<?=$post_image_url; ?>')">
			      		</div>
		      		<?php endif; ?>
					    <div class="card-body">
					      <h5 class="card-title"><?=$post_title; ?></h5>
					      <p class="card-text"><?=$post_excerpt; ?></p>
					    </div>
					    <div class="card-footer">
					      <small class="text-muted"><?=$post_date; ?></small>
					    </div>
					  </div>
					</div>

				<?php endforeach; ?>
				<?php wp_reset_postdata(); ?>
				
			</div>
		</div>
	</div>
<?php endif; ?>

<?php wp_reset_query(); ?>
<!-- LATEST POSTS END -->


<!-- ORGANISATIONS -->
<div class="organisations bg-white">
	<div class="container">
		<div class="row justify-content-center">
			<h2>Associated Charities</h2>
			<div class="logo-container col-sm-3">
				<a href="<?=$organisation_link_1; ?>">
					<img class="logo" src="<?=$organisation_logo_1; ?>">
				</a>
			</div>
			<div class="logo-container col-sm-3">
				<a href="<?=$organisation_link_2; ?>">
					<img class="logo" src="<?=$organisation_logo_2; ?>">
				</a>
			</div>
			<div class="logo-container col-sm-3">
				<a href="<?=$organisation_link_3; ?>">
					<img class="logo" src="<?=$organisation_logo_3; ?>">
				</a>
			</div>
		</div>
	</div>
</div>
<!-- ORGANISATIONS END -->

<?php get_footer(); ?>