<style>
  body {
    background-color: #1e6091;
}
</style>
<?php
//apakah tombol cek sudah ditekan
if(isset($_POST["cek"])){

$nilai1= $_POST["nilai"];
if($nilai1==""){
  echo "<b><h1> Anda belum memasukkan nilai</h1></b>";
}elseif(!is_numeric($nilai1)){
  echo "<b><h1> ini bukan nilai angka</h1></b>";
}else{
  if($nilai1<=30){
    echo "<b><h1> Anda mendapatkan nilai huruf E</h1></b>";
  }elseif($nilai1<=50){
    echo "<b><h1> Anda mendapat nilai huruf D</h1></b>";
  }elseif($nilai1<=70){
    echo "<b><h1> Anda mendapat nilai huruf C</h1></b>";
  }elseif($nilai1<=85){
    echo "<b><h1> Anda mendapat nilai huruf AB</h1></b>";
  }else{
    echo "<b><h1> Anda mendapat nilai huruf A</h1></b>";
  }
}
}
?>
<html><head><title>Statemen IF</title>
</head>
<body>
<form action="" method="post">
<label for="nilai">Nilai</label>
<input type="text" name="nilai" id="nilai">
<button type="submit" name="cek">Cek</button>
</form>
</body>
</html>