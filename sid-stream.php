<?php
/**
 * Template Name: SID - Sensors Stream
 */

get_header();

// YOUR CUSTOM PHP GOES HERE
$ini = parse_ini_file("ip.ini");

echo "</br></br>";
echo "<center>  <h1>Infra-red Image Stream </center> ";
echo "<center> <img id=\"video\" src=\"http://".$ini['ip'].":8181/stream?topic=/camera/ir/image\" align=\"middle\"></center>";
/*
echo "<center> <img id=\"video\" src=\"http://".$ini['ip'].":8181/stream?topic=/camera/depth/image\" align=\"middle\"></center>";
echo "<center> <img id=\"video\" src=\"http://".$ini['ip'].":8181/stream?topic=/camera/depth/image_raw\" align=\"middle\"></center>";
*/
echo "</br></br>";
/*
$command = escapeshellcmd('/var/www/html/wordpress/wp-content/themes/evolve/test.py');
$output = shell_exec($command);
echo $output;
*/

get_footer();
?>
