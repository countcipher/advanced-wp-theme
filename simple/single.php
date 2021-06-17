<!-- ===================================
'SINGLE.PHP FILE IS USED AS THE DESTINATION OF A SINGLE POST
================================================ -->
<?php get_header(); ?>

<div class="container">
    <div class="main">
        
            <?php if(have_posts()) : ?>
                <?php while(have_posts()) : the_post(); ?>

                    <article class="post">
                        <h3>
                            <?php the_title(); ?>
                        </h3>

                        <div class="meta">
                            Created By <?php the_author(); ?> on <?php the_time('F j, Y g:i a'); ?>
                        </div>

                        <!-- THUMBNAIL
                        ============================== -->
                        <?php if(has_post_thumbnail()) : ?>
                        
                        <div class="post-thumbnail">
                            <?php the_post_thumbnail(); ?>
                        </div>
                
                    <?php endif; ?>

                        <?php the_content(); ?>
                    </article>

                <?php endwhile; ?>
            <?php else : ?>
                <h1>There are no posts</h1>
            <?php endif; ?>

            <?php comments_template(); ?>
        </div>

        <div class="sidebar">
            <?php if(is_active_sidebar('sidebar')) : ?>

                <?php dynamic_sidebar('sidebar'); ?>

            <?php endif; ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>