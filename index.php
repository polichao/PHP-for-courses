<h1> MD5 cracker </h1>
<div id="debug_output"> 
<pre> Debug Output:

<?php
$answer = 'Not found';
$found = false;
$counts = 0;
$numbers = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
if (isset($_GET['md5'])){
	$time_in = microtime(true);
$hash = $_GET['md5'];
foreach ($numbers as $i){
	if ($found){break;}
	foreach ($numbers as $j){
		if ($found){break;}
		foreach ($numbers as $k){
			if ($found){break;}
			foreach ($numbers as $l){
				$check_pin = $i.$j.$k.$l;
				$check = hash('md5', $check_pin);
				$counts++;
				if($counts <= 15){
				echo $check."  ".$check_pin."\n";}
				if ($check == $hash){
					$found = true;
					$answer = $check_pin;
					break;
				}
			}
		}
	} 	
}
$time_out = microtime(true);
}
echo "\nEllapsed time: ".($time_out-$time_in)."\n";
?>
</pre>
<div id="answer"> PIN:
<?php
echo $answer;
?>
</div>
<br>
<form>
<input type="text" name="md5" size="40"/>
<input type="submit" value="Crack" />
</form>
