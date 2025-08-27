<?php
/*
	Template Name: Home
	Template Post Type: page
*/
?>

<?php get_header() ?>

<section class="intro">
	<div class="hero">
		Projecto <span class="primary-color">Hoje</span>
	</div>

	<?php
		wp_nav_menu([
			'menu' => 8,
			'menu_class' => 'hero-navigation',
			'container' => 'nav',
			'container_aria_label' => 'Hero Navigations'
		]);
	?>
</section>



<?php get_footer() ?>