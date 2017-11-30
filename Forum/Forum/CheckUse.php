<?php
$stmt = $dbh->query('SELECT * FROM register');

if(isset($_POST['User'])){
  $_SESSION['user'] = $_POST['User'];
}
if(isset($_POST['Password'])){
 $password = $_POST['Password'];

}
$check = 0;

while ($row = $stmt->fetch()) {
    if ($row['User_Name'] == $_SESSION['user'] && $row['User_Password'] ==  $password) {
        $check = 1;
    }
}


if($check == 0){
     header("Location: login.php");
}
