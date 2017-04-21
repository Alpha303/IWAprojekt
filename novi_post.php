<?php
//Provjeri da li je korisnik logiran, te da li ima status administratora ili autora
session_start();
if (isset($_SESSION['login']) && ($_SESSION['user_type'] == 0 || $_SESSION['user_type'] == 1))
{
?>
	<html>
	<head>
	<?php
	include ('header.php');
	?>
	<link href="style.css" rel="stylesheet" type="text/css"/>

	</head>


	<body>
	<div class="container">
	<br>
		<div style ="text-align:center">
			<span class="velikinaslov">NOVI POST</span>
		</div>
		<div style= "font-family: Roboto Regular">
			<form style="padding-left:15px" action="novi_post_submit.php" method="post">
			<br><br>
			Naslov članka: <input type="text" name="naslov" style="width:450px">
			<br><br>
			Tekst: <br><br><textarea name="tekst" cols="119" rows="20" style="resize:none"></textarea>
			<br><br>
			Slika: <input type="text" name="slika">
			<br><br>
			Oznake(tagovi): <input type="text" name="oznaka">
			<br><br>
			<input type="checkbox" name="objavljen" value='1'>Javno vidljiv</>&nbsp;&nbsp;&nbsp;
			<input type="checkbox" name="komentari" value='2'>Isključi komentare</>
			<br><br>
			<input type="submit" name="unesi" value="Objavi">
			</form>
		</div>
	<a href="index.php"><img src="images/povratak.png" class="center"/></a>
		
	</div>
	<img class="center" src="images/containerbottom.png"/>
	</body>
	</html>
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