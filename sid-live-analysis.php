<?php
/**
 * Template Name: SID - Live Analysis
 */

get_header();

// YOUR CUSTOM PHP GOES HERE

$ini = parse_ini_file("ip.ini");

echo "</br></br>";

echo "<center> <img id=\"video\" src=\"http://".$ini['ip'].":8181/stream?topic=/site_violation_detection/image_raw\" align=\"middle\"></center>";

echo "</br></br>";

get_footer();
?>
