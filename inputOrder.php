<?php
	session_start();
	include "connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title> Input Order</title>
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
        <li class="active"><a href="inputOrder.php">Input Order</a></li>
		<li><a href="viewOrder.php">View Order</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#" data-toggle="modal" data-target="#myModal"> Log Out</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
	<div class="col-sm-12" style="text-align:center;">
		<h1> Input Order</h1>
	</div>
	<form class="form-horizontal" style="margin-top:10%;" action="upload.php" method="post" enctype='multipart/form-data'>
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

