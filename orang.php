<?php
class ila {
	var $Nama;
	var $Kelas;
	var $Alamat;
	var $Tempat_tanggal_lahir;
	var $Jenis_kelamin;
}
$biodata_ila=new ila();

$biodata_ila->Nama="Ila";
$biodata_ila->Kelas="8";
$biodata_ila->Alamat="Jl.Citamiang";
$biodata_ila->Tempat_tanggal_lahir="Bandung,1 Juni 2003";
$biodata_ila->Jenis_kelamin="Perempuan";

echo $biodata_ila->Nama;
echo "<br />";
echo $biodata_ila->Kelas;
echo "<br />";
echo $biodata_ila->Alamat;
echo "<br />";
echo $biodata_ila->Tempat_tanggal_lahir;
echo "<br />";
echo $biodata_ila->Jenis_kelamin;
echo "<br />";
?>