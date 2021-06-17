<?php
//======================================================================
//DOCUMENTS TITLED 'front-page.php' WILL AUTOMATICALLY BE USED AS HOME PAGE
//=====================================================================
?>
<?php get_header(); ?>

      <div class="jumbotron">
        <div class="container">
          <h1><?php echo get_theme_mod('banner_heading', 'Banner Heading'); ?></h1>
          <p class="lead"><?php echo get_theme_mod('banner_text', 'Banner Heading'); ?></p>
          <p><a class="btn btn-lg btn-primary" href="<?php echo get_theme_mod('banner_btn_url', 'https://www.cyberleviathan.com'); ?>" ><?php echo get_theme_mod('banner_btn_text', 'Sign Up!'); ?></a></p>
        </div>
      </div>

      <section class="row marketing">
        <div class="container">
          <div class="col-lg-4">
            <div class="block">
              <i class="fa fa-<?php echo get_theme_mod('box1_icon', 'bar-chart'); ?> fa-3"></i>
              <h3><?php echo get_theme_mod('box1_heading', 'Testing'); ?></h3>
              <p><?php echo get_theme_mod('box1_text', 'Sample Text'); ?></p>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="block">
              <i class="fa fa-<?php echo get_theme_mod('box2_icon', 'bar-chart'); ?> fa-3"></i>
              <h3><?php echo get_theme_mod('box_2', 'Testing'); ?></h3>
              <p><?php echo get_theme_mod('box2_text', 'Sample Text'); ?></p>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="block">
            <i class="fa fa-<?php echo get_theme_mod('box3_icon', 'bar-chart'); ?> fa-3"></i>
              <h3><?php echo get_theme_mod('box_3', 'Testing'); ?></h3>
              <p><?php echo get_theme_mod('box3_text', 'Sample Text'); ?></p>
            </div>
          </div>
        </div>
      </section>

      
            <?php if(is_active_sidebar('content-region-1')) : ?>
              <?php dynamic_sidebar('content-region-1'); ?>
            <?php endif; ?>

            <?php if(is_active_sidebar('content-region-2')) : ?>
              <?php dynamic_sidebar('content-region-2'); ?>
            <?php endif; ?>

        </div>
      </section>

<?php get_footer(); ?>
