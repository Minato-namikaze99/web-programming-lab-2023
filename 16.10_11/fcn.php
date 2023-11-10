<!DOCTYPE html>
<html lang = "en">
<head>
        <title>Test</title>
</head>

<body>
 <h1> <?= "Test..." ?></h1>
<?php
	function add($a,$b)
	{
		return ($a+$b);
	}
?>

	<h1><?= "The summation is :".add(4,5);?></h1> 
</body>
</html>

