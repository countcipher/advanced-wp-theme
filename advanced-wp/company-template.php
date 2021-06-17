<?php
/*
Template Name: Company Layout
*/

?>
<?php get_header(); ?>
	
	<div class="container content">
		<div class="main block">

			<?php if(have_posts()) : ?>

			<?php while(have_posts()) : the_post(); ?>
				 
				<article class="page">
                    <h2><?php the_title() ?></h2>

                    <p class="phone">Call Us: 1-800-555-1212</p>

                    <?php the_content(); ?>
                </article>

			<?php endwhile; ?>

			<?php else: ?>

				<?php echo "No Posts Found"; ?>

			<?php endif; ?>
 
		</div>

		<?php require_once('includes/sidebar.php'); ?>
		
	</div>

<?php get_footer(); ?>