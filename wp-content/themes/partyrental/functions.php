<?php 
	function theme_support() {
		add_theme_support('post-thumbnails');
		//Nav Menus
		register_nav_menus(array(
			'primary' => __('Primary Menu')
		));	
	}
	add_action('after_setup_theme', 'theme_support');
?>

