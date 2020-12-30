<?php 
include('/var/www/owenpalmer.com/htdocs/wp-load.php');
global $wpdb;
$number = $_POST['scorestoload'];


$load = $wpdb->get_results(
    $wpdb->prepare(
        "SELECT * FROM wp_snake ORDER BY apples DESC LIMIT %d", 
        $number)
);

wp_send_json($load);

?>
