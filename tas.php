<?php

class tas{
	public $merk = 'Channel';
	public $warna = 'Coklat';
    public $harga = 500.000;

}

$tas = new tas;

echo "merk tas : " .$tas->merk;
echo "<br />";
echo "warna tas : " .$tas->warna;
echo "<br />";
echo "harga tas : " .$tas->harga;

?>