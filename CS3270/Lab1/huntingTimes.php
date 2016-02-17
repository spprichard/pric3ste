<?php
/*
 * huntingTimes.php
 * 
 * Copyright 2016 Steven Prichard <pric3ste@HS104L20>
 * 
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
 * MA 02110-1301, USA.
 * 
 * 
 */

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Hunting Times</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.23.1" />
</head>

<body>
	
	<h1>When should Marty hunt?</h1>
	

	<?php
	 /* calculate the sunrise time for Lisbon, Portugal
	 Latitude: 47.4736 North
	 Longitude: 94.8803 West
	 Zenith ~= 90
	 timezone: GMT -06
	 */
	  date_default_timezone_set('America/Chicago');
	  //print "Today is ";
	  //print date("D, M j G:i:s T Y");
	  print "<br />Current Time is: ";
	  print date("g:i A");
	  
	  //print "Sunrei"
	  //print date_sunrise( time(), SUNFUNCS_RET_STRING,47.4736,94.8803,90,-06);
	  
	  print "<br />Sunrise time : "; 
	  print date("g: i A" , date_sunrise(time(),SUNFUNCS_RET_TIMESTAMP, 47.4736, -94.8803, 90, -06));
	  print "<br /> Start Hunting at: ";
	  print date("g:i A",date_sunrise(time(), SUNFUNCS_RET_TIMESTAMP, 47.4736, -94.8803, 90, -06)-1800);
	  print "<br/> Sunset Time: ";
	  print date("g:i A" , date_sunset(time(), SUNFUNCS_RET_TIMESTAMP, 47.4736, -94.8803, 90, -6));
	  print "<br/> Stop hunting at: ";
	  print date("g:i A" , date_sunset(time(), SUNFUNCS_RET_TIMESTAMP, 47.4736, -94.8803, 90, -6)+1800);
	  ?>
	
</body>

</html>
