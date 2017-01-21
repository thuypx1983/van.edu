<?php
/* Text Domain: HR News */
add_filter('show_admin_bar', '__return_false');
if ( ! isset( $content_width ) ) {
	$content_width = 474;
}

require_once('wp_bootstrap_navwalker.php');
// Custom Menus
function register_main_menus() {
	register_nav_menus(
		array(
			'top-menu' => __( 'Top Menu' ),
			'header-menu' => __( 'Header Menu' ),
			'sidebar-menu' => __( 'Sidebar Menu' ),
			'bottom-menu' => __( 'Bottom Menu' ),
		)
	);
}

if (function_exists('register_nav_menus')) add_action( 'init', 'register_main_menus' );
if(!is_admin()) {
	add_action( 'wp_print_scripts', 'my_deregister_scripts', 100 );
}
	
function my_deregister_scripts() {
		wp_deregister_script( 'jquery' );
		wp_enqueue_script('jquery', get_template_directory_uri().'/js/jquery.min.js', false, '1.11.0');
		wp_enqueue_script('jquery-bootstrap', get_template_directory_uri().'/js/bootstrap.min.js', false, '1.4.2');
		wp_enqueue_script('jquery-scrolltop', get_template_directory_uri().'/js/scrolltop.js', true, '1.0');
		wp_enqueue_script('jquery-responsiveslides', get_template_directory_uri().'/js/jquery.flexslider.js', true, '1.0');
		wp_enqueue_script('jquery-custom', get_template_directory_uri().'/js/custom.js', true, '1.0');
		if ( is_singular() && get_option('thread_comments') ) wp_enqueue_script( 'comment-reply' );
		wp_enqueue_script('twitter-button', 'http://platform.twitter.com/widgets.js', false, '1.0');
		wp_enqueue_script('gpone-button', 'https://apis.google.com/js/plusone.js', false, '1.0');
		
}
	
// Filter to new excerpt length
function hr_excerpt_length( $length ) {
	return 15;
}
add_filter( 'excerpt_length', 'hr_excerpt_length' );

// Filter to new excerpt more text
function hr_excerpt_more($post) {
	return '... <a class="meta-more" href="'. get_permalink($post->ID) . '">'.__('more <span class="meta-nav"> </span>','hiresponsive').'</a>';
}
add_filter('excerpt_more', 'hr_excerpt_more');

// Filter to fix first page redirect
add_filter('redirect_canonical', 'fixpageone');

function fixpageone($redirect_url) {
	if(get_query_var('paged') == 1)
		$redirect_url = '';
	return $redirect_url;
}

// Pagenavi
function hr_pagenavi($range = 9) {
	global $paged, $wp_query;
	if ( !$max_page ) { $max_page = $wp_query->max_num_pages;}
	if($max_page > 1){
		echo '<div class="pagenavi clear">';
		if(!$paged){$paged = 1;}
		echo '<span> Page '.$paged.' / '.$max_page.'</span>';
		previous_posts_link('Previous');
		if($max_page > $range){
			if($paged < $range){
				for($i = 1; $i <= ($range + 1); $i++){
					echo "<a href='" . get_pagenum_link($i) ."'";
					if($i==$paged) echo " class='current'";
					echo ">$i</a>";

				}
			} elseif($paged >= ($max_page - ceil(($range/2)))){
				for($i = $max_page - $range; $i <= $max_page; $i++){
					echo "<a href='" . get_pagenum_link($i) ."'";
					if($i==$paged) echo " class='current'";
					echo ">$i</a>";
				}
			} elseif($paged >= $range && $paged < ($max_page - ceil(($range/2)))){
				for($i = ($paged - ceil($range/2)); $i <= ($paged + ceil(($range/2))); $i++){
					echo "<a href='" . get_pagenum_link($i) ."'";
					if($i==$paged) echo " class='current'";
					echo ">$i</a>";
				}
			}
		} else {
			for($i = 1; $i <= $max_page; $i++){
				echo "<a href='" . get_pagenum_link($i) ."'";
				if($i==$paged) echo " class='current'";
				echo ">$i</a>";
			}
		}
		next_posts_link('Next');
		echo '</div>';
	}
}

// Get limit excerpt
function hr_content_limit($max_char, $more_link_text = '', $stripteaser = 0, $more_file = '') {
    $content = get_the_content($more_link_text, $stripteaser, $more_file);
    $content = apply_filters('the_content', $content);
    $content = str_replace(']]>', ']]&gt;', $content);
    $content = strip_tags($content);

   if (strlen($_GET['p']) > 0) {
      echo "";
      echo $content;
      echo "...";
   }
   else if ((strlen($content)>$max_char) && ($espacio = strpos($content, " ", $max_char ))) {
        $content = substr($content, 0, $espacio);
        $content = $content;
        echo "";
        echo $content;
        echo "...";
   }
   else {
      echo "";
      echo $content;
   }
}

// Return number of posts in a Archive Page
function hr_current_postnum() {
	global $wp_query;
	$request = $wp_query->request;
	$posts_per_page = intval(get_query_var('posts_per_page'));
	$paged = intval(get_query_var('paged'));
	$numposts = $wp_query->found_posts;
	$max_page = $wp_query->max_num_pages;
	if(empty($paged) || $paged == 0) $paged = 1;
	if (!is_404()) 
		$begin_postnum = (($paged-1)*$posts_per_page)+1; 
	else 
		$begin_postnum = '0';
	if ($paged*$posts_per_page < $numposts) 
		$end_postnum = $paged*$posts_per_page; 
	else 
		$end_postnum = $numposts;
	$current_page_postnum = $end_postnum-$begin_postnum+1;
	return $current_page_postnum;
}

	
	function hr_coppyright()
	{
		$coppyright = '<span id="copyright-year">2014 </span><strong>'.get_bloginfo('name').'</strong>.';
		return $coppyright;
	}