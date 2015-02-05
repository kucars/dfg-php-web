<?php
/**
 * Template Name: SID - Mission
 */

get_header();

// YOUR CUSTOM PHP GOES HERE

$ini = parse_ini_file("ip.ini");

echo "</br></br>";
echo "<div class=\"container_16 clearfix\">";
echo "<table>
  <tr>
    <td align=\"center\" style=\"text-align:center\" >
      <b>Way Points </b>
    </td>
    <td align=\"center\" style=\"text-align:center\">
    <b>Map<b/>
    </td>
  </tr>
  <tr>
    <td align=\"center\" style=\"text-align:center\"> 
      <select name=\"waypoint\" id=\"userID\" size=\"7\">
	<option>1- Home </option>
	<option>2- Take-off Location </option>
	<option>3- waypoint 1 </option>
	<option>4- waypoint 2 </option>
	<option>5- waypoint 3 </option>
	<option>6- waypoint 4 </option>
	<option>7- waypoint 5 </option>
	<option>8- waypoint 6 </option>
	<option>9- Landing Location </option>
      </select>
    </td>
    <td><center> <img  src=\"wp-content/themes/dfg-php-web/snapshot2.png\" align=\"middle\"></center></td>
  </tr>
  <tr>
    <td colspan=\"2\" align=\"center\" style=\"text-align:center\">
     </br>
     <button type=\"button\">Start Inspection Mission</button> 
     </br>
    </td>
  </tr>
</table> ";
echo "</div>";

echo "</br></br>";

/*
$command = escapeshellcmd('/var/www/html/wordpress/wp-content/themes/evolve/test.py');
$output = shell_exec($command);
echo $output;
*/

get_footer();
?>
