<?php 

 /* 
	Plugin Name: Our Custom Plugin
	Description: A truly Amazing Plugin
	Version: 1.0
	Author: Noman Shahid
	Author URI: www.github.com/i-am-nomanshahid
 */

add_action('the_content', 'addToEndOfPost');
function addToEndOfPost($content)
{
	if (is_single() && is_main_query()){
		return $content . "<p>My name is Noman.</p>";
    }
    return $content;
}

?>