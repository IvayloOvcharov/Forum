<?php
session_start();
include 'Conn.php';
if(isset($_POST['RegisterCheck'])){
    if($_POST['RegisterCheck'] == ''){
        include 'CheckUse.php';
    }
    if($_POST['RegisterCheck'] == 'MinavashPoTunkata'){
        include 'Tunkata.php';
    }

}


if(isset($_POST['id'])){
  if($_POST['id'] == ''){
    include 'AddNewPost.php';
  }
  else{
    include 'EditPost.php';
  }
}

include 'FillThemeJson.php';

if(isset($_POST['id'])){
echo '<br>';
echo $_POST['id'];
}
 ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Forum</title>

                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

                <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.23/angular.min.js"></script>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

<script src="js/PullAngular.js"></script>
<script src="js/Editt.js"></script>


    </head>
    <style>
    /*    --------------------------------------------------
      :: General
      -------------------------------------------------- */
    body {
      font-family: 'Open Sans', sans-serif;
      color: #353535;
    }
    table{
       margin: 0px auto;
       float: none;
    }
    .content h1 {
      text-align: center;
    }
    .content .content-footer p {
      color: #6d6d6d;
        font-size: 12px;
        text-align: center;
    }
    .content .content-footer p a {
      color: inherit;
      font-weight: bold;
    }

    /*	--------------------------------------------------
      :: Table Filter
      -------------------------------------------------- */
    .panel {
      border: 1px solid #ddd;
      background-color: #fcfcfc;
    }
    .panel .btn-group {
      margin: 15px 0 30px;
    }
    .panel .btn-group .btn {
      transition: background-color .3s ease;
    }
    .table-filter {
      background-color: #fff;
      border-bottom: 1px solid #eee;
    }
    .table-filter tbody tr:hover {

      background-color: #eee;
    }
    td:nth-child(3){
        cursor: pointer;
    }

    .table-filter tbody tr td {
      padding: 10px;
      vertical-align: middle;
      border-top-color: #eee;
    }
    .table-filter tbody tr.selected td {
      background-color: #eee;
    }
    .table-filter tr td:first-child {
      width: 38px;
    }
    .table-filter tr td:nth-child(2) {
      width: 35px;
    }

    .table-filter .star {
      color: #ccc;
      text-align: center;
      display: block;
    }
    .table-filter .star.star-checked {
      color: #F0AD4E;
    }
    .table-filter .star:hover {
      color: #ccc;
    }
    .table-filter .star.star-checked:hover {
      color: #F0AD4E;
    }
    .table-filter .img-circle {
      width: 35px;
    }
    .table-filter .media-body {
        display: block;
        /* Had to use this style to force the div to expand (wasn't necessary with my bootstrap version 3.3.6) */
    }
    .table-filter .media-meta {
      font-size: 11px;
      color: #999;
    }
    .table-filter .media .title {
      color: #2BBCDE;
      font-size: 14px;
      font-weight: bold;
      line-height: normal;
      margin: 0;
    }
    .table-filter .media .title span {
      font-size: .8em;
      margin-right: 20px;
    }
    .table-filter .media .title span.pagado {
      color: #5cb85c;
    }
    .table-filter .media .title span.pendiente {
      color: #f0ad4e;
    }
    .table-filter .media .title span.cancelado {
      color: #d9534f;
    }
    .table-filter .media .summary {
      font-size: 14px;
    }
    .content{
      padding-top:10%;
    }
    #imaginary_container{
    margin-bottom:3%; /* Don't copy this */
}
.stylish-input-group .input-group-addon{
    background: white !important;
}
.stylish-input-group .form-control{
	border-right:0;
	box-shadow:0 0 0;
	border-color:#ccc;
}
.stylish-input-group button{
    border:0;
    background:transparent;
}
#edit{
  font-size: 60%;
}

    </style>
    <?php $user = $_SESSION['user']; ?>
    <body>
         <header>
            <div class="navbar navbar-default navbar-fixed-top text-uppercase">
                <div class="container">
                      <div class="navbar-header">
                          <a href="Theme.php" class="navbar-brand">Forum</a>
                          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          </button>

                      </div>
                      <div class="navbar-collapse collapse">
                          <ul class="nav navbar-nav navbar-right">
                              <li><a>Welcome (<?php echo $_SESSION['user']; ?>)</a></li>
                              <li><a href="logout.php">Logout</a></li>
                          </ul>
                </div>
            </div>
        </header>
    <main>

      <div class="container" ng-app="sortApp" ng-controller="mainController">
        <div class="row">

          <section class="content">
            <div class="col-md-10 col-md-offset-1">
              <div class="panel panel-default">
                <div class="panel-body">
                  <div id="imaginary_container">
                    <div class="input-group stylish-input-group">
                        <input type="text" class="form-control"  placeholder="Search" ng-model="search">
                        <span class="input-group-addon">
                            <button type="submit">
                                <span class="glyphicon glyphicon-search"></span>
                            </button>
                        </span>
                    </div>
                </div>
                <div class="pull-right">
                <div class="btn-group">
                      <form  method="POST" action="createnewpost.php" autocomplete="off" class="form-horizontal">
                  <button  type="submit" class="btn btn-primary" >Add Subject</button>
                </form>
                </div>
              </div>
              <div class="pull-left">
                  <label>Sort By: </label>
              <div class="btn-group">

                <button type="button" class="btn btn-primary btn-filter" ng-click="sortType = 'Theme_Name'; sortReverse = !sortReverse">Title</button>
                <button type="button" class="btn btn-primary btn-filter" ng-click="sortType = 'Theme_Date'; sortReverse = !sortReverse">Date</button>
                  <button type="button" class="btn btn-primary btn-filter" ng-click="sortType = 'Theme_User'; sortReverse = !sortReverse">User</button>

              </div>
            </div>
                  <div class="table-container">
                    <table class="table table-filter">
                      <tbody>




                        <tr ng-repeat="roll in sushi | orderBy:sortType:sortReverse | filter:search">

                          <td>
                            <a ng-if="roll.Theme_User == '<?php echo $user; ?>'" class="btn btn-info btn-lg" id="edit{{roll.Theme_ID}}">
                               <span class="glyphicon glyphicon-pencil"></span>
                             </a>
                          </td>
                          <td>
                            <a href="javascript:;" class="star">
                              <i class="glyphicon glyphicon-star"></i>
                            </a>
                          </td>
                          <td  id="{{roll.Theme_ID}}">
                            <div class="media">
                              <a href="#" class="pull-left">
                                <img src="images/128.jpg" class="img-circle">
                              </a>
                              <div class="media-body">
                                <span class="media-meta pull-right">{{ roll.Theme_Date }}</span>
                                <h4 class="title" >
                                <div class="TitleName" id="Title{{roll.Theme_ID}}">{{ roll.Theme_Name }}</div>
                                  <span class="pull-right pagado">{{ roll.Theme_User }}</span>
                                </h4>
                                <p class="summary">{{ roll.Theme_Comment | limitTo: 40 }}...</p>
                                <div style= "display:none" id="Comment{{roll.Theme_ID}}" class="summary">{{ roll.Theme_Comment}}</div>
                              </div>
                            </div>
                          </td>

                        </tr>





                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="content-footer">
                <p>
                  Page © - 2017 <br>
                  Powered By <a href="https://www.facebook.com" target="_blank">Lorem</a>
                </p>
              </div>
            </div>
          </section>

        </div>
      </div>
    </main>
         <footer>
             <div class="container modal-footer">
                 <p>&copy; 2017 - Lorem Impsum</p>
             </div>
        </footer>

    </body>
</html>
