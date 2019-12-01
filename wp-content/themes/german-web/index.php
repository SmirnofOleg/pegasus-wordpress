<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package german-web
 */

get_header();
?>
	
	<!--Основной контент-->
	<div class="wrapper">
		<div class="pegasus-content">
		<?php 
			
			$args = array(
				'post_type' 	=> 'pegasus',
				'post_per_page' => -1
			);
			$query = new WP_Query( $args );
		?>

<?php
			while ( $query->have_posts() ) :
				$query->the_post(); ?>
			<div class="pegasus-content__item">
				<div class="image"><a href=""><?php echo get_the_post_thumbnail(get_the_ID()); ?></a></div>
				<div class="header-text text-center">
					<h1><?php the_title(); ?></h1>
					<div class="line"></div>
					<p><?php the_content(); ?></p>
					
					<div class="btn-link"><a href="#" class="button-content">Подробнее</a></div>
				</div>
				
			</div>
			<?php
				
					endwhile; // End of the loop.
			?>
		</div>
	</div>
	

<?php
get_footer();
