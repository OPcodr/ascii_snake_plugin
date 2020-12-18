<?php 
include('/var/www/owenpalmer.com/htdocs/wp-load.php');
global $wpdb;
$value = $_POST['number'] ?: false;

// $finalvalue = [
//     'start' => $_POST['number'],
// ];

$dbstuff = $wpdb->get_results('DELETE FROM wp_owen_test WHERE id=1');

// echo $finalvalue;
echo json_encode($dbstuff);

?>
