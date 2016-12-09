<?php
/**
 * Template para la barra superior
 *
 * Comprueba si estamos en un artículo para mostrar una barra personalizada con los metadatos del mismo.
 *
 * @package WordPress
 * @subpackage materializewp
 */

?>
<nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container">
    	<a id="logo-container" href="<?php bloginfo('url'); ?>" class="brand-logo"><?php bloginfo('title'); ?></a>
		<?php
			wp_nav_menu(array(
				'theme_location' => 'navbar',
				'menu' => 'Navbar',
				'menu_class' => 'right hide-on-med-and-down'
			));
		?>

 		<?php
			wp_nav_menu(array(
				'theme_location' => 'navbar',
				'menu' => 'Navbar',
				'menu_class' => 'side-nav',
				'menu_id' => 'nav-mobile',
				'items_wrap' => '<ul id="slide-out" class="%2$s">%3$s</ul>'
			));
		?>
      	<a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
</nav>


<!--
<nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container">
    	<a id="logo-container" href="#" class="brand-logo">MaterializeWP</a>
	    <ul class="right hide-on-med-and-down">
	        <li><a href="#">Home</a></li>
	    </ul>

      	<ul id="nav-mobile" class="side-nav">
        	<li><a href="#">Navbar Link</a></li>
      	</ul>
      	<a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
</nav>
-->