<?php 
	if(!class_exists('mizu_Text_Widget')){
		
		class mizu_Text_Widget extends Wp_Widget{
			
			function __construct(){
				$widget_ops = array(
					'classname' => 'mizu_css_classname',
					'description' => __('mizu Text Widget')
				);
				$this->WP_Widget(
					'mizu_text_widget',
					__('mizu Text'),
						$widget_ops
				);
			}
			function widget($args, $instance){
				extract($args);
				$title = apply_filters('widget_title', $instance['title']);
				$notice = empty($instance['notice']) ? '&nbsp' :
				apply_filters('widget_notice', $instance['notice']);
				if ( !empty($title)) {
					echo $before_title . $title . $after_title;
				}
				echo $before_widget;
				echo '<p>' . '==>' . ': ' . $notice . '</p>';
				echo $after_widget;
			}
			function update($new_instance, $old_instance){
				$instance = $old_instance;
				$instance['title'] = strip_tags($new_instance['title']);
				$instance['notice'] = strip_tags($new_instance['notice']);
				return $instance;
			}
			function form($instance){
				$defaults = array('title'=> 'My Notice', 'name'=> '', 'notice' => '');
				$instance = wp_parse_args((array)$instance, $defaults);
				$title = strip_tags($instance['title']);
				$name = strip_tags($instance['name']);
				$notice = strip_tags($instance['notice']);
				?>
				 <p><?php _e('Title')?>:
				 <input class="widefat" name="<?php echo $this->get_field_name('title');?>" 
				 type="text" value="<?php echo esc_attr($title)?>" /></p>
				 <p><?php _e('Notice')?>:
				 <textarea class="widefat" name="<?php echo $this->get_field_name('notice');?>">
				 <?php echo esc_attr($notice);?></textarea></p>				
				<?php 
			}
		}//End of class
	}
?>