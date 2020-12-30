<?php 
include('/var/www/owenpalmer.com/htdocs/wp-load.php');
global $wpdb;
$nickname = $_POST['nickname'];
$score = $_POST['score'];

$wpdb->insert(
    'wp_snake',
    array(
        'name' => $nickname,
        'apples' => $score
    )
);

?>
