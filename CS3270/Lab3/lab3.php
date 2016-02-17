<?php
	extract($_REQUEST);
	$a = $timezone2 - $timezone1;
	$a = $a+$a_time+24;
	
	$b = $timezone3 - $timezone1;
	$c = $b + $a_time+24;
	
	$a2 = $a %24;
	$d = $c % 24;
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Lab 3</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.23.1" />
</head>

<body>
	<h1>Find Time For Marty To Actually Work</h1>
	At <?php echo $a_time . ":00" ?> in time zone GMT <?php echo $timezone1?> it is <br>
	-- <?php echo $a2 . ":00"?> in time zone GMT <?php echo $timezone2 ?>, and <br>
	-- <?php echo $d . ":00"?> in time zone GMT <?php echo $timezone3 ?>. <br>
	
</body>

</html>
