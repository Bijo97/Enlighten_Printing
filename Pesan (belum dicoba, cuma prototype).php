<meta http-equiv="refresh" content="0;URL='index.html'" />
<?php
	include 'connect.php';
	$file="uploads/".basename($_FILES["namaFile"]["name"]);
	/*
		make a random generator later, var->>>>>>$code
		
		also don't forget to make the price, var->>>>>>.$price
	*/
	
	$subject = 'Your code for your printing order';
	$message = basename($_FILES["namaFile"]["name"])." has been uploaded to enlighten.com \n"."Your code is ".$code."\n"."Use this code when picking up order";
	$headers = 'From: enlighten.com' . "\r\n" .'Reply-To: enlighten.com' . "\r\n" .'X-Mailer: PHP/' . phpversion();
	
	//upload the file, then save to database
	if(move_uploaded_file($_FILES["namaFile"]["tmp_name"], $file)){
		if(!empty($_SESSION['user'])){
			//retrieve email from member table
			$email=mysql_query("select email from member where nama=".$_SESSION['user']);
			
			//prototype input awal
			$inputPesan=mysql_query("insert into Pemesanan values(NULL,$_SESSION['user'],NULL,$email,$code,now(),$_POST['method'],basename($_FILES['namaFile']['name']),$_POST['jml'],$_POST['ukuran'],$price,0");
			
			mail($email, $subject, $message, $headers);
		}
		else{
			//prototype input awal
			$inputPesan=mysql_query("insert into Pemesanan values(NULL,'One Time Consument',NULL,$_POST['email'],$code,now(),$_POST['method'],basename($_FILES['namaFile']['name']),$_POST['jml'],$_POST['ukuran'],$price,0");
			
			mail($_POST['email'], $subject, $message, $headers);
		}
	}
	else {
		echo '<script language="javascript">alert("Upload Failed")</script>';
	}
?>