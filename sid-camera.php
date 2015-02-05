<?php
/**
 * Template Name: SID - Camera
 */

get_header();

// YOUR CUSTOM PHP GOES HERE
$ini = parse_ini_file("ip.ini");

echo "</br></br>";
echo "<center> <img id=\"video\" src=\"http://".$ini['ip'].":8181/stream?topic=/web_cam/image_raw\" align=\"middle\"></center>";
echo "</br></br>";

/*
$command = escapeshellcmd('/var/www/html/wordpress/wp-content/themes/evolve/test.py');
$output = shell_exec($command);
echo $output;
*/

get_footer();
?>
