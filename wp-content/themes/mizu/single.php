<?php
$format = get_post_format();
if($format){
	get_template_part( 'content', $format );
}
$type = get_post_type();
if($type){
	get_template_part( 'template/content', $type);
}
?>