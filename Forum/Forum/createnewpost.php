<?php

echo '<br>';
echo '<br>';
echo '<br>';

echo '<br>';
$title = '';
$content = '';
$id = '';

$_SESSION['Edit'] = 2;
if(isset($_GET['title']) && isset($_GET['Content']))
{
$title = $_GET['title'];
$content = $_GET['Content'];
$id = $_GET['ID'];
$_SESSION['Edit'] = 1;
}

 ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Forum</title>
<link type="text/css" rel="stylesheet" href="resources/style.css" />
                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

                        <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.23/angular.min.js"></script>

                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">

                <!-- Optional theme -->
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">

                <!-- Latest compiled and minified JavaScript -->
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    </head>
    <body>
      <script>
      $( document ).ready(function() {
        $( "#Cancel" ).click(function() {
          window.location = "http://localhost/Forum/Theme.php";
  });
      })
      </script>
        <header>
            <div class="navbar navbar-default navbar-fixed-top text-uppercase">
                <div class="container">
                      <div class="navbar-header">
                          <a href="Theme.php"  class="navbar-brand">Forum</a>
                          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                        </button>

                      </div>
                      <div class="navbar-collapse collapse">
                          <ul class="nav navbar-nav navbar-right">
                               <li><a>Welcome(User)</a></li>
                              <li><a href="index.php">Logout</a></li>
                          </ul>
                </div>
            </div>
        </header>
        <main>
       <div class="container body-content span=8 offset=2">

                <form role="login" method="POST" action="Theme.php" autocomplete="off" class="form-horizontal">
                <fieldset>
                    <legend>New Post</legend>

                    <div class="form-group">
                    <label class="col-sm-4 control-label">Post Title</label>
                        <div class="col-sm-4">
                            <input type="text" name="title" class="form-control" id="postTitle" placeholder="Title" value="<?php echo $title; ?>">
                            <input type="text" name="id" style="display:none;" value="<?php echo $id; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                    <label class="col-sm-4 control-label">Content</label>
                        <div class="col-sm-6">
                            <textarea class="form-control"  name="content" id="postAuthor"  rows="5"><?php echo $content; ?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-4 col-sm-offset-4">
                            <a id="Cancel" class="btn btn-default">Cancel</a>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
        </main>
         <footer>
             <div class="container modal-footer">
                 <p>&copy; 2017 - Lorem ipsum</p>
             </div>
        </footer>

    </body>
</html>
