<?php

if(isset($_POST['title']) && isset($_POST['content'])){

$title = $_POST['title'];
$content = $_POST['content'];
$date = date("d/m/Y");
$user =  $_SESSION['user'];
$id = $_POST['id'];

if($title != '' && $content != ''){
  $stmt = $dbh->prepare("UPDATE theme SET Theme_Name = '$title', Theme_Comment = '$content' where theme_ID = $id ");
  $stmt->execute();
}
else{
  if (isset($_SERVER["HTTP_REFERER"])) {
          header("Location: " . $_SERVER["HTTP_REFERER"]);
      }
}




}
