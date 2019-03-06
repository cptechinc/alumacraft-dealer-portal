<?php 
	if (isset($_GET['page'])) { $this_page = $_GET['page']; } else { $this_page = 1; }
	$lk_add = '';
	$pagination_link = replace_and_get_url($filename, 'page', 'delete-404', 'ajax/load/'.$ajaxdir.'/'.$subset.'.php'); 
	if (strpos($pagination_link, '?') !== FALSE) {$lk_add = '&';} else {$lk_add = '?'; }
	$pagination_link .= $lk_add.'page=';   
?>