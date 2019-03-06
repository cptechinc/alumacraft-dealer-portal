<?php 
	$lk_add = '';
	$pagination_link = replace_and_get_url($filename, 'page', 'delete-404', $script_name); 
	if (strpos($pagination_link, '?') !== FALSE) {$lk_add = '&';} else {$lk_add = '?'; }
	$pagination_link .= $lk_add.'page=';   
?>