<?php
session_start();
include('Conn.php');

$User = $_POST['FromUser'];
$Text = $_POST['Answer'];
$Theme = $_POST['IDa'];
$date =  date("d/m/Y h:i:sa");
$stmt = $dbh->prepare("INSERT INTO apply (Apply_User,Apply_Text,Apply_Theme,Apply_Date) VALUES ('$User', '$Text','$Theme','$date')");
$stmt->execute();

 ?>
