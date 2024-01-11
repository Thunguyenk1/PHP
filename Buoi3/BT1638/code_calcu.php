<?php
$a=$b=$c=0;
$cal="";
function calcu($a,$b,$cal) {
	if($cal=='+') return $a+$b;
	if($cal=='-') return $a-$b;
	if($cal=='x') return $a*$b;
	if($cal=='÷') return $a/$b;
	if($cal=='%') return $a%$b;
  	if($cal=='=') return 0;
}
if (!empty($_POST))
{
	// if(empty($a)){
	// 		$c=$_POST['values'];
	// 		$a=floatval($_POST['values']);
	// 	$cal=$_POST['values'][strlen($_POST['values'])-1];
	// 	var_dump($_val);
	// 	var_dump($_POST['values']);
	// }
	
	// else
	{
		$b=floatval($_POST['values']);
		$a=floatval($_POST['oldValues']);
		$cal=$_POST['oldValues'][strlen($_POST['oldValues'])-1];
		$_val=calcu($a,$b,$cal);
		if($_val=="NULL") $_val=0;
		echo "<script type=\"text/javascript\">
				var vals=$_val;
			</script>";
		// var_dump($_POST['oldValues'][strlen($_POST['oldValues'])-1]);
		// var_dump($a);
		// var_dump($b);
		// var_dump($_val);
		// var_dump(calcu($a,$b,$cal));
		//var_dump($_POST['values']);
		//echo "ok ok";
		
		//$cal=$_POST['values'][strlen($_POST['values'])-1];
	}
}
?>