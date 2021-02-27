<?php


//ambil isi form dn simpan ke variabel
$operand1 = $_REQUEST['operand1'];
$operand2 = $_REQUEST['operand2'];
$operator = $_REQUEST['operator'];

//rumus perhitungan
$perhitungan = $operand1 . $operator . $operand2;

eval ("\$hasil = $perhitungan;");

echo "hasil perhitungan : <b> $hasil </b>";


?>
<style>
body {
    background-color: #1e6091;
}
</style>