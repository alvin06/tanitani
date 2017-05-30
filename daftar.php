<?php
    include "connect.php";
    error_reporting(E_PARSE);
    $id = $_SESSION['id'];
    if($id!=NULL)
      {?>
        <script>document.location.href='../page/postlogin.php';</script><?php
      }
    else
      {?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Admin Tokol DistroIT">
    <meta name="author" content="Hakko Bio Richard">
    <link rel="icon" href="../../favicon.ico">

    <title>Sign Up Tani-Tani.com</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
     <script src="dist/js/jquery-1.9.1.js"></script>
    <script src="dist/js/bootstrap.js"></script>

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/js/ie-emulation-modes-warning.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body background="img/back.jpg">

    <div class="container">
<!-- role="form" -->
      <center></canvas><form class="form-signin" method="post" action="inputprocessuser.php">
        <h2 class="form-signin-heading"><center><span class="glyphicon glyphicon-th-large"></span> Welcome User</center></h2>
        <h5 class="baru">Sign Up To User Tani-Tani.com</h5>
        <table cellpadding="10">
  <tr>
    <td><label for="user">Username </label></td>
    <td><input type="text" class="form-control" name="username" placeholder="Username" required id="user"></td>
    <br>
  </tr>
  <tr>
    <td><label for="full_name">Fullname </label></td>
    <td><input type="text" class="form-control" name="fullname" placeholder="Fullname" id="full_name" required></td>
  </tr>
  <tr>
    <td><label for="email">Email </label></td>
    <td>
    <input type="email" class="form-control" name="email" placeholder="Email" id="email" required>
    </td>
  </tr>
  <tr>
    <td><label for="no">Phone Number </label></td>
    <td><input type="text" class="form-control required-number" onkeypress='return event.charCode >= 48 && event.charCode <=57' name="phone" placeholder="Phone Number" id="no" minlength="12"></td>
  </tr>
  <tr>
    <td><label for="pass">Password </label></td>
    <td><input type="password" class="form-control" name="password" placeholder="Password" id="pass" required></td>
  </tr>
  <tr>
    <td><label for="sex">Gender </label></td>
    <td><input type="radio" name="sex" value="Male" id="sex" checked> Male     
    <input type="radio" name="sex" value="Female"> Female </td>
  </tr>
  <tr>
    <td>User Picture </td>
      <td><input type="file" name="pict" required></textarea></td>
  </tr>
  </table>
        <button class="btn btn-lg btn-danger btn-block" type="submit">Sign Up</button>
      </form>
        <center><p>Already Register? <a href="login.html">Log In</a></p></center>
      </center>
    </div> <!-- /container -->
    
    <!-- Modal Dialog Contact -->
<div class="modal fade" id="contact" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Contact Us</h4>
      </div>
      <div class="modal-body">
      Aplikasi ini masih dalam pengembangan, 
      dan masih dikembangkan oleh team Tani-Tani.com yang dapat di hubungi di 
      <table>
      <tr>
      <td>No Telepon</td> <td>:</td> <td>081354639063</td>
      </tr>
      <br />
      <tr>
      <td>E-mail</td><td>:</td> <td><<a href="https://mail.google.com/mail/u/0/?tab=wm#inbox">rioalrasyid97@gmail.com</a></td>
      </tr> 
      <br />
      </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- end dialog modal -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <br />
    <center><h5 class="form-signin">
		Copyright &copy; Tani-Tani.com 2017 
	</center>
  </body>
</html>
<?php
  }?>
