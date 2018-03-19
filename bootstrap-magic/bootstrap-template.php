<?php
/*
Template Name: Bootstrapped Template
*/
?>

<?php get_header(); ?>
<style>
	.large {
		height: 500px;
		background-repeat: no-repeat;
		background-size: cover;
	}
</style>

<div class="mid-content">

	<?php
	$thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large');
	list($url, $width, $height, $is_intermediate) = $thumbnail;
	?>

	<!-- Your Featured Image is Here -->
	<div class="large" style="background-image:url(<?php echo $url; ?>)">

		 
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				
						<div class="title" style="padding: 1em; text-align: center;">
							<h1><?php the_title();?></h1>
						</div>


						<div style="text-align: center" >
							<img src="http://i.imgur.com/lgCrssn.png" alt="" width="175">
						</div>
					
							<hr style="width: 10%; border-top: 4px solid rgba(0,0,0,.9); margin-bottom: 2rem">

			      
						<!-- Content can be added/swapped in admin area -->
			       			<!--  <?php the_content(); ?> -->



			        
			        </div>  <!-- post Id -->

			    <?php endwhile; endif; ?>
	 
	</div>

</div>


<?php get_footer(); ?>