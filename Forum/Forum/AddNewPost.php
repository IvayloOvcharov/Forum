<?php

if(isset($_POST['title']) && isset($_POST['content'])){

$title = $_POST['title'];
$content = $_POST['content'];
$date = date("d/m/Y");
$user =  $_SESSION['user'];
$id = $_POST['id'];



if($title != '' && $content != ''){
  $stmt = $dbh->prepare("INSERT INTO theme (Theme_Name,Theme_Comment,Theme_Date,Theme_User) VALUES ('$title', '$content','$date', '$user' )");
  $stmt->execute();
}
else{
  if (isset($_SERVER["HTTP_REFERER"])) {
        header("Location: " . $_SERVER["HTTP_REFERER"]);
    }
}


}
