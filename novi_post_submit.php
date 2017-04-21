<?php
//Provjeri da li je korisnik logiran, te da li ima status administratora ili autora
include('connect.php');
session_start();
if (isset($_SESSION['login']) && ($_SESSION['user_type'] == 0 || $_SESSION['user_type'] == 1))
{
	$user_id = $_SESSION['user_id'];
	$naslov = $_POST['naslov'];
	$tekst = $_POST['tekst'];
	$slika = $_POST['slika'];
	$oznaka = $_POST['oznaka'];
	if (isset ($_POST["objavljen"]) and empty ($_POST["komentari"]))
	{
		$objavljen = 1;
	}
	else if (isset ($_POST["objavljen"]) and isset ($_POST["komentari"]))
	{
		$objavljen = 2;
	}
	else
	{
		$objavljen = 0;
	}

	
	$sql=("INSERT INTO `clanak`(`clanak_id`, `korisnik_id`, `naslov`, `tekst`, `slika`, `datum`, `objavljen`) VALUES (NULL,'$user_id','$naslov','$tekst','$slika',CURRENT_TIMESTAMP,'$objavljen')");
	$sql2=("INSERT INTO `oznaka`(`oznaka_id`, `oznaka`, `clanak_id`) VALUES (NULL, '$oznaka', LAST_INSERT_ID())");
	
	mysqli_query($connect, $sql) or die (mysqli_error($connect));
	mysqli_query($connect, $sql2) or die (mysqli_error($connect));

	header("location:index.php");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
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