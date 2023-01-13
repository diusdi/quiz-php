<?php
 
	for ($i = 1; $i <=100 ; $i++) {
	  if (($i % 3 == 0) && ($i % 5 == 0)){
	    echo luasPersegiPanjang($i / 3, $i/5).PHP_EOL;
	  } else if($i % 3 == 0) {
	    echo luasLingkaran($i / 3).PHP_EOL;
	  } else if($i % 5 == 0) {
	    echo kelilingLingkaran($i/5).PHP_EOL;
	  } else{
	    echo $i.PHP_EOL;
	  }
	} 
	
	function luasLingkaran($jariJari){
	  $pi = 3.14;
	  return $pi*$jariJari*$jariJari;
	}
	
	function kelilingLingkaran($jariJari){
	  $pi = 3.14;
	  return 2*$pi*$jariJari;
	}
	function luasPersegiPanjang($panjang, $lebar){
	  return $panjang * $lebar;
	}
?>
