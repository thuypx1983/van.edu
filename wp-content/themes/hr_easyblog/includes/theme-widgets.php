<?php

/*---------------------------------------------------------------------------------*/
/* Loads all the .php files found in /includes/widgets/ directory */
/*---------------------------------------------------------------------------------*/

	$preview_template = _preview_theme_template_filter();

	if(!empty($preview_template)){
		$hr_widgets_dir = WP_CONTENT_DIR . "/themes/".$preview_template."/includes/widgets/";
	} else {
    	$hr_widgets_dir = WP_CONTENT_DIR . "/themes/".get_option('template')."/includes/widgets/";
    }
    
    if (@is_dir($hr_widgets_dir)) {
		$hr_widgets_dh = opendir($hr_widgets_dir);
		while (($hr_widgets_file = readdir($hr_widgets_dh)) !== false) {
  	
			if(strpos($hr_widgets_file,'.php') && $hr_widgets_file != "widget-blank.php") {
				include_once($hr_widgets_dir . $hr_widgets_file);
			
			}
		}
		closedir($hr_widgets_dh);
	}
	
	
/*---------------------------------------------------------------------------------*/
/* Deregister Default Widgets */
/*---------------------------------------------------------------------------------*/
if (!function_exists('hr_deregister_widgets')) {
	function hr_deregister_widgets(){
	    unregister_widget('WP_Widget_Search');         
	}
}
add_action('widgets_init', 'hr_deregister_widgets');  


?>