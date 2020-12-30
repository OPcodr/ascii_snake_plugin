<?php 
include('/var/www/owenpalmer.com/htdocs/wp-load.php');
global $wpdb;
$value = $_POST['input'];

// $finalvalue = [
//     'start' => $_POST['number'],
// ];

$dbstuff = $wpdb->get_results(
    $wpdb->prepare(
        "INSERT INTO wp_snake (name) VALUES (%s)",
        $value
    )
);

// echo $finalvalue;
echo json_encode($dbstuff);

?>
