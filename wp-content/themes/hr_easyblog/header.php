<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes( 'xhtml' ); ?>>
<head>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<title><?php hr_custom_titles(); ?></title>
	<?php hr_custom_description(); ?>
	<?php hr_custom_keywords(); ?>
	<?php hr_custom_canonical(); ?>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
	<link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo get_template_directory_uri(); ?>/css/responsiveslides.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="<?php echo get_template_directory_uri(); ?>/custom.css" rel="stylesheet" type="text/css" />
		
	<?php wp_head(); ?>

<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-5475444542196307",
    enable_page_level_ads: true
  });
</script>



</head>
<body <?php body_class(); ?>>

<!--Comment FB-->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&appId=598728486914144&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!--Comment FB-->



<div class="hfeed site">
<div id="topbar" class="clearfix">
	<div class="container">
	<div class="row">
		<div class="col-lg-9">
			<?php 
			$catNav = '';
			if (function_exists('wp_nav_menu')) {
			$catNav = wp_nav_menu( array( 'theme_location' => 'top-menu', 'menu_class' => 'top-menu', 'menu_id' => 'top-menu', 'echo' => false, 'fallback_cb' => '' ) );};
			if ($catNav == '') { ?>
				<ul class="top-menu">
				<?php wp_list_categories('title_li=&orderby=id'); ?>
				</ul>
			<?php } else echo($catNav); ?>
		</div>
		<div class="col-lg-3">
			<ul class="follow_icon">
	        	<li><a class="fa fa-facebook" href=""></a></li>
	        	<li><a class="fa fa-youtube" href=""></a></li>
	        	<li><a class="fa fa-google-plus" href=""></a></li>
	        	<li><a class="fa fa-twitter" href="#"></a></li>
	        </ul>
        </div>
	</div>
	</div>
</div>
<header>
	<div class="header hidden-xs clearfix">
	<div class="container">
	<div class="row">
		<div class="col-lg-4">
		<div class="logo pull-left">
		<a href="<?php echo home_url(); ?>" title="<?php bloginfo('name'); ?>"><?php $logo = (get_option('hires_logo') <> '') ? get_option('hires_logo') : get_template_directory_uri().'/images/logo.png'; ?><img src="<?php echo $logo; ?>" alt="<?php bloginfo('name'); ?>" id="logo"/></a>
		</div>
		</div>
		<div class="col-lg-8">
			<?php /* Home Ad #1 */
			if( get_option('hires_ad_480_60_enable') == 'on'){
				echo '<div class="pull-right top-ads">';
				echo get_option('hires_ad_480_60_code');
				echo "</div>"; 
			} ?>
		</div>
	</div>
	</div>
	</div>
	<div class="container">
	<div role="navigation" class="navbar navbar-default">
        
        <div class="navbar-header">
          <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="visible-xs"><a href="<?php echo home_url(); ?>" title="<?php bloginfo('name'); ?>"><img alt="<?php bloginfo('name'); ?>" src="<?php echo $logo ?>"></a></div>
        </div>
        <div class="navbar-collapse collapse">
		<?php
            wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'header-menu',
                'depth'             => 3,
                'container'         => false,
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
        ?>
        <div id="search">
        <form class="navbar-form navbar-right hidden-sm">
            <input type="text" class="form-control field" name="s" id="s" placeholder="search...">
            <input class="submit btn" type="image" src="<?php echo get_template_directory_uri(); ?>/images/btn-search.png" alt="search"/>
        </form>
        </div> 
      	</div>
      	</div>
    </div>
	</header>
<div id="wrapper">
<div class="container">
<!--Analytics-->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-52522355-1', 'auto');
  ga('send', 'pageview');

</script>

<!--Like fanpage-->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&appId=598728486914144&version=v2.3";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>