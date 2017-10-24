<?php

class jamtangan{
	public $merk = 'LV';
	public $warna = 'Silver';
    public $harga = 150000;

}

$jamtangan = new jamtangan;

echo "merk jamtangan : " .$jamtangan->merk;
echo "<br />";
echo "warna jamtangan : " .$jamtangan->warna;
echo "<br />";
echo "harga jamtangan : " .$jamtangan->harga;

?>