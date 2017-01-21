<?php
/**
 * HR Slider
 */
class HR_Slider extends WP_Widget{

    function HR_Slider(){
        $widgetOps = array(
            "classname"   => "hr-slider",
            "description" => "Add any type of Sliders as a widget.",
        );
        $controlOps = array(
            "width"   => '',
            "height"  => '',
            "id_base" => "slider-widget"
        );
        $this->WP_Widget("slider-widget", "HR Sliders", $widgetOps, $controlOps);
    }

    function widget($args, $instance){
		extract($args);

        $title = apply_filters("widget_title", $instance["title"]);
		$count = $instance["count"];

        echo $before_widget;
        //echo $before_title . $title . $after_title;
		?>
		<ul class="rslides pic_slider callbacks callbacks1">
        <?php for ($i = 1; $i <= $count; $i++) { ?>
		<?php if ($i == 1) { $class=""; } ?>
		<?php $slidercode = $instance["slider" . $i];?>
        <li class="callbacks1_on">
                                <a href="<?php echo $instance["slider" . $i . "-link"] ?>"><img src="<?php echo $slidercode; ?>" alt="<?php echo $instance["slider" . $i . "-title"]; ?>"></a>
                                <div class="slider-info">
                                    <h1><?php echo $instance["slider" . $i . "-title"]; ?></h1>
                                </div>
                            </li>
		<?php $class = ""; } ?>
        </ul><a style="opacity: 1;" href="#" class="callbacks_nav callbacks1_nav prev">Previous</a><a style="opacity: 1;" href="#" class="callbacks_nav callbacks1_nav next">Next</a>
    <?php
        echo $after_widget;
    }

    function form($instance)
    {
        $defaults = array(
            "title" => "Slider Widget",
            "count" => "3"
        );
        $instance = wp_parse_args((array) $instance, $defaults);
    ?>
        <p>
            <label for="<?php echo $this->get_field_id("title"); ?>">Title</label>
            <input id="<?php echo $this->get_field_id("title"); ?>" class="widefat" name="<?php echo $this->get_field_name("title"); ?>" value="<?php echo $instance["title"]; ?>" style="width: 96%;" />
        </p>

        <p>
            <label for="<?php echo $this->get_field_id("count"); ?>">Sliders</label>
            <select id="<?php echo $this->get_field_id("count"); ?>" name="<?php echo $this->get_field_name("count"); ?>" value="<?php echo $instance["count"]; ?>" style="width: 100%;">
                <?php for ($i = 2; $i <= 10; $i++) {
                    $active = "";
                    if ($instance["count"] == $i) {
                        $active = "selected=\"selected\"";
                    } ?>
                    <option <?php echo $active; ?> value="<?php echo $i; ?>"><?php echo $i; ?></option>
                <?php } ?>
            </select>
			<span class="description" style="font-size:11px;">Make sure to specify exact number of sliders, otherwise the widget won't work.</span>
        </p>

    <?php for ($i = 1; $i <= $instance["count"]; $i++) { ?>
        <p>
        <label for="<?php echo $this->get_field_id("slider" . $i); ?>"><strong>Slider #<?php echo $i; ?> Embed Code</strong></label>

        <textarea id="<?php echo $this->get_field_id("slider" . $i); ?>" class="widefat" name="<?php echo $this->get_field_name("slider" . $i); ?>" rows="3"><?php echo htmlspecialchars($instance["slider" . $i]); ?></textarea>
        </p>

        <p>
        <label for="<?php echo $this->get_field_id("slider" . $i . "-title"); ?>">Slider #<?php echo $i; ?> title</label>
        <textarea id="<?php echo $this->get_field_id("slider" . $i . "-title"); ?>" class="widefat" name="<?php echo $this->get_field_name("slider" . $i . "-title"); ?>" rows="3"><?php echo $instance["slider" . $i . "-title"]; ?></textarea>
		</p>

		<p>
        <label for="<?php echo $this->get_field_id("slider" . $i . "-link"); ?>">Slider #<?php echo $i; ?> Link</label>
        
		<input id="<?php echo $this->get_field_id("slider" . $i . "-link"); ?>" class="widefat" name="<?php echo $this->get_field_name("slider" . $i . "-link"); ?>" value="<?php echo $instance["slider" . $i . "-link"]; ?>" style="width:96%;" />
        <br/><br/></p>
    <?php }
    }
}
register_widget('HR_Slider');
?>