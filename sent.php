
<?php
$nom=$_POST['nom'];
$email=$_POST['email'];
$message=$_POST['message'];
mail("diagne.papeibrahima@gmail.com",$email,$nom,$message);
header("location:index.html?s=ok");
?>

