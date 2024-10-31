<?php
/*
Plugin Name: Page Tags
Plugin URI: http://wordpress.org/#
Description: This allows you to add tags from any page where-ever you want. Usage: get_page_tags(page/post id);
Author: Rui Da Costa
Version: 0.2
Author URI: http://www.syphen.org/
*/

function get_page_tags($page_ID) 
{
	global $wpdb;
	$query = "select t1.term_id as term_id, t1.name as name, t1.slug as slug, t1.term_group as term_group, t2.taxonomy as taxonomy, t2.description, description, t2.count as count from wp_terms as t1, wp_term_taxonomy as t2, wp_term_relationships as t3 where t3.object_id = '".$page_ID."' and t3.term_taxonomy_id = t2.term_taxonomy_id and t2.term_id = t1.term_id and t2.taxonomy = 'post_tag'";
	$tags = $wpdb->get_results($query);
	$return = array();
	foreach($tags as $tag)
	{
		$foo = new stdClass();
		$foo->term_id = $tag->term_id;
		$foo->name = $tag->name;
    $foo->slug = $tag->slug;
    $foo->term_group = $tag->term_group;
    $foo->taxonomy = $tag->taxonomy;
    $foo->description = $tag->description;
    $foo->count = $tag->count;
    
    $return[] = $foo;
	}
	return $return;
}

?>