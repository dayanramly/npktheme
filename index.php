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
            <h1><?php echo get_option_tree('white_text_title'); ?></h1>
            <!-- <h1>Pupuk <span class="green">Ghaly Organik</span></h1> -->
            <hr class="head-box-line">
          </div>

          <div class="box-body"> <!-- box-body -->
            <div class="row"> 

              <div class="col-xs-7">
                <div class="sambutan">
                  <?php echo get_option_tree('white_text_left'); ?>
                </div>
              </div>

              <div class="col-xs-5">
                <div class="about green-bg-2">
                  <?php echo get_option_tree('white_text_right'); ?>
                </div>
              </div> 

            </div>
          </div> <!-- end of box-body -->

        </div>              
      </div> <!-- end of sambutan  -->



      <div class="col-xs-12"> <!-- widget green -->
        <div class="box green-bg-2">
          <div class="box-body">
            
              <?php 

                $list_item=ot_get_option('green_box', array());

                if(!empty($list_item)){
                  echo'<div class="row">';
                    foreach ($list_item as $green_image) {

                        echo'<div class="col-xs-4">
                        <a class="popup-video" href="'.$green_image['green_box_link'].'">
                          <div class="home-vid-thumb">
                            <img class="img-responsive" src="'.$green_image['green_box_image'].'" alt="'.$green_image['title'].'">
                          </div>
                          <div class="home-vid-title">
                            <h3>'.$green_image['green_box_desc'].'</h3>
                          </div>
                        </a>
                      </div>';

                    }
                  echo'</div>';
                }

              ?>

          </div>
        </div>
      </div><!-- end of widget green -->

      <div class="col-xs-12"> <!-- berita terbaru -->
        <div class="box">
          <div class="head-box">
            <h1><?php echo get_option_tree('new_post_title'); ?></h1>
            <!-- <h1>Berita <span class="green">Terbaru</span></h1> -->
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