<footer>
    <div class="container">
        <div class="footer-content">
            <div class="row">
                <div class="col-xs-4">
                    <div class="footer-widget"><?php dynamic_sidebar('footer-1');?></div>
                </div>

                <div class="col-xs-4">
                    <div class="footer-widget"> <?php dynamic_sidebar('footer-2');?></div>
                </div>

                <div class="col-xs-4">
                    <div class="footer-widget"><?php dynamic_sidebar('footer-3');?></div>
                </div>
            </div>
        </div>

        <div class="copyrights">
            <span><?php echo get_theme_mod('copyright_details') ?></span>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>