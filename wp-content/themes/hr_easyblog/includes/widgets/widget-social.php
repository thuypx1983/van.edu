<?php
/**
 * Custom Widget for displaying specific post formats
 *
 * Displays posts Social icons.
 *
 * @link http://codex.wordpress.org/Widgets_API#Developing_Widgets
 *
 * @package WordPress
 * @subpackage HR Easy Blog
 * @since HR Easy Blog
 */
class HR_Widget_Social extends WP_Widget {

	function hr_Widget_Social() {
		$widget_ops = array('classname' => 'widget_social', 'description' => __('Display your social profiles'));
		$control_ops = array('width' => 400, 'height' => 350);
		$this->WP_Widget('social', __('HR - Social Profiles'), $widget_ops, $control_ops);
	}

	function widget( $args, $instance ) {
		extract($args);
		$google_id = $instance['google_id'];		
		$feedburner_id = $instance['feedburner_id'];
		$twitter_id = $instance['twitter_id'];
		$facebook_id = $instance['facebook_id'];
		?>
		
<!--begin of social widget-->
	<div class="hr_widget_social">
		<div class="social-icons">
			<ul>
				<li class="icon-rss"><a href="http://feeds.feedburner.com/<?php echo $feedburner_id; ?>">RSS</a></li>
				<li class="icon-google"><a href="https://plus.google.com/<?php echo $google_id; ?>">GooglePlus</a></li>
				<li class="icon-twitter"><a href="http://twitter.com/<?php echo $twitter_id; ?>">Twitter</a></li>
				<li class="icon-facebook"><a href="http://www.facebook.com/<?php echo $facebook_id; ?>">Facebook</a></li>				
			</ul>
			<div class="clear"></div>
		</div>

	<div class="newsletter">
	
	<div class="subscribe">	
	 <h3 class="widget-title">E-mail Newsletter</h3>	 
 		<form onsubmit="window.open('http://feedburner.google.com/fb/a/mailverify?uri=<?php echo $feedburner_id; ?>', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true" target="popupwindow" method="post" action="http://feedburner.google.com/fb/a/mailverify" class="subscribe-form">
			<input type="text" placeholder="Enter Your E-mail" name="email" class="email">
			<input type="hidden" name="uri" value="<?php echo $feedburner_id; ?>">
			<input type="hidden" name="title" value="<?php echo $feedburner_id; ?>">
			<input type="hidden" value="en_US" name="loc">
			<input type="submit" value="Submit" name="submit" class="submit">
		</form>
		</div>			
	</div>
	</div>
	
<!--end of social widget--> 

		<?php
	}

	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['google_id'] = $new_instance['google_id'];		
		$instance['feedburner_id'] = $new_instance['feedburner_id'];
		$instance['twitter_id'] =  $new_instance['twitter_id'];
		$instance['facebook_id'] =  $new_instance['facebook_id'];
		return $instance;
	}

	function form( $instance ) { 
		$instance = wp_parse_args( (array) $instance, array( 'google_id' => 'hiresponsive', 'feedburner_id' => 'hiresponsive', 'twitter_id' => 'hiresponsive', 'facebook_id' => 'hiresponsive' ) );
		$google_id = $instance['youtube_id'];		
		$feedburner_id = $instance['feedburner_id'];
		$twitter_id = format_to_edit($instance['twitter_id']);
		$facebook_id = format_to_edit($instance['facebook_id']);
	?>
		<p><label for="<?php echo $this->get_field_id('google_id'); ?>"><?php _e('Enter your Google ID:'); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id('google_id'); ?>" name="<?php echo $this->get_field_name('google_id'); ?>" type="text" value="<?php echo $google_id; ?>" /></p>
			
		<p><label for="<?php echo $this->get_field_id('feedburner_id'); ?>"><?php _e('Enter your Feedburner ID:'); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id('feedburner_id'); ?>" name="<?php echo $this->get_field_name('feedburner_id'); ?>" type="text" value="<?php echo $feedburner_id; ?>" /></p>
		
		<p><label for="<?php echo $this->get_field_id('twitter_id'); ?>"><?php _e('Enter your Twitter ID:'); ?></label>
		<input class="widefat" type="text" id="<?php echo $this->get_field_id('twitter_id'); ?>" name="<?php echo $this->get_field_name('twitter_id'); ?>" value="<?php echo $twitter_id; ?>" /></p>
		
		<p><label for="<?php echo $this->get_field_id('facebook_id'); ?>"><?php _e('Enter your Facebook ID:'); ?></label>
		<input class="widefat" type="text" id="<?php echo $this->get_field_id('image'); ?>" name="<?php echo $this->get_field_name('facebook_id'); ?>" value="<?php echo $facebook_id; ?>" /></p>
		<?php }
}

register_widget('HR_Widget_Social');

