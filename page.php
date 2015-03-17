<?php get_header(); ?>
<div class="container">

    <div class="body-content">
        <div class="row">
            <div class="col-xs-12">
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
        </div>
    </div>
</div>

<?php get_footer();?>