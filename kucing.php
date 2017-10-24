<?php

class kucing{
	public $warna = 'putih';
	public $suara = 'meoongg';
	public $mata = 'hitam';

public function warnanya(){
	echo $this->warna;
}
public function suaranya(){
	return $this->suara;
}
public function matanya(){
	return $this->mata;
}
}

$kucing = new kucing();
  
// set property
$kucing->warna="putih";
$kucing->suara="meoongg";
$kucing->mata='hitam';
  
// tampilkan property
echo $kucing->warna;
echo "<br />";
echo $kucing->suara;
echo "<br />";
echo $kucing->mata;
echo "<br />";
?>