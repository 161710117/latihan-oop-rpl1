<?php

require_once 'orangg.php';

$a = new orang('Laela','Bandung','XI RPL 1','Pacaran');
echo "Namanya ...".$a->get_nama();
echo "<br />";
echo "Tempat Lahir ...".$a->get_tempatlahir();
echo "<br />";
echo "Kelas ...".$a->get_kelas();
echo "<br />";
echo "Status ...".$a->get_status();
echo "<br />";
?>