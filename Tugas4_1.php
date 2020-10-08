<?php
	$beli = 8000;
	$jual = 7500;
	$untung = 300;
	$kambing = round(($beli-$jual)/$untung);

	echo "Harga Beli =  $beli <br>
		  Harga Jual =  $jual <br>
	      Keuntungan =  $untung <br>
	      Berapa Jumlah kambing yang dibeli? Jawaban:  $kambing  ekor";
?>
