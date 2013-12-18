<?php
/*
Author: Eddie Machado
URL: htp://themble.com/bones/

This is where you can drop your custom functions or
just edit things like thumbnail sizes, header images, 
sidebars, comments, ect.
*/

/************* INCLUDE NEEDED FILES ***************/
add_editor_style();

/*
1. library/bones.php
    - head cleanup (remove rsd, uri links, junk css, ect)
	- enqueueing scripts & styles
	- theme support functions
    - custom menu output & fallbacks
	- related post function
	- page-navi function
	- removing <p> from around images
	- customizing the post excerpt
	- custom google+ integration
	- adding custom fields to user profiles
*/
require_once('library/bones.php'); // if you remove this, bones will break
/*
2. library/custom-post-type.php
    - an example custom post type
    - example custom taxonomy (like categories)
    - example custom taxonomy (like tags)
*/
require_once('library/custom-post-type.php'); // you can disable this if you like
/*
3. library/admin.php
    - removing some default WordPress dashboard widgets
    - an example custom dashboard widget
    - adding custom login css
    - changing text in footer of admin
*/
require_once('library/admin.php'); // this comes turned off by default
/*
4. library/translation/translation.php
    - adding support for other languages
*/
// require_once('library/translation/translation.php'); // this comes turned off by default

/************* THUMBNAIL SIZE OPTIONS *************/

// Thumbnail sizes
//add_image_size( 'bones-thumb-600', 600, 150, true );
//add_image_size( 'bones-thumb-300', 300, 100, true );
/* 
to add more sizes, simply copy a line from above 
and change the dimensions & name. As long as you
upload a "featured image" as large as the biggest
set width or height, all the other sizes will be
auto-cropped.

To call a different size, simply change the text
inside the thumbnail function.

For example, to call the 300 x 300 sized image, 
we would use the function:
<?php the_post_thumbnail( 'bones-thumb-300' ); ?>
for the 600 x 100 image:
<?php the_post_thumbnail( 'bones-thumb-600' ); ?>

You can change the names and dimensions to whatever
you like. Enjoy!
*/

/************* ACTIVE SIDEBARS ********************/

// Sidebars & Widgetizes Areas
/*
function bones_register_sidebars() {
    register_sidebar(array(
    	'id' => 'sidebar1',
    	'name' => __('Sidebar 1', 'bonestheme'),
    	'description' => __('The first (primary) sidebar.', 'bonestheme'),
    	'before_widget' => '<div id="%1$s" class="widget %2$s">',
    	'after_widget' => '</div>',
    	'before_title' => '<h4 class="widgettitle">',
    	'after_title' => '</h4>',
    ));
*/
    
    /* 
    to add more sidebars or widgetized areas, just copy
    and edit the above sidebar code. In order to call 
    your new sidebar just use the following code:
    
    Just change the name to whatever your new
    sidebar's id is, for example:
    
    register_sidebar(array(
    	'id' => 'sidebar2',
    	'name' => __('Sidebar 2', 'bonestheme'),
    	'description' => __('The second (secondary) sidebar.', 'bonestheme'),
    	'before_widget' => '<div id="%1$s" class="widget %2$s">',
    	'after_widget' => '</div>',
    	'before_title' => '<h4 class="widgettitle">',
    	'after_title' => '</h4>',
    ));
    
    To call the sidebar in your template, you can just copy
    the sidebar.php file and rename it to your sidebar's name.
    So using the above example, it would be:
    sidebar-sidebar2.php
    
    */
/* } */ // don't remove this bracket!







// Remove width and height from thumbnails
add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10 );
add_filter( 'image_send_to_editor', 'remove_thumbnail_dimensions', 10 ); 
add_filter( 'types_render_field', 'remove_thumbnail_dimensions', 10 ); 

function remove_thumbnail_dimensions( $html ) { 
	$html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html ); 
	return $html; }
	
	
// If a page is in a Tree of the parent cat
function is_tree($pid) {      // $pid = The ID of the page we're looking for pages underneath
	global $post;         // load details about this page
	if(is_page()&&($post->post_parent==$pid||is_page($pid))) 
               return true;   // we're at the page or at a sub page
	else 
               return false;  // we're elsewhere
};

// CUSTOM EXCERPT
function get_excerpt($count){
  $permalink = get_permalink($post->ID);
  $excerpt = get_the_content();
  $excerpt = strip_tags($excerpt);
  $excerpt = substr($excerpt, 0, $count);
  $excerpt = substr($excerpt, 0, strripos($excerpt, " "));
  $excerpt = $excerpt.'... <a href="'.$permalink.'">read more</a>';
  return $excerpt;
}


// GET CUSTOM POST TYPE CATEGORY
function cpt_category($taxonomy) {
	
	$terms = get_the_terms( $post->ID , $taxonomy );
	
	// Loop over each item since it's an array
	if ( $terms != null ){
		foreach( $terms as $term ) {
		// Print the name method from $term which is an OBJECT
		return $term->name ;
		// Get rid of the other data stored in the object, since it's not needed
		unset($term);
		} 
	} 
};



