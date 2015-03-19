<footer>
    <div class="container">
        <div class="footer-content">
            <div class="row">
                <div class="col-xs-4">
                    <div class="footer-widget"><?php dynamic_sidebar('footer-1');?></div>
                </div>

                <div class="col-xs-4">
                    <div class="footer-widget">
                        <div class="widget-title"><h6><?php echo get_option_tree('footer_middle_title');?></h6></div>
                        <div class="widget-about">
                            <?php echo get_option_tree('footer_middle'); ?>
                        </div>
                    </div>
                </div>

                <div class="col-xs-4">

                    <div class="footer-widget">
                      <div class="widget-title"><h6><?php echo get_option_tree('footer_right_title');?></h6></div>
                      <div class="widget-about-2">
                        <?php 

                        $list_item=ot_get_option('footer_right_info', array());

                        if(!empty($list_item)){
                            echo'<ul>';
                          foreach ($list_item as $footer_right) {

                            echo'<li>
                            <i class="'.$footer_right['footer_right_icon'].'"></i>
                            <div>'.$footer_right['footer_right_content'].'</div>
                            </li>';

                        }
                        echo'</ul>';
                    }

                    ?>

                </div>

            </div>
        </div>
    </div>

    <div class="copyrights">
        <span><?php echo get_option_tree('copyright_text') ?></span>
        <!-- <span><?php echo get_theme_mod('copyright_details') ?></span> -->
    </div>
</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>