<?php

$nama=$_POST['nama'];
$number=$_POST['number'];
$email=$_POST['email']
$data=$nama.",".$number.",".$email.;


$file="file.csv";


file_put_contents($file, $data . PHP_EOL, FILE_APPEND);
print "<h1 align=center>Terimakasih sudah mencatatkan kehadirans!</h1>";

?>
<html>
<head>   
</head>

<body>
<h1>
<a href="submit.html">Silakan Kembali untuk memulai praktikum</a> 
</h1>    
</body>




</html>