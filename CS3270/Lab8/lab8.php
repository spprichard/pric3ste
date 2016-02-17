<?php
  extract($_REQUEST);
  if ( isset($_POST['submit'])){ // Was the form submitted?
	
	
	echo "<body>
	 <table style='width:100%'>
		 <tr>
			<td align = 'center'>GMT  $timezone1</td>
			<td align = 'center'>GMT  $timezone2</td>
			<td align = 'center'>GMT  $timezone3</td><br>
		 </tr>
		 <tr>";
			$am = "am";
			$pm = "pm";
			$time_diff1 = $timezone2 - $timezone1;
			$time_diff2 = $timezone3 - $timezone1;
				for( $i=0; $i <= 23; $i++){
					//$temp = "$i";
					$a = $time_diff1 + $i + 24;
					$a = $a % 24;
					
					$b = $time_diff2 + $i +24;
					$b = $b %24;
					if ($i == 0 ){
						//12:00 am
						echo "<tr><td align = 'center'>12:00 $am";
					}
					else if ($i == 12){
						echo "<tr><td align = 'center'>12:00 $pm</td>";
					}
					else if ($i >= 13){
						$val = $i - 12;
						echo "<tr><td align = 'center'>$val:00 $pm</td>";  
					}
					else{
						echo "<tr><td align = 'center'>$i:00 $am</td>";
					} 
					//Col 2 
					if ($a == 0 ){
						//12:00 am
						echo "<td align = 'center'>12:00 $am</td>";
					}
					else if ($a == 12){
						echo "<td align = 'center'>12:00 $pm</td>";
					}
					else if ($a >= 13){
						$val = $a - 12;
						echo "<td align = 'center'>$val:00 $pm</td>";  
					}
					else{
						echo "<td align = 'center'>$a:00 $am</td>";
					} 
					//Col 3
					if ($b == 0 ){
						//12:00 am
						echo "<td align = 'center'>12:00 $am</td></tr>";
					}
					else if ($b == 12){
						echo "<td align = 'center'>12:00 $pm</td></tr>";
					}
					else if ($b >= 13){
						$val = $b - 12;
						echo "<td align = 'center'>$val:00 $pm</td></tr>";  
					}
					else{
						echo "<td align = 'center'>$b:00 $am</td></tr>";
					}	
				}
	echo "</tr>
			</table> 
		</body>
	</html>";
}

else{?>
    <html><head><title>Lab 8</title></head>
		<body bgcolor='lightblue'>
				<form action= "<?php echo $_SERVER['PHP_SELF']; ?>" method = "POST">
				
				Enter Timezone 1: <input tpye = 'text' name ='timezone1'><br>
				Enter Timezone 2: <input tpye = 'text' name ='timezone2'><br>
				Enter Timezone 3: <input tpye = 'text' name ='timezone3'><br>
	
				<input type = 'submit' value = 'Submit' name = 'submit'>
			</form>
		</body>
	</html> 
<?php } ?>
 
