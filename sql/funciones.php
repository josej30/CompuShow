<?php 
	function safe($value){
  		return mysql_real_escape_string(strip_tags(trim($value)));
	}
?>
