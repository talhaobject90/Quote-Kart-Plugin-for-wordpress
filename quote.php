 <?php
/*
Plugin Name: Quote Kart Plugin
Plugin URI: quotekart.in
Description: A plugin to create quote posting functionality in wordpress	
Version: 1.0
Author: Mohammed Talha
Author URI: http://al-fikri.rhcloud.com
*/
 

 
 
 defined( 'ABSPATH' ) or die( 'No script kiddies please!' );
 

 
 
 function add_menu_icons_styles(){
 	?>
 
 <style>
 #adminmenu .menu-icon-events div.wp-menu-image:before {
   content: '\f145';
 }
 </style>
 
 <?php
 }
 add_action( 'admin_head', 'add_menu_icons_styles' );
 
 
 
 add_action( 'admin_menu', 'quote_kart_menu_page' );
 
 function quote_kart_menu_page(){
 	add_menu_page( 'Quotes', 'Quotes', 'manage_options', 'quotepage', 'quote_kart_menu_page_content', '', 2 );
 }
 
 function quote_kart_menu_page_content(){
 	echo "Admin Page Test";
 }
 
 
 
function quote_html() {
	
	echo '<p><button>Add new item</button></p>';
	
	
    echo '<form action="' . esc_url( $_SERVER['REQUEST_URI'] ) . '" method="post">';
    echo '<p>';
    echo 'Your Name (required) <br />';
    echo '<input type="text" name="cf-name" pattern="[a-zA-Z0-9 ]+" value="' . ( isset( $_POST["cf-name"] ) ? esc_attr( $_POST["cf-name"] ) : '' ) . '" size="40" />';
    echo '</p>';

    echo '<p><input type="submit" name="cf-submitted" value="Submit Your Quote"/></p>';
    echo '</form>';
}

 


function quote_shortcode() {
	quote_html();
}

add_shortcode( 'sitepoint_contact_form', 'quote_shortcode' );
 
?>


 
 