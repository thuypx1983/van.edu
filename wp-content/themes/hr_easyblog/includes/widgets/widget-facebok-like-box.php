<?php
/**
 * Hi Responsive Facebook like box
 */
class TJ_FblbWidget extends WP_Widget {

	function TJ_FblbWidget() {
		$widget_ops = array('description' => 'Facebook Like Box for Fanpage.' );
		parent::WP_Widget(false, __('Facebook Like Box', 'hiresponsive'),$widget_ops);      
	}

	function widget($args, $instance) {  
		$title = $instance['title'];
		$adcode = $instance['adcode'];

        echo '<div class="widget facebook-like-box">';

		if($title != '')
			echo '<h3 class="ad-title">'.$title.'</h3>';

		if($adcode != ''){
		?>
			<div id="fb-root"></div>
				<script>(function(d, s, id) {
				  var js, fjs = d.getElementsByTagName(s)[0];
				  if (d.getElementById(id)) return;
				  js = d.createElement(s); js.id = id;
				  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=443627439036532&version=v2.0";
				  fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk'));</script>
				<div class="fb-like-box" data-href="<?php echo $adcode?>" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false"></div>
		<?php } else { ?>
		
		<?php
		}
		
		echo '</div>';

	}

	function update($new_instance, $old_instance) {                
		return $new_instance;
	}

	function form($instance) {        
		$title = esc_attr($instance['title']);
		$adcode = esc_attr($instance['adcode']);
		?>
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title (optional):','hiresponsive'); ?></label>
            <input type="text" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo $title; ?>" class="widefat" id="<?php echo $this->get_field_id('title'); ?>" />
        </p>
		<p>
            <label for="<?php echo $this->get_field_id('adcode'); ?>"><?php _e('Ad Code:','hiresponsive'); ?></label>
            <textarea name="<?php echo $this->get_field_name('adcode'); ?>" class="widefat" id="<?php echo $this->get_field_id('adcode'); ?>" rows="6"><?php echo $adcode; ?></textarea>
        </p>
       
        <?php
	}
} 

register_widget('TJ_FblbWidget');
?>