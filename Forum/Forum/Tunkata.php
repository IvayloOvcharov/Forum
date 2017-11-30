<?php

$check = 0;
$unique = 1;
$stmt = $dbh->query('SELECT * FROM register');

while ($row = $stmt->fetch()) {
    if ($row['User_Name'] == $_POST['username'] || $row['User_Email'] == $_POST['email']) {
       $unique = 0;
    }
}
if($unique == 1)
{
  if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email']))
  {
    if($_POST['username'] != '' && $_POST['email'] != '' && $_POST['password'] != '')
    {
      if($_POST['password'] == $_POST['password2'] )
      {
        if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
         {
          $check = 1;
          $_SESSION['user'] = $_POST['username'];
          $user = $_SESSION['user'];
          $email = $_POST['email'];
          $password = $_POST['password'];
          $stmt = $dbh->prepare("INSERT INTO register (User_Name,User_Password,User_Email) VALUES ('$user', '$password','$email' )");
          $stmt->execute();
          }

      }
    }
  }
}

if($check == 0)
{
     header("Location: register.php");
}

 ?>
