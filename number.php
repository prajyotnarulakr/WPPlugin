<?php
/*
Plugin Name:	Number Display
Version :		0.1.0
Description:	Display a number on page
Author:			Prajyot Narulkar
*/
/*add_action('admin_notices','number_plugin_activated');
function number_plugin_activated()
{
	?>
	<div class="notice notice-success">
	<p>Number plugin activated</p>
	</div>
	<?php
}*/	
add_action('admin_menu','my_admin_menu');
function my_admin_menu()
{
	add_menu_page('Number Plugin','Number Settings','manage_options','number_setting_page','mt_setting_page');
	add_submenu_page('number_setting_page','Page title','Sub-menu title','manage_options','child-submenu-hanble','my_magic_function');
}
/*function number_admin_page()
{
	echo "This is where we will edit the variable";
}*/
function mt_setting_page()
{
	echo "<h2>" . __('Number Settings','menu-test')."</h2>";
	include_once('number_setting_page.php');
} 
?>
<?php
function display_function() {
   echo "<div style='color: blue;
    font-size: 30px;
    margin: 20px;'><p>Number entered through admin side is:".get_option('text')."</div>";
    //echo "<meta property='og:number' content="get_option('text')"/>"
}
add_action( 'wp_footer', 'display_function' );
?>