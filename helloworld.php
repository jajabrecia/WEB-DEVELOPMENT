<html>
<head>
</head>
<body>
<?php 
	echo "Hello World";
	$x=5;
	$y=10;
	function myTest()
	{
		global $x,$y;
		$y=$x+$y;
	}
	myTest();
	echo $y;
?>

</body>
</html>