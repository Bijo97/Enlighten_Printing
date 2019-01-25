<!DOCTYPE html>
<html lang="en">
<head>
  <title>Form Persediaan</title>
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
        <li><a href="index.html">Home</a></li>
        <li class="active"><a href="#">Order</a></li>
    <li><a href="#">View Order</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="SignUpPage.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="loginPage.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container">
  <!--<img src="color.png" style="margin:0 auto;position:absolute;z-index:-5;opacity:0.2;">-->
  <div class="col-sm-12" style="text-align:center;">
    <h1> Form Pegawai</h1>
  </div>
  <form class="form-horizontal" style="margin-top:10%;" action="upload.php" method="post">
    <div class="form-group">
      <label class="control-label col-sm-2" for="nama">Nama barang:</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="nama" name="nama" placeholder="Enter text" required="required">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="jumlah">Jumlah:</label>
      <div class="col-sm-9">
        <input type="number" class="form-control" id="jumlah" name="jumlah" placeholder="Enter number" required="required">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="harga">Harga:</label>
      <div class="col-sm-9">
        <input type="number" class="form-control" id="harga" name="harga" placeholder="Enter number" required="required">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="status">Status:</label>
      <div class="col-sm-9">
          <label class="control-label" style="color: green;">Barang tersedia</label>
      </div>
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

