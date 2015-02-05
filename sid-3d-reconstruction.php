<?php
/**
 * Template Name: SID - 3D Reconstruction
 */

get_header();

// YOUR CUSTOM PHP GOES HERE
$ini = parse_ini_file("ip.ini");

echo "</br></br>";
echo "<div class=\"container_16 clearfix\">";
echo "<center> 
 <video align=\"center\" width=\"320\" height=\"240\" controls>
  <source src=\"wp-content/themes/3d_images/movie.mp4\" type=\"video/mp4\">
</video> </center> ";

// Include the UberGallery class
include('resources/UberGallery.php');
// Initialize the UberGallery object
$gallery = new UberGallery();

// Initialize the gallery array
$galleryArray = $gallery->readImageDirectory('wp-content/themes/3d_images');

// Define theme path
if (!defined('THEMEPATH')) {
    define('THEMEPATH', $gallery->getThemePath());
}

// Set path to theme index
$themeIndex = $gallery->getThemePath(true) . '/index.php';

// Initialize the theme
if (file_exists($themeIndex)) {
    include($themeIndex);
} else {
    die('ERROR: Failed to initialize theme');
}
    
echo "</br></br>";
echo "</div>";
/*
$command = escapeshellcmd('/var/www/html/wordpress/wp-content/themes/evolve/test.py');
$output = shell_exec($command);
echo $output;
*/

get_footer();
?>
