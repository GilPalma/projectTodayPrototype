<?php
/*
	Template Name: Home
	Template Post Type: page
*/
?>

<?php get_header() ?>

<section class="intro">
	<div class="hero">
		Projecto <img src="<?= get_field("main_logo") ?>"/>
	</div>

	<?php
		wp_nav_menu([
			'menu' => 8,
			'menu_class' => 'hero-navigation',
			'container' => 'nav',
			'container_aria_label' => 'Hero Navigations'
		]);
	?>

	<div class="summary">
		<?php the_content(); ?>
	</div>
</section>


<?php get_footer() ?>