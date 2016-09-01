<?php session_start(); ?>

<!DOCTYPE html>
<html>
<body>

<?php

class tool{
	public $color;

	

	public  function setColor($col){
		$this->color=$col;
	}
}

$hummer= new tool();

$hummer->setColor("black");

echo $hummer->color;

$screwdriver = new tool();


$screwdriver->setColor("red");
echo $screwdriver->color;
echo $hummer->color;
?>

</body>
</html>