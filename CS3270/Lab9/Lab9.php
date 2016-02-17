<?php
	extract($_REQUEST);
    //subject name from REQUEST Array
    $subject_name = $_REQUEST['dept'];
    //URL that website uses look to append dept name
    $url = "www.bemidjistate.edu/academic/schedule/2016/spring/all/";
    //URL with dept name appended
    $url_dept_name = $url . $subject_name;
	//$array_values = explode("\n",$input_text);
?>


<head>
	<title>Lab 9 </title>
</head>

<body>

		<b><?php echo "Professor " . $instructor_lastname ?>'s Schedule</b><br/>

        <!-- Take a look at whats in the REQUEST Array -->
        <?php print_r($_REQUEST);

        //Show what we have from the subject selection on the last page
        echo "<br>Dept Name:<b>  $subject_name </b></br>";
        //Show the url with dept name
        echo  "URL: <b>$url_dept_name </b><br>";?>



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