// RETURN FLOOR NUMBER ( updated for , and - )
function return_floor_number() {

	$suite_number = get_the_title(); // ex: '640, 645' OR '640-645' OR '640'
	$suites = preg_split("/[-, ]+/", $suite_number); // an array, accounting for - or , or no separation
		// $suites[0] being the first suite in that array, regardless of how it's separated
	$first_suite_length = strlen($suites[0]);

	if ($first_suite_length < 4 ) {
		$floor_number = $suites[0][0]; // item 1 in the array, 1st digit of that item
		}
	else if ($first_suite_length == 4) {
		$floor_number = $suites[0][0].$suites[0][1]; // item 1 in the array, 1st 2 digits of that item
		}
	return $floor_number;

};



// BUILDING FEATURES (Property & Property > Subpage)
function building_features($postParent) {

	if( get_field('building-features', $postParent) ) {
		while( has_sub_field('building-features', $postParent) ) { 
			$feature = get_sub_field('building-feature', $postParent);
			echo '<li>' . $feature . '</li>';
		}
	} 
};// building_features



// BUILDING ROTATOR (Property & Property > Subpage)
function building_rotator($postParent) {

	if( get_field('building_rotator', $postParent) ) {
		while( has_sub_field('building_rotator', $postParent) ) {
		
			$building_image = get_sub_field('image', $postParent);
			echo '<div class="slide" style="background: url(' . $building_image . ');"></div>';
			
		}
	} 
	
};// building rotator



// DOWNLOAD BROCHURE BUTTON (Property > Amenities, & Property Landing)
function download_brochure($postParent){

	if( get_field('download_brochure', $postParent) )	{
		while( has_sub_field('download_brochure', $postParent) ) {
		
			$brochure_image = get_sub_field('brochure-image', $postParent);
			$brochure_file = get_sub_field('brochure-file', $postParent);
			
			echo '<a class="download brochure" href="' . $brochure_file . '"><img class="tout-logo-svg" src="'. get_template_directory_uri() .'/library/images/download-txt.svg" alt="Download Flyer" /><img alt="brochure" src="' . $brochure_image. '" /></a>';
		}// while
	}// if
};// download_brochure



// GET CONTACTS (for the Property > Contact page)
function get_contacts($type, $property) {

	if( get_field( $type . '_contacts', $property) ) {
		
		while( has_sub_field( $type . '_contacts', $property) ) { 
	
	 		if( get_sub_field('contact', $property) ) {
				while( has_sub_field('contact', $property) ) { 		
					$name = get_sub_field('name', $property);			
					$title = get_sub_field('title', $property);			
					$email = get_sub_field('email', $property);
					
		 		if( get_sub_field('address', $property) ) {
					while( has_sub_field('address', $property) ) { 		
						$street = get_sub_field('street', $property);
						$city = get_sub_field('city_state_zip', $property);
						$phone = get_sub_field('phone', $property);
						$fax = get_sub_field('fax', $property);

			echo '<div class="contact-entry">';
			echo '<h4 class="contact-name">' . $name . '</h4>';
			echo '<p class="contact-info"><span class="contact-title">' . $title . '</span>  <span class="contact-email"><a href="mailto:'. $email .'">' . $email . '</a></span><br>';
			echo $street . ', ' . $city . '<br>';
			if($phone != "") {echo '<span class="phone-fax">T</span> ' . $phone ;}
			if($fax != "") {echo  '<br>' . '<span class="phone-fax">F</span> ' . $fax;}
			echo '</p>';
			echo '</div>';
			
		}}
			else { // if no address
				$phone = get_sub_field('phone');
				
				echo '<div class="contact-entry">';
				echo '<h4 class="contact-name">' . $name . '</h4>';
				if($phone != "") {echo $phone;}
				echo '<p class="contact-info"><span class="contact-email"><a href="mailto:'. $email .'">' . $email . '</a></span><br>';
				echo '</p>';
				echo '</div>';
			
			}
	
	}} } } // end of if while; if while; if while

};// get_contacts



// GET THE SLIDES (instances in Home & Neighborhood templates)
function get_slides($parent, $child) {

	if( get_field($parent) )
	{	
		while( has_sub_field($parent) )
		{ 
			$image = get_sub_field($child);
	
			echo '<div class="slide" style="background: url('.$image.')"></div>';
	
		} // while
		
	}// if

}// get_slides




// GET AMENITIES FROM THE APPROPRIATE PAGE ID
function get_amenities($id) {
	if( get_field('amenities', $id) ) 
	{
		while( has_sub_field('amenities', $id) )
		{ 
			$amenity = get_sub_field('amenity', $id);
			echo '<li>' . $amenity . '</li>';
		}
	} 
}


// ADD SVG TO FILE UPLOAD

function cc_mime_types( $mimes ){
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter( 'upload_mimes', 'cc_mime_types' );




function remove_menus () {
global $menu;
	$restricted = array(__('Posts'), __('Links'), __('Comments'));
	end ($menu);
	while (prev($menu)){
		$value = explode(' ',$menu[key($menu)][0]);
		if(in_array($value[0] != NULL?$value[0]:"" , $restricted)){unset($menu[key($menu)]);}
	}

}
add_action('admin_menu', 'remove_menus');

?>
