<?php
/*
Plugin Name: THIS PLUGIN IS OBSOLETE!
Description: THIS PLUGIN IS OBSOLETE! USE THE NEW PLUGIN http://wordpress.org/extend/plugins/yahoo-weather/ INSTEAD!
*/

/*
include "simple_html_dom/simple_html_dom.php";
$absolutedirectorypath = str_replace('\\', '/', dirname(__FILE__)); // Absolute path of the directory this file resides in
$reldir=str_replace($_SERVER['DOCUMENT_ROOT'], '', $absolutedirectorypath);
$relimagedir=$reldir."/images/"; // Image path relative to the domain root so it could use relative urls in html

function weather($citycode,$cityname,$degreeunit) {
$degreeunitlower=strtolower(substr($degreeunit,0,1));
$url="http://weather.yahooapis.com/forecastrss?p=".$citycode."&u=".$degreeunitlower;
$file=file_get_dom($url);

if (file_exists(dirname(__FILE__)."/cache/".md5($url))) {
if(time()-filemtime(dirname(__FILE__)."/cache/".md5($url))>$GLOBALS['cachetime']) {
$html = $file;
file_put_contents(dirname(__FILE__)."/cache/".md5($url),$file);
} else {
$html = file_get_dom(dirname(__FILE__)."/cache/".md5($url));
}
} else {
$html = $file;
file_put_contents(dirname(__FILE__)."/cache/".md5($url),$file);
}

foreach($html->find('yweather:condition') as $element);
echo "<div id='weather' style='float:left;'>".$cityname."<br /><b>".$element->temp." &deg;".substr($degreeunit,0,1)."</b></div><div style='float:right;'>
<img src='".$GLOBALS['relimagedir'].$element->code.".png'
alt='".$element->text."' title='".$element->text."'/></div><br /><br /><br />";
}


add_action( 'widgets_init', 'example_load_widgets' );


function example_load_widgets() {
	register_widget( 'Yahoo_weather_Widget' );
}


class Yahoo_weather_Widget extends WP_Widget {

	function Yahoo_weather_Widget() {
		
		$widget_ops = array( 'classname' => 'yahoo-weather-widget', 'description' => __('Displays weather information from Yahoo Weather', 'example') );


		$control_ops = array( 'width' => 300, 'height' => 350, 'id_base' => 'yahoo-weather-widget' );

	
		$this->WP_Widget( 'yahoo-weather-widget', __('Yahoo Weather Widget', 'example'), $widget_ops, $control_ops );
	}


	function widget( $args, $instance ) {
		extract( $args );

		
		$title = apply_filters('widget_title', $instance['title'] );
		$unit = $instance['unit'];
     		$cachetime = $instance['cachetime'];



		$places = $instance['places'];


		echo $before_widget;

		if ( $title )
			echo $before_title . $title . $after_title;


$places=explode("|",$places);
$i=0;
while($i<count($places)) {
$item=explode(",",$places[$i]);
weather($item[0],$item[1],$unit);
$i++;
}


if (substr(decoct( fileperms($GLOBALS['absolutedirectorypath']."/cache") ), 2) != "777") {
echo "<b><font color='red'>Please set the 'cache' directory permissions to 777 in the wp-content/plugins/yahoo-weather-widget!</font></b>";
}


		
		echo $after_widget;
	}

	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;

		$instance['title'] = strip_tags( $new_instance['title'] );
		$instance['unit'] = strip_tags( $new_instance['unit'] );
                $instance['places'] = strip_tags( $new_instance['places'] );
	        $instance['cachetime'] = strip_tags( $new_instance['cachetime'] );	
		return $instance;
	}

	function form( $instance ) {

		
		$defaults = array( 'title' => __('Weather', 'title'), 'places' => __('ENXX0004,Tallinn|UKXX0112,Plymouth|SPXX0082,Valencia', 'places'), 'unit' => 'C',  'cachetime' => '300'    );
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>

		
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e('Title:', 'hybrid'); ?></label>
			<input id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" style="width:100%;" />
		</p>



		
		<p>
			<label for="<?php echo $this->get_field_id( 'places' ); ?>"><?php _e('Cities to show: 
(click the orange RSS icon on a Yahoo weather page, then copy the code from the url)', 'places'); ?></label>
			<input id="<?php echo $this->get_field_id( 'places' ); ?>" name="<?php echo $this->get_field_name( 'places' ); ?>" value="<?php echo $instance['places']; ?>" style="width:100%;" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'unit' ); ?>"><?php _e('Degree unit:', 'unit'); ?></label> 
			<select id="<?php echo $this->get_field_id( 'unit' ); ?>" name="<?php echo $this->get_field_name( 'unit' ); ?>" class="widefat" style="width:100%;">
				<option <?php if ( 'Celsius' == $instance['unit'] ) echo 'selected="selected"'; ?>>Celsius</option>
				<option <?php if ( 'Fahrenheit' == $instance['unit'] ) echo 'selected="selected"'; ?>>Fahrenheit</option>
			</select>
		</p>


		<p>
			<label for="<?php echo $this->get_field_id( 'cachetime' ); ?>"><?php _e('Cache time (in seconds):', 'cachetime'); ?></label>
			<input id="<?php echo $this->get_field_id( 'cachetime' ); ?>" name="<?php echo $this->get_field_name( 'cachetime' ); ?>" value="<?php echo $instance['cachetime']; ?>" style="width:100%;" />
		</p>

<p>
<?php
if (substr(decoct( fileperms($GLOBALS['absolutedirectorypath']."/cache") ), 2) != "777") {
echo "<b><font color='red'>Please set the 'cache' directory permissions to 777 in the wp-content/plugins/yahoo-weather-widget!</font></b>";
}
?>
</p>
	
	<?php
	}
}
*/
?>
