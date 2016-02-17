<?php
	extract($_REQUEST);

	$array_values = explode("\n",$input_text); 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Lab 6 </title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.23.1" />
</head>

<body>
		
		<b><?php echo "Professor " . $instructor_lastname ?>'s Schedule</b><br/>	
		<?php 
		
		echo "<table border=1>";
		foreach($array_values as $entry){
			$entry_line_array = explode(",",$entry);
			$size = sizeof($entry_line_array);
			
			
			echo "<tr>";
			if (-1 < strpos($entry,$instructor_lastname)){	
				for($i = 0; $i <= $size-1; $i++){
						
						echo "<td>".$entry_line_array[$i]."</td>";
					
				}
			}
			echo "</tr>";
		}
		echo "</table>";
		
		echo "$entry_line_array[3] <br/>";
		$t = substr($entry_line_array[3],-2);
		echo "$t <br/>";
		if ($t == "am"){
			echo "morning";
			
		}
		else if ($t == "pm"){
			echo "night";
		}
		
		
		
		?>
		
		
</body>

</html>
