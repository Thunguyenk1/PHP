<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BT1637</title>
</head>
<body>
<?php
	$f0 = $f1 = 1;
	$num = 10;

	echo "<h3>Day Fibonaci: </h3><br/>";
	echo "$f0 $f1";
	for ($i=0; $i < $num - 2; $i++) {
		$fn = $f0 + $f1;
		echo " $fn";
		$f0 = $f1;
		$f1 = $fn;
	}

    //De quy khong nho.
	$count = 0;
	function fibonaci($n) {
		if($n == 0 || $n == 1) return 1;
		global $count;
		$count++;
		return fibonaci($n - 1) + fibonaci($n - 2);
	}
    echo "<h3>Day Fibonaci de quy khong nho: </h3><br/>";
	for ($i=0; $i < $num; $i++) {
		$f = fibonaci($i);
		echo "$f ";
	}
	echo "<br/>count = $count<br/>";

    //B2: In day de quy co nho
	$data = [1, 1]; //fibonaci(0) = 1, fibonaci(1) = 1
	$count = 0;
	function fibonaci2($n) {
		global $count, $data;
		if(isset($data[$n])) return $data[$n];
		$count++;
		$s = fibonaci2($n - 1) + fibonaci2($n - 2);
		$data[$n] = $s;
		// echo "$n - $s<br/>";
		return $s;
	}
	// var_dump($data);
	echo "<h3>Day Fibonaci co nho:</h3><br/>";
	for ($i=0; $i < $num; $i++) {
		$f = fibonaci2($i);
		echo "$f ";
	}
	echo "<br/>count = $count<br/>";
?>
</body>
</html>