<?php
/**
* The main template file
*
* This is the most generic template file in a WordPress theme and one
* of the two required files for a theme (the other being style.css).
* It is used to display a page when nothing more specific matches a query,
* e.g., it puts together the home page when no home.php file exists.
*/

get_header(); ?>

<div class="container">

	<div class="body-content">

		<div class="row">

			<div class="col-xs-12">
				<div id="home-slider">
					
          <?php dynamic_sidebar('sidebar-1'); ?>

				</div> <!-- end of home-slider -->
			</div> <!-- end of col-xs-12 -->

      <div class="col-xs-12"> <!-- Sambutan -->
        <div class="box">
          <div class="head-box">
            <h1>Pupuk <span class="green">Ghaly Organik</span></h1>
            <hr class="head-box-line">
          </div>

          <div class="box-body"> <!-- box-body -->
            <div class="row">

            <?php dynamic_sidebar('sidebar-5');?>

            </div>
          </div> <!-- end of box-body -->

        </div>              
      </div> <!-- end of sambutan  -->

      <div class="col-xs-12"> <!-- widget green -->
        <div class="box green-bg-2">
          <div class="box-body">
            <?php dynamic_sidebar('sidebar-2'); ?>

          </div>
        </div>
      </div><!-- end of widget green -->

      <div class="col-xs-12"> <!-- berita terbaru -->
        <div class="box">
          <div class="head-box">
            <h1>Berita <span class="green">Terbaru</span></h1>
            <hr class="head-box-line">
          </div>

          <div class="box-body">
            <div class="row">
              <?php
              query_posts( 'posts_per_page=6' );
              ?>
              <?php if ( have_posts() ) : ?>
              <?php while ( have_posts() ) : the_post(); ?>
              <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>

              <div class="col-xs-6">
                <div class="home-blog-post">
                  <div class="home-post-thumb">
                    <img class="img-responsive" src="<?php echo $image[0]; ?>">
                  </div>
                  <div class="home-post-title">
                    <h3><?php the_title(); ?> </h3>
                  </div>
                  <a class="btn btn-default btn-go" href="<?php the_permalink() ?>" role="button">Lanjut Baca</a>
                  <div class="clearfix"></div>
                </div>
              </div>

            <?php endwhile;?>
          <?php else : ?>
          <div class="col-xs-12">
            <div class="home-blog-post">
              <h4>Belum ada postingan</h4>
            </div>
          </div>
        <?php endif; ?>

      </div>
    </div>
  </div> 
  <div class="clearfix"></div>             
</div> <!-- end of berita terbaru -->

</div> <!-- end of row -->

</div> <!-- end of body-content -->

</div> <!-- end of container -->


<?php get_footer();?>