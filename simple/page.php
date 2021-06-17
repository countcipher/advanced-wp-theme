<!-- ==============================
'PAGE.PHP' IS USED AS THE DESTINATION FOR PAGES
============================================ -->
<?php get_header(); ?>

<div class="container">
    <div class="main">
            <?php if(have_posts()) : ?>
                <?php while(have_posts()) : the_post(); ?>

                    <article class="post">
                        
                        <!-- PERMALINK AND TITLE
                        ============================== -->
                        <h3>
                            <?php the_title(); ?>
                        </h3>

                        <!-- THUMBNAIL
                        ============================== -->
                        <?php if(has_post_thumbnail()) : ?>
                        
                            <div class="post-thumbnail">
                                <?php the_post_thumbnail(); ?>
                            </div>
                    
                        <?php endif; ?>

                        <!-- CONTENT
                        ============================== -->
                        <?php the_content(); ?>

                    </article>

                <?php endwhile; ?>
            <?php else : ?>
                <h1>There are no posts</h1>
            <?php endif; ?>
        </div>

    <div class="sidebar">
        <?php if(is_active_sidebar('sidebar')) : ?>

            <?php dynamic_sidebar('sidebar'); ?>

        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>