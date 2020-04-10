<?php
function price($name){
	$details = array ('abc'=>100,'xyz'=>200);
	foreach ($detaisl as $n => $p) {
		if($name==$n){
			$price=$p;
		}
		# code...
		return $price;
	}
}
?>