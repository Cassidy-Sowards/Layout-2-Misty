<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Misty
 */

get_header(); ?>
<?php
get_sidebar(); ?>


	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class = "section"> 

		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			

			<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
			<b>Written on <?php the_time('F j, Y') ?></b>

			<div class="entry">
				</br><?php the_excerpt(); ?>
			</div>  
				
			<?php comments_popup_link('No Comments', '1 Comment', '% Comments');?> </p>

		</article>
	</div>
	<?php endwhile; ?>
<?php the_posts_navigation();?>

	<?php else : ?>

		<h2><?php _e('Nothing Found','html5reset'); ?></h2>

	<?php endif; ?>

<?php
get_footer();