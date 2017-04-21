<?php
include('connect.php');
session_start();
if (isset($_SESSION['login']) && ($_SESSION['user_type'] == 0 ))
{

	$user_id = $_POST["user_id"];
	$tip_id = $_POST["tip"];
	$korisnicko_ime = $_POST["username"];
	$lozinka = $_POST["password"];
	$ime = $_POST["ime"];
	$prezime = $_POST["prezime"];
	$email = $_POST["email"];
	$slika = $_POST["slika"];


	if (isset($_POST["spremi"]))
	{

	$sql = "UPDATE `korisnik` SET `tip_id`='$tip_id',`korisnicko_ime`='$korisnicko_ime',`lozinka`='$lozinka',`ime`='$ime',`prezime`='$prezime',`email`='$email',`slika`='$slika' WHERE `korisnik`.`korisnik_id` = $user_id;";

	mysqli_query($connect, $sql);

	header("Location:korisnici.php");
	}


	if (isset($_POST["obrisi"]))
	{
	$sql2 = "DELETE FROM `korisnik` WHERE `korisnik`.`korisnik_id` = $user_id;";

	mysqli_query($connect, $sql2);

	header("Location:korisnici.php");


	}
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