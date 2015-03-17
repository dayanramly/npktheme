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
			<div class="col-xs-12">
				<h3 style="color:#848484">Postingan terkait <?php single_cat_title( '', true ); ?></h3>
				<hr>
				<?php 
				// $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
				// $args = array(
				// 	'posts_per_page' => 2,
				// 	'paged' => $paged
				// 	);

				// query_posts($args); 

				if ( have_posts() ) :
					while ( have_posts() ) : the_post();
				$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );?>
				<div class="media">
					<div class="media-left">
						<a href="<?php the_permalink(); ?>">
							<img src="<?php echo($image[0]); ?>" alt="<?php the_permalink(); ?>" class="media-object" width="160px" height="160px">
						</a>
					</div>
					<div class="media-body">
						<a href="<?php the_permalink(); ?>" style="text-decoration:none;color:#555555;">
							<?php the_title( '<h4 class="media-heading">', '</h4>' );?>
						</a><br />
						<?php the_excerpt(); ?>

						<div class="row">
							<div class="col-xs-12 pull-left">
								<a class="btn btn-default btn-go" href="<?php the_permalink() ?>" role="button">Lanjut Baca</a>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
					<hr>
				</div>

			<?php endwhile; ?>
<!-- 			<div class="nav-previous pull-right"><?php next_posts_link( 'Older posts' ); ?></div>
			<div class="nav-next pull-right"><?php previous_posts_link( 'Newer posts' ); ?></div> -->
			
		<?php else : ?>
		<div class="col-xs-12">
			<div class="home-blog-post">
				<h4>Maaf, belum ada postingan</h4>
			</div>
		</div>
	<?php endif; ?>
</div>

</div>
</div>
</div>

<?php get_footer();?>