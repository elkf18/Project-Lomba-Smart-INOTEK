<?php
	function rupiah($harga){
		$hasil = "Rp " . number_format($harga, '2',',','.');
		return $hasil;
	}

?>