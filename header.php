<!DOCTYPE html>
<html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<link href='http://fonts.googleapis.com/css?family=Open+Sans:700,800,400,300' rel='stylesheet' type='text/css'>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header>
		<div class="top-head">
			<div class="container" style="text-align:right;">
                <?php echo get_option_tree('header_text') ?>
                <!--<?php echo get_theme_mod('header_details') ?>-->
				<!--<?php dynamic_sidebar('header-top'); ?>-->
			</div>
		</div>
		<div class="navigation">      
			<div class="container">
				<div class="logo">          
					<a href="<?php bloginfo('url')?>">
						<img class="media-object" src="<?php echo get_option_tree('change_logo') ?>" height="50px" alt="" >
					</a>
				</div>
				<ul id="nav">
					<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
<!-- 	             <li>
                <?php 
                    $args = array(
                        'show_option_all'    => '',
                        'orderby'            => 'name',
                        'order'              => 'ASC',
                        'style'              => 'list',
                        'show_count'         => 0,
                        'hide_empty'         => 1,
                        'use_desc_for_title' => 0,
                        'child_of'           => 0,
                        'feed'               => '',
                        'feed_type'          => '',
                        'feed_image'         => '',
                        'exclude'            => '',
                        'exclude_tree'       => '',
                        'include'            => '',
                        'hierarchical'       => 1,
                        'title_li'           => __( '' ),
                        'show_option_none'   => __( 'No categories' ),
                        'number'             => null,
                        'echo'               => 1,
                        'depth'              => 0,
                        'current_category'   => 0,
                        'pad_counts'         => 0,
                        'taxonomy'           => 'category',
                        'walker'             => null
                        );
                        wp_list_categories( $args ); ?>
                    </li>  -->
                </ul>
            </div>
        </div>
    </header>