<!DOCTYPE html>
<html lang="en">
<head>
  <title>Check Order</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<style>
.container img{
	position:relative;
	margin-top:20%;
	width:100%:
	height:100%;
}
@font-face {
    font-family: helvetica;
    src: url(HelveticaNeueRegular.ttf);
	font-weight:bold;
	color:black;
}
a{
	font-family:helvetica;
}
input[type="file"] {
    display: none;
}
.custom-file-upload {
    display: inline-block;
    padding: 2px 20px;
    cursor: pointer;
}
label{
	font-weight:bold;
}
</style>
<script>
function check(){
	var x = document.forms["myform"]["usr1"].value;
	var y = document.forms["myform"]["pwd1"].value;
	if(x!=y){
		alert("Password Mismatch");
		return false;
	}
}
</script>
<body style="background-color:#f1f1f1;">

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" style="font-family:helvetica;cursor:pointer;">Enlighten</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Home</a></li>
        <li ><a href="orderPage.php">Order</a></li>
		<li class="active"><a href="#">View Order</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="#" data-toggle="modal" data-target="#myModal2"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Sign Up</h4>
      </div>
       <div class="modal-body">
			<form action="signup.php" method="post" name="myform"  onsubmit='return check()'>
			  <div class="form-group">
				<label for="usr1">Username:</label>
				<input type="text" class="form-control" id="usr1" name="usr1" required="required">
			  </div>
			  <div class="form-group">
				<label for="email">Email:</label>
				<input type="email" class="form-control" id="email" name="email" required="required">
			  </div>
			  <div class="form-group">
				<label for="telpon">Phone Number:</label>
				<input type="text" class="form-control" id="telpon" name="telpon" required="required">
			  </div>
			  <div class="form-group">
				<label for="pwd1">Password:</label>
				<input type="password" class="form-control" id="pwd1" name="pwd1" required="required">
			  </div>
			  <div class="form-group">
				<label for="Cpwd">Confirm Password:</label>
				<input type="password" class="form-control" id="Cpwd" name="Cpwd" required="required">
			  </div>
			  <button type="submit" class="btn btn-default">Submit</button>
			</form>
      </div>
    </div>

  </div>
</div>
<div id="myModal2" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Login</h4>
      </div>
      <div class="modal-body">
			<form action="login.php" method="post">
			  <div class="form-group">
				<label for="usr">Username:</label>
				<input type="text" class="form-control" id="usr" name="usr" required="required">
			  </div>
			  <div class="form-group">
				<label for="pwd">Password:</label>
				<input type="password" class="form-control" id="pwd" name="pwd" required="required">
			  </div>
			  <button type="submit" class="btn btn-default">Submit</button>
			</form>
      </div>
    </div>

  </div>
</div>

<div class="container">
	<img src="color.png" style="margin:0 auto;position:absolute;z-index:-5;opacity:0.2;">
	<div class="col-sm-12" style="text-align:center;">
		<h1> Check Your Order</h1>
	</div>
	<form class="form-horizontal" style="margin-top:10%;">
	  <div class="form-group">
		<label class="control-label col-sm-2" for="code">Input your code:</label>
		<div class="col-sm-8">
		  <input type="text" class="form-control" id="IC" name="IC" placeholder="Enter your code here" required="required">
		</div>
		 <button class="btn btn-default" onclick="viewGambar()">Check</button>
	  </div>
	</form>
	<div style="width:90%;margin:0 auto;">
	
	
	</div>
</div>
</body>
</html>

