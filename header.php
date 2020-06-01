<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />	
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>



<header>
	<div class="header_area">
		<div class="logo"> 
		<a href="/"></a>
		<img class="img-responsive logo_white" src="<?php echo get_template_directory_uri() ?>/img/logo_white.svg" alt="" >
		<img class="img-responsive logo_color" src="<?php echo get_template_directory_uri() ?>/img/logo_color.svg" alt="" ></div>
		<div class="burger-icon">
			<p class="title-page"><?php the_title(); ?></p>
			<a href="#" class="toggle-mnu hidden-lg"><span></span></a>
		</div>
	</div>
</header>
<div class="nav">
		<nav>
		<?php wp_nav_menu([
						'container_class' => 'primary-menu'
					]); ?>
		</nav>
		<div class="nav_bottom">
			<a href="/privacy">Политика конфиденциальности</a>
			<!-- <a href="#">Пользовательское соглашение</a> -->
		</div>
</div>

