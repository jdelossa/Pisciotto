<?php /*
Plugin Name: WP Office Hours
Description: Plugin is to show office hours, Admin can manage the office hours Weekly. widget and shortcode.

*/
 $wp_office_hours_css ="/**------ Outer div------ **/
div.oHours { float: left; margin-bottom: 5px; width: 100%; }
/**------ Inner Table------ **/
.oHours table { border:1px solid #CCCCCC; }
.oHours tr.grey { background-color: #F0F0F0;}
/** ------ day and time ------  **/
.oh_day { font-weight:bold; color:#333333;}
.oh_time { color:#444444; }
.oHours table td {  border-bottom:1px solid #CCCCCC; border-left:1px solid #CCCCCC; padding:2px;}";
function oHours_install() {
    global $wpdb;
	global $wp_office_hours_css;
	$my_hours = 'YToyOntzOjU6InN0YXJ0IjthOjc6e2k6MDtzOjc6Ijk6MDAgQU0iO2k6MTtzOjc6Ijk6MDAgQU0iO2k6MjtzOjc6Ijk6MDAgQU0iO2k6MztzOjc6Ijk6MDAgQU0iO2k6NDtzOjc6Ijk6MDAgQU0iO2k6NTtzOjY6IkNsb3NlZCI7aTo2O3M6NjoiQ2xvc2VkIjt9czozOiJlbmQiO2E6Nzp7aTowO3M6NzoiNTozMCBQTSI7aToxO3M6NzoiNTozMCBQTSI7aToyO3M6NzoiNTozMCBQTSI7aTozO3M6NzoiNTozMCBQTSI7aTo0O3M6NzoiNTozMCBQTSI7aTo1O3M6MDoiIjtpOjY7czowOiIiO319';
	
	add_option('wp_office_hours', $my_hours);
	add_option('wp_office_hours_css', $wp_office_hours_css);
}

$blogurl = get_option('siteurl');

add_action('admin_menu', 'mypluginMenu');
function mypluginMenu() { // Add a new submenu under settings
	add_menu_page('Office Hours', 'Office Hours', 'edit_pages', 'wp-office-hours', 'wpofficeHours');
}

register_activation_hook(__FILE__,'oHours_install');
add_shortcode('WPOFFICEHOURS', 'display_office_hours');  /* [officeHOURS] */
function myDays() {
	return $days = array("Monday","Tuesday", "Wednesday", "Thursday", "Friday","Saturday", "Sunday"); 
}
// office Hours Front End //
	function display_office_hours() {
		 $days = myDays();
		 $arr = unserialize(base64_decode(get_option('wp_office_hours'))); 
		  $wp_o_h_css = get_option('wp_office_hours_css');
		 ?>
		 <style type="text/css">
			<?php echo $wp_o_h_css; ?>	 
		</style>
		<div class="oHours">
			<table cellspacing="0" cellpadding="4" width="100%">
				<td></td>
				<th colspan="2"><h4>Glendale Office</h4></th>
				<th colspan="2"><h4>Mineola Office</h4></th>
				<?php foreach($days as $key => $val) { ?> 
				<tr <?php echo $key % 2 == 0?"":'class="grey"';?>>
					<td width="25%" class="oh_day"><?php echo $val;?></td>
					<td width="20%" class="oh_time">
						<?php echo $arr['start'][$key];?></td>
					<td class="oh_time">
						<?php echo $arr['end'][$key];?></td>
					<td width="20%" class="oh_time">
						<?php echo $arr['begin'][$key];?></td>
					<td class="oh_time">
						<?php echo $arr['finish'][$key];?></td>
				</tr><?php } ?>
			</table>
		</div>
	 <?php }
// END office Hours Front End //

// office Hours Back End //	 
	function wpofficeHours(){
	    $days = myDays();
	if($_POST) {
		if($_POST['wp_o_h_css']) { 
			if($_POST['oh-default']) {
				global $wp_office_hours_css;
				$officeCss = $wp_office_hours_css;
			} else {
				$officeCss = $_POST['wp_o_h_css'];
			}
			 update_option('wp_office_hours_css',  $officeCss);
		} else {
			$arryp['start'] =$_POST['start'];
			$arryp['end'] =$_POST['end'];
			$arryp['begin'] =$_POST['begin'];
			$arryp['finish'] =$_POST['finish'];
			update_option('wp_office_hours',  base64_encode(serialize($arryp)));
		}
			echo "<div class=\"alert\"><strong>Options updated</strong></div>";
	}
	$unsArr = get_option('wp_office_hours');
	 $arr = unserialize(base64_decode($unsArr)); 
	 ?>
<!--office Hours Back End -->	

 <style type="text/css">.oHours tr.grey { background-color: #F0F0F0;}
	.oHours table td { width:33%; border-bottom:1px solid #CCCCCC; padding:2px;}
	.oHours table { border:1px solid #CCCCCC;}
	.oHours table th {background:#F0F0F0; font-weight:bold;border:1px solid #CCCCCC; }
</style>

	<!--Office Hours-->
		<h2>Office Hours</h2>
		<form name="office" method="post" action="<?php bloginfo('wpurl') ?>/wp-admin/admin.php?page=wp-office-hours">
		<table style="border:1px solid #CCCCCC;" cellspacing="0" cellpadding="4" style="border-color:#cccccc;">
		<tr><td></td>
			<th><h3>Glendale Office</h3></th>
				<td></td>
			<th><h3>Mineola Office</h3></th>
		</tr>
		<tr><td><strong>Days</strong></td><td><strong>Start</strong></td><td><strong>End</strong></td>
		<td><strong>Start</strong></td><td><strong>End</strong></td></tr>
		
		<?php foreach($days as $key => $val) { ?>

		<tr>
			<td><?php echo $val;?></td>
			<!-- Office One -->
			<td><input type="text" name="start[<?php echo $key;?>]" value="<?php echo $arr['start'][$key];?>"></td>
			<td><input type="text" name="end[<?php echo $key;?>]" value="<?php echo $arr['end'][$key];?>"></td>

			<!-- Office Two -->
			<td><input type="text" name="begin[<?php echo $key1;?>]" value="<?php echo $arr['begin'][$key];?>"></td>
			<td><input type="text" name="finish[<?php echo $key1;?>]" value="<?php echo $arr['finish'][$key];?>"></td>
		</tr>

		<?php } ?>
		<tr><td></td><td colspan="2"><input type="submit" name="submit" value="Update"> </td></tr>
		</table>
		</form>
		<p>&nbsp;</p>
	<!--/Office Hours-->



<?php } 
