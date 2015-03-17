<?php 
/**
* The template for displaying all single posts and attachments
*
* @package WordPress
* @subpackage npktheme
* @since npktheme
*/

get_header(); ?>

<div class="container">

	<div class="body-content" style="padding-bottom:20px;">
		<div class="row">

			<div class="col-xs-8">
				<?php 
				while ( have_posts() ) : the_post();
				the_title( '<h2 class="page-title">', '</h2>' );

				$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );?>

				<img src="<?php echo($image[0]); ?>" alt="" class="img-responsive img-page">

				<?php
				the_content();

				endwhile; 
				?>
			</div>
			<div class="col-xs-4">
				<div style="padding: 10px;color: #555555;border: 1px solid #f1f1f1;">
					<?php dynamic_sidebar('sidebar-4');?>
				</div>
			</div>

		</div>
	</div>
</div>

<?php get_footer();?>