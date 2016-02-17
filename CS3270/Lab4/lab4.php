<?php
	extract($_GET);
	
	$whole_alpha = "abcdefghijklmnopqrstuvwxyz";
	$all_digits = "0123456789";
	
	$sub_str_cap = strtoupper(substr($whole_alpha,0,$num_uppercase));
	$sub_str_low = substr($whole_alpha,0,$num_lowercase);
	$sub_str_digits = substr($all_digits,0,$num_digits);
	
	$whole_string = $sub_str_cap.$sub_str_digits.$sub_str_low;
	
	$string_shuffled_1 = str_shuffle($whole_string);
	$string_shuffled_2 = str_shuffle($string_shuffled_1);
	$string_shuffled_3 = str_shuffle($string_shuffled_2);
	$string_shuffled_4 = str_shuffle($string_shuffled_3);
	$string_shuffled_5 = str_shuffle($string_shuffled_4);
	$string_shuffled_6 = str_shuffle($string_shuffled_5);
	$string_shuffled_7 = str_shuffle($string_shuffled_6);
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
	
	
	
	
	EVIL Password: <b><?php echo $string_shuffled_7 ?></b><br/>
	
</body>

</html>
