<!DOCTYPE html>
<html>
<head>
<title>Membuat Kalkulator Sederhana Dengan PHP </title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
if(isset($_POST['hitung'])){
$angka1 = $_POST['angka1'];
$angka2 = $_POST['angka2'];
$operasi = $_POST['operasi'];
switch ($operasi) {
case 'tambah':
$hasil = $angka1+$angka2;
break;
case 'kurang':
$hasil = $angka1-$angka2;
break;
case 'kali':
$hasil = $angka1*$angka2;
break;
case 'bagi':
$hasil = $angka1/$angka2;
break;
}
}
?>
<div class="kalkulator">
<h2 class="judul">KALKULATOR</h2>
<form method="post" action="index.php">
<input type="text" name="angka1" class="angka" autocomplete="off" placeholder="Masukkan Angka Pertama">
<input type="text" name="angka2" class="angka" autocomplete="off" placeholder="Masukkan Angka Kedua">
<select class="opt" name="operasi">
<option value="tambah">+</option>
<option value="kurang">-</option>
<option value="kali">x</option>
<option value="bagi">/</option>
</select>
<input type="submit" name="hitung" value="Hitung" class="tombol">
</form>
<?php if(isset($_POST['hitung'])){ ?>
<input type="text" value="<?php echo $hasil; ?>" class="angka">
<?php }else{ ?>
<input type="text" value="0" class="angka">
<?php } ?>
</div>
</body>
</html>