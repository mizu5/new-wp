<?php 
	/* 
	 * plugin Name: mizu Text Widget
	 * Plugin URI: http://cafe.naver.com/mizu
	 * Description: 워드프레스 투표 강좌 위젯편
	 * Version: 0.1
	 * Author: mizu
	 * Author URI: http://cafe.naver.com/mizu
	 * License: GPLv2 * 
	 * 
	 */
	 
require_once 'mizu-text-widget-class.php';

function rigister_mizu_text_widget(){
	register_widget("mizu_Text_Widget");
}

add_action('widgets_init','rigister_mizu_text_widget');
?>