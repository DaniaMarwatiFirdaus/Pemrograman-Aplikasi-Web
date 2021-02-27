<!DOCTYPE html>
<html>
<head>
<title>Pemakaian Operator Aritmatika dalam PHP</title>
</head>
<body>
<style>
body {
    background-color: #1e6091;
}
</style>
<form method="post" action="Oparitmatika.php">
<h2><div align="center">Operator Aritmatika</div></h2>
<div align="center">
<table width="50%" border="1">
<tr>
<td width="30%">
<div align="center">Operand Kiri</div>
</td>
<td width="20%">
<div align="center">Operator</div>
</td>
<td width="30%">
<div align="center">Operand Kanan</div>
</td>
<td>
<div align="center"&nbsp;</div>
</td>
</tr>
<tr>
<td>
<div align="center">
<input type="text" name="operand1" size="10">
</div>
</td>
<td>
<div align="center">
<select name ="operator">
<option value ="+">+</option>
<option value ="-">-</option>
<option value ="*">*</option>
<option value ="/">/</option>
</select>
</div>
</td>
<td>
<div align="center">
<input type="text" name="operand2" size="10">
</div>
</td>
<td>
<div align="center">
<input type="submit" name="hitung" value="hitung">
</div>
</td>
</tr>
</table>
</div>
</form>
</body>
</html>