<meta http-equiv="refresh" content="0;URL='index.html'" />
<?php
	include 'connect.php';
	$user = $_POST['usr1'];
	$pass = md5($_POST['pwd1']);
	$email = $_POST['email'];
	$cpass = md5($_POST['Cpwd']);
	$nohp = $_POST['telpon'];
	$cekuser = mysql_query("SELECT COUNT(*) as cek FROM member WHERE nama like '".$user."'");
	$fcekuser = mysql_fetch_array($cekuser);
	if ($fcekuser{'cek'} == 0 && $pass == $cpass) {
		$insertmember = mysql_query("INSERT INTO member VALUES ('', '".$user."', now(), '".$email."', '".$pass."')");
		echo '<script language="javascript">';
		echo 'alert("Your account has been created. Redirecting you to homepage...")';
		echo '</script>';
	} else {
		if ($fcekuser{'cek'} > 0) {
			echo '<script language="javascript">';
			echo 'alert("Username already used. Redirecting you to homepage...")';
			echo '</script>';
		} else {
			echo '<script language="javascript">';
			echo 'alert("Password and Confirm Password must be same. Redirecting you to homepage...")';
			echo '</script>';
		}
	}
?>