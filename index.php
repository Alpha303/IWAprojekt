<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="style.css" rel="stylesheet" type="text/css" />
<title>Blog.projekt</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<?php
session_start();
include('connect.php');
include('header.php');

//Provjerava se da li je korisnik ulogiran

if (empty($_SESSION['login']))
{
?>
	<?php
	$get_authors = mysqli_query($connect, "SELECT * FROM korisnik WHERE korisnik.tip_id = 1")
	?>
	<div class="container" align="center">
	<br><br>
	<span style="font-family: Roboto Regular">Dobrodošli na Blog.projekt! <br>
	<br>
	Kao neprijavljenom korisniku, dostupan Vam je samo kratki pregled autora i sadržaja na blogu.<br>
	<br>
	<div align="left" style="font-family: Roboto Regular; padding-left:15px"><b>Popis autora:</b><br><br>
	<?php
	while ($row = mysqli_fetch_array($get_authors))
	{
	$user_id = $row["korisnik_id"];
	$ime = $row["ime"];
	$get_posts = mysqli_query($connect, "SELECT * FROM clanak INNER JOIN korisnik WHERE clanak.korisnik_id = korisnik.korisnik_id AND korisnik.korisnik_id = '$user_id'");
	echo "-" . $ime. "<br>&nbsp;&nbsp;Članci: <ul>";
	while ($post_array = mysqli_fetch_array($get_posts))
		{
		$naslov = $post_array["naslov"];
		setlocale (LC_TIME,"croatian");
		$datum= iconv ('ISO-8859-2', 'UTF-8', strftime("%A, %d. %B %Y.", strtotime($post_array["datum"])));
		echo "<li>" . $naslov . " (" . $datum . ")";
		}
		echo "</li></ul>";
	}
	?>
	</div>
	<a href="login.php">Prijavite se</a> kako biste vidjeli cjelokupan sadržaj.
	</div>
	<img class="center" src="images/containerbottom.png"/>
	</span>
<?php
}
else
{
?>
	<div class="container" align="center">
		<br />
		<span class="velikinaslov">NAJNOVIJE</span><br /><br />
		<?php
		include ("pretraga.php"); //Menu za pretraživanje
		?>
		<!--UPITI-->
		
		<?php

		// Postavljanje početnih varijabli
		setlocale (LC_TIME,"croatian");
		$upitnajnovije= ("SELECT clanak.clanak_id, clanak.naslov, clanak.tekst, clanak.datum, clanak.slika, clanak.objavljen, korisnik.ime, oznaka.oznaka
	FROM clanak
	INNER JOIN korisnik ON clanak.korisnik_id = korisnik.korisnik_id
	INNER JOIN oznaka ON clanak.clanak_id = oznaka.clanak_id
	ORDER BY `clanak`.`clanak_id` DESC
	LIMIT 0 , 3");

		$post= mysqli_query($connect, $upitnajnovije) or die(mysqli_error());

		$broj = mysqli_num_rows ($post); 

		//Ovdje treba dohvatiti 3 najnovija članka iz baze

		$i=0; //Brojač

		
		while ($i < $broj) //Kod će biti ponovljen onoliko puta koliko ima redova u upitu
		{
			$clanak=mysqli_fetch_array ($post);
			$objavljen= $clanak["objavljen"];
			if ($objavljen == 1 or $objavljen == 2)
			{
				$naslov= $clanak["naslov"];
				$tekst= $clanak["tekst"];
				$autor= $clanak["ime"];
				$datum= iconv ('ISO-8859-2', 'UTF-8', strftime("%A, %d. %B %Y.", strtotime($clanak["datum"]))); //Formatiraj datum te pretvori u UTF-8 kako bi se prikazala hrv. slova
				$clanak_slika= $clanak["slika"];
				$post_id= $clanak["clanak_id"];
				$oznaka = $clanak["oznaka"];
				$SQL_broj_komentara= mysqli_query($connect, "SELECT clanak_id FROM komentar WHERE clanak_id = '$post_id'");
				$broj_komentara=mysqli_num_rows($SQL_broj_komentara);
				include('post_format.php'); //HTML prikaz podataka iz tablice
			}
			$i++; //Povećaj $i nakon svakog reda
		}
		
		?>
		<span class="velikinaslov">NAJKOMENTIRANIJE</span>
		<br><br>
		<?php
		
		// Ovdje treba dohvatiti 3 najkomentiranija članka iz baze
		
		$MC_sql=
		"SELECT clanak.clanak_id, clanak.datum, clanak.naslov, clanak.objavljen, clanak.slika, clanak.tekst, subquery.brojkom, korisnik.ime, oznaka.oznaka
	FROM clanak
	INNER JOIN (

	SELECT clanak_id, COUNT( * ) AS brojkom
	FROM komentar
	GROUP BY clanak_id
	) AS subquery ON clanak.clanak_id = subquery.clanak_id
	INNER JOIN korisnik ON clanak.korisnik_id = korisnik.korisnik_id
	INNER JOIN oznaka ON clanak.clanak_id = oznaka.clanak_id
	ORDER BY brojkom DESC
	LIMIT 0 , 3";
		$MC_query = mysqli_query($connect, $MC_sql);
		$MC_num_of_results = mysqli_num_rows ($MC_query);
		$i=0;
		
		while ($i < $MC_num_of_results)
		{
		$MC_array = mysqli_fetch_array ($MC_query);
		$objavljen = $MC_array["objavljen"];
			if ($objavljen == 1 or $objavljen == 2)
			{
				
				$naslov= $MC_array["naslov"];
				$tekst= $MC_array["tekst"];
				$autor= $MC_array["ime"];
				$datum= iconv ('ISO-8859-2', 'UTF-8', strftime("%A, %d. %B %Y.", strtotime($MC_array["datum"]))); //Formatiraj datum te pretvori u UTF-8 kako bi se prikazala hrv. slova
				$clanak_slika=$MC_array["slika"];
				$oznaka = $MC_array["oznaka"];
				$post_id= $MC_array["clanak_id"];
				$SQL_broj_komentara= mysqli_query($connect, "SELECT clanak_id FROM komentar WHERE clanak_id = '$post_id'");
				$broj_komentara=mysqli_num_rows($SQL_broj_komentara);
				include('post_format.php'); //HTML prikaz podataka iz tablice
			}
			$i++; //Povećaj $i nakon svakog reda
		}
		?>
	</div>
	<img class="center" src="images/containerbottom.png"/>
<?php
}
?>
</body>
</html>
