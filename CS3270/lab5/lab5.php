<?php
	extract($_REQUEST);
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Lab 5</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.23.1" />
</head>

<body>
	 <table style="width:100%">
		 <tr>
			<td align = "center">GMT <?php echo $timezone1?></td>
			<td align = "center">GMT <?php echo $timezone2?></td>
			<td align = "center">GMT 2</td>
		 </tr>
		 <tr>
			<?php 
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
				
			?>
		 
		 
		 </tr>
		 
	</table> 



	
</body>

</html>
