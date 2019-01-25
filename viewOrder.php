<?php
	session_start();
	include "connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>View Order</title>
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
        <li><a href="inputOrder.php">Input Order</a></li>
		<li class="active"><a href="viewOrder.php">View Order</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#" data-toggle="modal" data-target="#myModal"> Log Out</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid">
	<div class="col-sm-12" style="text-align:center;">
		<h1> View Order</h1>
	</div>
	<table class="table table-striped">
		<tr>
			<th>No.</th>
			<th>Id Member</th>
			<th>Id Consumer</th>
			<th>Id Pegawai</th>
			<th>Kode</th>
			<th>Tanggal</th>
			<th>Pembayaran</th>
			<th>Nama File</th>
			<th>Jumlah</th>
			<th>Ukuran Kertas</th>
			<th>Harga</th>
			<th>Status</th>
		</tr>
	</table>
</div>

</body>
</html>

