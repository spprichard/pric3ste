<?php
	
extract($_REQUEST);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Book Store Operating Costs</title>
	
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.23.1" />
</head>

<body>
	=======================================
	<h1>Book Store Operating Costs</h1>
	=======================================
		<br/>
		<br/>
		<b>Total Sales:</b> $<?php print $total_sales ?>
		<br/>
		<br/>
		<br/>
		<b>Expenses:</b> 
		<br/>
		<br/>
		Rent: $<?php print $rent_cost?> 
		<br/>
		<br/>
		Salary: $<?php print $salaries_cost?>
		<br/>
		<br/>
		Supplies: $<?php print $supply_cost?>
		<br/>
		<br/>
		<?php $total_expenses = $rent_cost + $salaries_cost + $supply_cost?>
		<b>Total:</b> $<?php print $total_expenses?>
		<br/>
		<br/>
		<br/>
		<?php $operating_income = $total_sales - $total_expenses?>
		<b>Operating Income:</b> $<?php print $operating_income?> 
		<br/>
		<br/>
		<b>Net Income:</b> $<?php print $operating_income * .6?>
		<br/>
		=======================================
		
</body>

</html>
