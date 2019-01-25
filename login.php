<meta http-equiv="refresh" content="0;URL='index.html'" />
<?php
	session_start();
	include 'connect.php';
	$user = $_POST['usr'];
	$pass = md5($_POST['pwd']);
	$query = "SELECT COUNT(*) AS cek FROM member WHERE nama like '".$user."' and password like '".$pass."'";
	$login = mysql_query($query);
	$flogin = mysql_fetch_array($login);
	if ($flogin['cek'] == 1) {
		$_SESSION['user'] = $user;
		echo '<script language="javascript">';
		echo 'alert("Success")';
		echo '</script>';
	} else {
		echo '<script language="javascript">';
		echo 'alert("Failed")';
		echo '</script>';
	}
?>