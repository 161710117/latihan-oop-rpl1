<?php

class hp{
	public $warna = 'hitam';
	public $merk = 'samsung';
	public $harga = '1.000.000';

}

$hp = new hp;

echo "warna hp : " .$hp->warna;
echo "<br />";
echo "merk hp : " .$hp->merk;
echo "<br />";
echo "harga hp : " .$hp->harga;
?>