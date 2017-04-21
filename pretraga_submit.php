<?php
//Provjeri da li je korisnik ulogiran, te da li ima status administratora ili autora
include('connect.php');
session_start();
if (isset($_SESSION['login']))
{
?>
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Blog.projekt - Rezultati pretrage</title>
	<link href="style.css" rel="stylesheet" type="text/css" />
	<?php
	include "header.php";
	?>
	</head>

	<body>
	<div class="container" align="center">

	<?php
	include "pretraga.php";
	?>

	<br />
	<span class="velikinaslov"> REZULTATI PRETRAGE</span>
	<br><br>
	<?php

	$tip=$_POST['tip'];
	$kljucnarijec=$_POST['searchfield'];

	switch($tip)
	{
		case "naslovu": //Ukoliko je tip pretrage po naslovu
			$rezultat=mysqli_query($connect, "SELECT clanak.clanak_id, clanak.naslov, clanak.tekst, clanak.datum, clanak.slika, clanak.objavljen, korisnik.ime, oznaka.oznaka
											  FROM clanak
											  INNER JOIN korisnik ON clanak.korisnik_id = korisnik.korisnik_id
											  INNER JOIN oznaka ON clanak.clanak_id = oznaka.clanak_id
											  WHERE clanak.naslov LIKE '%$kljucnarijec%'
											  ORDER BY `clanak`.`clanak_id` DESC") or die (mysqli_error($connect));;
			$brojrezultata=mysqli_num_rows($rezultat);
			if (($brojrezultata != 0) && (!empty ($kljucnarijec)))
			{
				$i=0; //Brojač
				while ($i < $brojrezultata)
					{
						$clanak=mysqli_fetch_array($rezultat);
						$objavljen = $clanak["objavljen"];
						if (($objavljen==1) || ($objavljen==2))
						{
							$naslov= $clanak["naslov"];
							$tekst= $clanak["tekst"];
							$autor= $clanak["ime"];
							$datum= iconv ('ISO-8859-2', 'UTF-8', strftime("%A, %d. %B %Y.", strtotime($clanak["datum"]))); //Formatiraj datum te pretvori u UTF-8 kako bi se prikazala hrv. slova
							$clanak_slika= $clanak["slika"];
							$oznaka= $clanak["oznaka"];
							$post_id= $clanak["clanak_id"];
							$SQL_broj_komentara= mysqli_query($connect, "SELECT * FROM komentar WHERE clanak_id = '$post_id'");
							$broj_komentara=mysqli_num_rows($SQL_broj_komentara);
							include('post_format.php'); //HTML prikaz podataka iz tablice
						}			
						if (($objavljen==0) && ($brojrezultata==1))
						{
							echo "Nema rezultata!<br><br>";
							break 2;
						}
						$i++; //Povećaj $i nakon svakog reda
					}
			}
			else
			{
				echo "Nema rezultata!";
			}
			break;
		case "datumu":
			$rezultat=mysqli_query($connect, "SELECT clanak.clanak_id, clanak.naslov, clanak.tekst, clanak.datum, clanak.slika, clanak.objavljen, korisnik.ime, oznaka.oznaka
											  FROM clanak
											  INNER JOIN korisnik ON clanak.korisnik_id = korisnik.korisnik_id
											  INNER JOIN oznaka ON clanak.clanak_id = oznaka.clanak_id
											  WHERE clanak.datum LIKE '%$kljucnarijec%'
											  LIMIT 0 , 30");
			$brojrezultata=mysqli_num_rows($rezultat);
			if (($brojrezultata != 0) && (!empty ($kljucnarijec)))
			{
				$i=0; //Brojač
				while ($i < $brojrezultata)
					{
						$clanak=mysqli_fetch_array($rezultat);
						$objavljen = $clanak["objavljen"];
						if (($objavljen==1) || ($objavljen==2))
						{
							$naslov= $clanak["naslov"];
							$tekst= $clanak["tekst"];
							$autor= $clanak["ime"];
							$datum= iconv ('ISO-8859-2', 'UTF-8', strftime("%A, %d. %B %Y.", strtotime($clanak["datum"]))); //Formatiraj datum te pretvori u UTF-8 kako bi se prikazala hrv. slova
							$clanak_slika= $clanak["slika"];
							$oznaka=$clanak["oznaka"];
							$post_id= $clanak["clanak_id"];
							$SQL_broj_komentara= mysqli_query($connect, "SELECT * FROM komentar WHERE clanak_id = '$post_id'");
							$broj_komentara=mysqli_num_rows($SQL_broj_komentara);
							include('post_format.php'); //HTML prikaz podataka iz tablice
						}
						if (($objavljen==0) && ($brojrezultata==1))
						{
							echo "Nema rezultata!<br><br>";
							break 2;
						}
						$i++; //Povećaj $i nakon svakog reda
					}
			}
			else
			{
				echo "Nema rezultata!";
			}
			break;
		case "oznakama":
			$rezultat=mysqli_query($connect, "SELECT clanak.clanak_id, clanak.naslov, clanak.tekst, clanak.datum, clanak.slika, clanak.objavljen, korisnik.ime, oznaka.oznaka
											  FROM clanak
											  INNER JOIN korisnik ON clanak.korisnik_id = korisnik.korisnik_id
											  INNER JOIN oznaka ON clanak.clanak_id = oznaka.clanak_id
											  WHERE oznaka LIKE '%$kljucnarijec%'");
			$brojrezultata=mysqli_num_rows($rezultat);
			if (($brojrezultata != 0) && (!empty ($kljucnarijec)))
			{
				$i=0; //Brojač
				while ($i < $brojrezultata)
					{
						$clanak=mysqli_fetch_array($rezultat);
						$objavljen = $clanak["objavljen"];
						if (($objavljen==1) || ($objavljen==2))
						{
							$naslov= $clanak["naslov"];
							$tekst= $clanak["tekst"];
							$autor= $clanak["ime"];
							$datum= iconv ('ISO-8859-2', 'UTF-8', strftime("%A, %d. %B %Y.", strtotime($clanak["datum"]))); //Formatiraj datum te pretvori u UTF-8 kako bi se prikazala hrv. slova
							$clanak_slika= $clanak["slika"];
							$oznaka=$clanak["oznaka"];
							$post_id= $clanak["clanak_id"];
							$SQL_broj_komentara= mysqli_query($connect, "SELECT * FROM komentar WHERE clanak_id = '$post_id'");
							$broj_komentara=mysqli_num_rows($SQL_broj_komentara);
							include('post_format.php'); //HTML prikaz podataka iz tablice
						}
						if (($objavljen==0) && ($brojrezultata==1))
						{
							echo "Nema rezultata!<br><br>";
							break 2;
						}
						$i++; //Povećaj $i nakon svakog reda
					
					}
			}
			else
			{
				echo "Nema rezultata!<br><br>";
			}
			break;
	}
	?>
	<a href="index.php"><img src="images/povratak.png" class="center" /></a>
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