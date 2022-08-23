<?php
 /**
  * rega
  * 24
  * XII RPL 1
  */
 function volumebalok ($panjang,$lebar,$tinggi){
    return ($panjang*$lebar*$tinggi);
  }
  echo "1. volume balok dari P=15 L=12  T=8 adalah = ". volumebalok (15,12,8);
  echo "<br>";
  function volumekerucut ($jari2,$tinggi ) {
    return (1/3*M_1_PI*$jari2*$jari2*$tinggi);
  }
  echo "2. volume kerucut dari T=15 cm r=14 adalah = " .volumekerucut (15,14);




 ?>