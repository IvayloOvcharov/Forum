<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Forum</title>
        <link type="text/css" rel="stylesheet" href="resources/style.css" />
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    </head>

    <body>
         <header>
            <div class="navbar navbar-default navbar-fixed-top text-uppercase">
                <div class="container">
                      <div class="navbar-header">
                          <a href="index.php" class="navbar-brand">Forum</a>
                          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          </button>

                      </div>
                      <div class="navbar-collapse collapse">
                          <ul class="nav navbar-nav navbar-right">
                              <li><a href="login.php">Login</a></li>
                              <li><a href="register.php">Register</a></li>
                          </ul>
                </div>
            </div>
        </header>
        <main>
       <div class="container body-content">
              <form role="login" method="POST" action="theme.php" autocomplete="off" class="form-horizontal">
                <fieldset>
                    <legend>Register</legend>
                    <div class="form-group">
                    <label class="col-sm-4 control-label">Username</label>
                        <div class="col-sm-4">
                            <input type="text" name="username" class="form-control"  placeholder="UserName">
                              <input type="text" name="RegisterCheck" style="display:none;" value="MinavashPoTunkata">
                        </div>
                    </div>
                    <div class="form-group">
                    <label class="col-sm-4 control-label">Email</label>
                        <div class="col-sm-4">
                            <input type="text" name="email" class="form-control" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group">
                    <label class="col-sm-4 control-label">Password</label>
                        <div class="col-sm-6">
                             <input type="password" name="password" class="form-control" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group">
                    <label class="col-sm-4 control-label">Comirm password</label>
                        <div class="col-sm-6">
                             <input type="password" name="password2" class="form-control" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-4 col-sm-offset-4">
                            <button  type="submit" class="btn btn-default">Register</button>

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
