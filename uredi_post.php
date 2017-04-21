<?php
include('connect.php');
session_start();
if (isset($_SESSION['login']) && ($_SESSION['user_type'] == 0 || $_SESSION['user_type'] == 1))
{
?>
	<head>

	<link href="style.css" rel="stylesheet" type="text/css"/>
	<title>Blog.projekt - Uređivanje postova</title>
	<?php
		include('header.php');
		$user_id = $_SESSION["user_id"];
		$sql = ("SELECT clanak.clanak_id, clanak.naslov, clanak.tekst, clanak.datum, clanak.slika, clanak.objavljen, korisnik.ime, oznaka.oznaka
		FROM clanak
		INNER JOIN korisnik ON clanak.korisnik_id = korisnik.korisnik_id AND korisnik.korisnik_id = '$user_id'
		INNER JOIN oznaka ON clanak.clanak_id = oznaka.clanak_id ORDER BY clanak.clanak_id DESC");
		$query = mysqli_query($connect, $sql);
		$postnumber = mysqli_num_rows ($query);
		$i = 0;	
	?>
	</head<


	<body>
	<div class="container" align="left">
		<br />
		<div align="center" class="velikinaslov">UREĐIVANJE POSTOVA</div><br />
	<div style="margin-left:15px">Vaši postovi: <br>
	
	<?php
	while ($i < $postnumber)
	{
	$result= mysqli_fetch_array ($query);
	$post_id = $result["clanak_id"];
	$naslov=$result["naslov"];
	setlocale (LC_TIME,"croatian");
	$datum= iconv ('ISO-8859-2', 'UTF-8', strftime("%A, %d. %B %Y.", strtotime($result["datum"])));
	echo "<br><a href='uredi_post2.php?postid=" . $post_id . "'>" . $naslov . "</a> - " . $datum ;
	$i++;
	}
	?>
	</div>
	</div>
	<img class="center" src="images/containerbottom.png"/>
	</body>


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