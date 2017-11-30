<?php
session_start();
include 'Conn.php';


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
.TitleUnder{

  padding-top: 8%;
  padding-bottom:  1%;
  font-size: 50px;
  color: #2BBCDE;
}
.ContentUnder{

text-align: center;

    font-size: 20px;
}
main{
  text-align: center;
}
.Comment{

      padding-top:5%;
            padding-bottom:2%;
}
.form-group{
  padding-left:20%;
    padding-right:20%;
}
.Answer{

  border-style: groove;
}
.summary{
  width: 70%;
  text-align: left;
}
#AddAnswer{
  margin-bottom: 5%;
}
    </style>
    <?php $user = $_SESSION['user']; ?>
    <script>
    $( document ).ready(function() {
    $( "#AddAnswer" ).click(function() {

      var Answer = $('#comment').val();
      var FromUser = '<?php echo $user ;?>';
      var IDa = <?php echo $_GET['ID'] ;?>;
if(Answer != ''){

$('#comment').val('');
      $.ajax({
                 type: "POST",
                  data: {
                  Answer:Answer,FromUser: FromUser,IDa:IDa
                 },
                 url: "http://localhost/Forum/AddAnswer.php",
                 success: function(data){ location.reload();},
                 error: function(e){ alert("Пропуснал си нещо :)"); console.log("err");  }
       });
}

    });
    });

    </script>
    <body>
         <header>
            <div class="navbar navbar-default navbar-fixed-top text-uppercase">
                <div class="container">
                      <div class="navbar-header">
                          <a  href="Theme.php" class="navbar-brand">Forum</a>
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

<label class="TitleUnder" ><?php echo $_GET['title'] ?></label>
<br>
<label class="ContentUnder" ><?php echo $_GET['Content'] ?></label>
<div class="form-group">
  <div class="Comment">
    <label for="comment">Answer:</label>
    <textarea class="form-control" rows="7" id="comment"></textarea>
  </div>
  <button  type="submit" id="AddAnswer" class="btn btn-primary" >Add Answer</button>
</div>
<?php
$ID =  $_GET['ID'];
$stmt = $dbh->query("SELECT * FROM apply where Apply_Theme = $ID ORDER BY Apply_ID desc");
 while ($row = $stmt->fetch()) { ?>
<div class="form-group">
<div class="Answer">
  <table class="table table-filter">
    <tbody>
      <tr >
        <td id="{{roll.Theme_ID}}">
          <div class="media">

            <div class="media-body">
              <span class="media-meta pull-right"><?php echo $row['Apply_Date']; ?></span>
              <h4 class="title" >
                <span class="pull-right pagado"><?php echo $row['Apply_User']; ?></span>
              </h4>
                <p class="pull-left">
              <p class="summary"><?php echo $row['Apply_Text']; ?></p>
            </p>
            </div>
          </div>
        </td>

      </tr>

    </tbody>
  </table>
</div>
</div>
<?php } ?>
    </main>
         <footer>
             <div class="container modal-footer">
                 <p>&copy; 2017 - Lorem Impsum</p>
             </div>
        </footer>

    </body>
</html>
