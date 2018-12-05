<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset') ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<title> Desafío Latam </title>

	<?php get_template_part('_includes/iOS', 'icons') ?>
	<?php wp_head() ?>
</head>
<body>

<?php if ( has_nav_menu( 'header-menu' ) ) { ?>
	<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container_class' => 'header-menu' ) ); ?>
<?php } ?>

<div class="card-body">
	<!--NAV-->
	<div class="card text-center">
			<div class="container">
 			<div class="card-header">
	 		 	<a href="#" class="link-logo"><img src="<?php echo get_bloginfo('template_url') ?>/assets/images/latam_logo.png" alt="LOGO" class="logo-header"></a>
	  			<ul class="nav nav-tabs card-header-tabs">
			     	<li class="nav-item">
			       	<a class="nav-link active" href="#">Equipo</a>
			    	</li>
			      	<li class="nav-item">
			        <a class="nav-link" href="#">Blog</a>
			      	</li>
			      	<li class="nav-item">
			        <a class="nav-link disabled" href="#">Contacto</a>
			      	</li>
			    </ul>
  			</div>
		</div>
	</div>
	<!--Interior header-->
	<div class="container-text">
    	<h1 class="card-title"> COMIENZA UNA NUEVA VIDA Y ÚNETE AL MUNDO TECNOLÓGICO</h1>
    	<!--botones-->
    	<button type="button" class="btn btn-primary">COMIENZA ACÁ</button>
    	<button type="button" class="btn btn-success">MÁS INFO</button>
    	<!--texto inicio-->
    	<p class="card-text">Hola,tengo que inventar un landing page, así que Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
    </div>
  </div>