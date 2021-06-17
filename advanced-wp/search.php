<?php get_header(); ?>
	
	<div class="container content">
		<div class="main block">

            <h1 class="page-header">
                Search Results
            </h1>

			<?php if(have_posts()) : ?>

			<?php while(have_posts()) : the_post(); ?>
				 
				<?php get_template_part('content', get_post_format()); ?>

			<?php endwhile; ?>

			<?php else: ?>

				<?php echo "No Posts Found"; ?>

			<?php endif; ?>
 
		</div>

		<?php require_once('includes/sidebar.php'); ?>
		
	</div>

<?php get_footer(); ?>