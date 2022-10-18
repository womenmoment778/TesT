<?php
function head (){
	include "head.php";
}
function body_start (){
	include "body-start.php";
}
function header_user (){
	include "header.php";
}
function main_user (){
	include "main.php";
}
function footer (){
	include "footer.php";
}
function body_end () {
	 include "body-end.php";
}
function html_end (){
	include "html-end.php";
}
function tag_open($name_tag){
	echo '<'.$name_tag.'>';
}
function tag_close($name_tag){
	echo '</'.$name_tag.'>';
}
function tag($name_tag){
	$tag = tag_open($name_tag).tag_close($name_tag);
	echo $tag;
}
?>