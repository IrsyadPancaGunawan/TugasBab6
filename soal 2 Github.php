<?php
function reverse($string){
	echo "Input : ".$string;
	$len=strlen($string);
	for($i=0; $i<$len/2; $i++){
		$tmp=$string[$i];
		$string[$i]=$string[$len-$i-1];
		$string[$len-$i-1]=$tmp;
	}
	echo "<br>Output : ".$string;
}
reverse("1 2 3 4")
?>