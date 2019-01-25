<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login Admin</title>
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
  
<div class="container" style="margin-top: 2%;">
  <!--<img src="color.png" style="margin:0 auto;position:absolute;z-index:-5;opacity:0.2;">-->
  <div class="col-sm-12" style="text-align:center;">
    <h1> Login Admin</h1>
  </div>
  <form class="form-horizontal" style="margin-top:10%;" action="cek.php" method="post">
    <div class="form-group">
      <label class="control-label col-sm-2" for="username">Username:</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="username" name="username" placeholder="Enter username" required="required">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="jumlah">Password:</label>
      <div class="col-sm-9">
        <input type="password" class="form-control" id="pass" name="pass" placeholder="Enter password" required="required">
      </div>
    </div>
    <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default" name="submit">Login</button>
    </div>
    </div>
  </form>
</div>

</body>
</html>

