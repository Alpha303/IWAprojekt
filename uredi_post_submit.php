<?php
include('connect.php');
session_start();
if (isset($_SESSION['login']) && ($_SESSION['user_type'] == 0 || $_SESSION['user_type'] == 1 ))
{
?>

	<?php

	$clanak_id = $_POST["clanak_id"];
	$ime=$_POST["ime"];
	$tekst=$_POST["tekst"];
	$naslov=$_POST["naslov"];
	$datum=$_POST["datum"];
	$slika=$_POST["slika"];
	$oznaka=$_POST["oznaka"];
	if (isset ($_POST["objavljen"]) and empty ($_POST["komentari"]))
	{
		$objavljen = 2;
	}
	else if (isset ($_POST["objavljen"]) and isset ($_POST["komentari"]))
	{
		$objavljen = 1;
	}
	else
	{
		$objavljen = 0;
	}
	$sql = "UPDATE `clanak` SET `naslov`='$naslov',`tekst`='$tekst',`slika`='$slika',`datum`='$datum',`objavljen`='$objavljen' WHERE clanak.clanak_id = '$clanak_id'";
	$sql2 ="UPDATE `oznaka` SET `oznaka`='$oznaka',`clanak_id`='$clanak_id' WHERE oznaka.clanak_id = '$clanak_id'";
	
	mysqli_query ($connect, $sql)  or die (mysqli_error ($connect));
	mysqli_query ($connect, $sql2)  or die (mysqli_error ($connect));
	
	header("Location:uredi_post.php");
	
	?>	

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	

<?php
}
else //404
{
?>
<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<title>Object not found!</title>
<link rev="made" href="mailto:postmaster@localhost" />
<style type="text/css"><!--/*--><![CDATA[/*><!--*/ 
    body { color: #000000; background-color: #FFFFFF; }
    a:link { color: #0000CC; }
    p, address {margin-left: 3em;}
    span {font-size: smaller;}
/*]]>*/--></style>
</head>

<body>
<h1>Object not found!</h1>
<p>


    The requested URL was not found on this server.

  

    If you entered the URL manually please check your
    spelling and try again.

  

</p>
<p>
If you think this is a server error, please contact
the <a href="mailto:postmaster@localhost">webmaster</a>.

</p>

<h2>Error 404</h2>
<address>
  <a href="/">localhost</a><br />
  <span>Apache/2.4.4 (Win32) OpenSSL/0.9.8y PHP/5.4.19</span>
</address>
</body>
</html>

<?php
}
?>