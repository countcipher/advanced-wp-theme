<?php get_header(); ?>

<?php include "inc/custom_fields.php" ?>

      <div class="jumbotron">
        <div class="container">
          <h1><?php echo get_theme_mod('banner_heading', 'Banner Heading'); ?></h1>
          <p class="lead"><?php echo get_theme_mod('banner_text', 'This is some text'); ?></p>
          <p><a class="btn btn-lg btn-primary" href="<?php echo get_theme_mod('banner_btn_url', 'https:www.cyberleviathan.com'); ?>" role="button"><?php echo get_theme_mod('banner_btn_text', 'Button Text'); ?></a></p>
        </div>
      </div>

      <h1 class="custom_fields_testing">Testing: <?php echo $test_custom_fields; ?></h1>

      <?php $loop = new WP_Query(array(
        'post_type' =>  'course_feature',
        'orderby'   =>  'post_id',
        'order'     =>  'ASC'
      )); ?>

      <?php while($loop->have_posts()) : $loop->the_post(); ?>

      <div>
        <h1><?php the_title(); ?></h1>
        <div>
          <?php the_post_thumbnail(); ?>
        </div>
        <div>
          <?php the_content(); ?>
        </div>
      </div>

      <?php endwhile; ?>

      <?php $loop = new WP_Query(array(
        'post_type'   =>    'test',
        'order_by'    =>    'post_id',
        'order'       =>    'ASC'
      ));?>

      <?php while($loop->have_posts()) : $loop->the_post() ?>

        <h1><?php the_title(); ?></h1>

        <?php the_post_thumbnail(); ?>

        <?php the_content(); ?>

      <?php endwhile; ?>

      <section class="row marketing">
        <div class="container">
          <div class="col-lg-4">
            <div class="block">
              <i class="fa fa-bar-chart fa-3"></i>
              <h3>Subheading</h3>
              <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="block">
            <i class="fa fa-code fa-3"></i>
              <h3>Subheading</h3>
              <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="block">
            <i class="fa fa-desktop fa-3"></i>
              <h3>Subheading</h3>
              <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>
            </div>
          </div>
        </div>
      </section>

      <section class="row content-region-1 pt50 pb40">
        <div class="container">
          <div class="col-md-12">
            <h1>Clean Bootstrap Wordpress Theme</h1>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sapien sem, laoreet eu tempus vitae, sollicitudin eu odio</p>
          </div>
        </div>
      </section>

      <section class="row content-region-2 pt40 pb40">
        <div class="container">
          <div class="col-md-5">
            <img src=<?php echo get_theme_mod('added_image'); ?>>
          </div>
          <div class="col-md-7">
            <h3>Theme Features</h3>
            <ul class="list-group">
              <li class="list-group-item"><i class="fa fa-check" aria-hidden="true"></i> Clean Code</li>
              <li class="list-group-item"><i class="fa fa-check" aria-hidden="true"></i> Custom Showcase Area</li>
              <li class="list-group-item"><i class="fa fa-check" aria-hidden="true"></i> Bootstrap 3 Framework</li>
              <li class="list-group-item"><i class="fa fa-check" aria-hidden="true"></i> Multiple Color Choices</li>
            </ul>
          </div>
        </div>
      </section>

<?php get_footer(); ?>
