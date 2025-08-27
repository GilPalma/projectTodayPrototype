<head>
	<!-- custom code here -->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>

	<header>
		<?php
			wp_nav_menu([
				'menu' => 5,
				'menu_class' => 'main-menu',
				'container' => 'nav',
				'container_aria_label' => 'Main Navigations'
			]);
		?>
	</header>
