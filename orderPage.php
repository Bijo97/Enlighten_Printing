<!DOCTYPE html>
<html lang="en">
<head>
  <title>Put Order</title>
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
function changeName(){
	document.getElementById("nama").innerHTML=document.getElementById("namaFile").value;
}
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
        <li class="active"><a href="#">Order</a></li>
		<li><a href="viewPage.php">View Order</a></li>
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
		<h1> Make Your Order</h1>
	</div>
	<form class="form-horizontal" style="margin-top:10%;" action="upload.php" method="post" enctype='multipart/form-data'>
	  <div class="form-group">
		<label class="control-label col-sm-2" for="nama">Nama:</label>
		<div class="col-sm-9">
		  <input type="text" class="form-control" id="nama" name="nama" placeholder="Enter your name" required="required">
		</div>
	  </div>
	  <div class="form-group">
		<label class="control-label col-sm-2" for="ukuran">Email:</label>
		<div class="col-sm-9"> 
		  <input type="email" class="form-control" id="mail" name="mail" placeholder="Enter email" required="required">
		</div>
	  </div>
	  <div class="form-group">
		<label class="control-label col-sm-2" for="jml">Jumlah:</label>
		<div class="col-sm-9">
		  <input type="number" class="form-control" id="jml" name="jml" placeholder="Enter number" required="required">
		</div>
	  </div>
	  <div class="form-group">
		<label class="control-label col-sm-2" for="ukuran">Ukuran Kertas:</label>
		<div class="col-sm-9"> 
		  <select class="form-control" id="ukuran" name="ukuran" required="required">
			<option value="A3">A3(29.7cm x 41.91cm)</option>
			<option value="A4">A4(21cm x 29.7cm)</option>
			<option value="A5">A5(14.7cm x 21cm)</option>
			<option value="letter">Letter(21.5cm x 27.9cm)</option>
			<option value="tabloid">Tabloid(27.9cm x 43.11cm)</option>
			<option value="executive">Executive(18.3cm x 26.6cm)</option>
			<option value="statement">Statement(13.9cm x 21.5cm)</option>
			<option value="F4">F4/Folio(21.5cm x 33cm)</option>
			<option value="quarto">Quarto(21.4cm x 27.4cm)</option>
			<option value="Ofuku Hagaki">Ofuku Hagaki(19.9cm x 14.7cm)</option>
		  </select>
		</div>
	  </div>
	  <div class="form-group">
		<label class="control-label col-sm-2" for="method">Payment Method:</label>
		<div class="col-sm-9"> 
		  <select class="form-control" id="method" name="method" required="required">
			<option value="cash">Cash</option>
			<option value="cicilan">Cicilan</option>
		  </select>
		</div>
	  </div>
	  <div class="form-group">
		  <label class='custom-file-upload col-sm-offset-2 col-sm-10' for='namaFile'>
				<input type='file' name='namaFile' id='namaFile' required='required' onchange='changeName()'/>
				<div id='nama'>Choose a file...</div>
		  </label>
	  </div>
	  <div class="form-group"> 
		<div class="col-sm-offset-2 col-sm-10">
		  <button type="submit" class="btn btn-default">Submit</button>
		</div>
	  </div>
	</form>
</div>

</body>
</html>

