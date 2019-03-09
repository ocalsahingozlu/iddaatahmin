<!DOCTYPE HTML>
<?php
$vt_bilgiler = mysqli_connect("localhost","iddaatahmin", "123456","iddaatahmin" );
mysqli_set_charset($vt_bilgiler, "UTF8");

if(@mysqli_connect_errno($vt_bilgiler)){echo @mysqli_error(); die("Bağlantı başarısız");}else{echo "bağlantı başarılı";};

echo "<br>bravo başardın";

mysqli_close($vt_bilgiler);
?>