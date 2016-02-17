<?php
	extract($_GET);
	
	$whole_alpha = "abcdefghijklmnopqrstuvwxyz";
	$all_digits = "0123456789";
	
	$sub_str_cap = strtoupper(substr($whole_alpha,0,$num_uppercase));
	$sub_str_low = substr($whole_alpha,0,$num_lowercase);
	$sub_str_digits = substr($all_digits,0,$num_digits);
	
	$whole_string = $sub_str_cap.$sub_str_digits.$sub_str_low;
	
	function my_shufle(&$a_string,$numOfShuffles){
		for($i=0;$i<$numOfShuffles;$i++){
			$a_string = str_shuffle($a_string);
		}
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Evil Password Generator</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.23.1" />
</head>

<body>
	-------------------------------------------------------------------------------------<br/>
		<h1>YOUR EVIL PASSWORD</h1>
		
	-------------------------------------------------------------------------------------<br/>
	
	
	
	
	EVIL Password: <b><?php my_shufle($whole_string,7); echo $whole_string; ?></b><br/>
	
</body>

</html>
