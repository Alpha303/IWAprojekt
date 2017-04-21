<?php
//Provjeri da li je korisnik ulogiran
include('connect.php');
if (isset($_SESSION['login']))
{
	?>
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Untitled Document</title>
	<link href="style.css" rel="stylesheet" type="text/css" />

	<img src="images/komentari.png" class="center" />

	</head>

	<body>

	<?php
	$query= ("SELECT * FROM komentar
	INNER JOIN korisnik WHERE komentar.korisnik_id = korisnik.korisnik_id AND komentar.clanak_id = '$id' ORDER BY `komentar`.`komentar_id` DESC");
	$makequery= mysqli_query ($connect, $query);
	$brojkom= mysqli_num_rows ($makequery);

	$i=0;
	do
		{
			$sadrzaj= mysqli_fetch_array ($makequery);
			$datum = $sadrzaj["datum"];
			$tekst = $sadrzaj["tekst"];
			$korisnik_slika = $sadrzaj["slika"];
			$user = $sadrzaj["korisnicko_ime"];
			$komentar_id = $sadrzaj["komentar_id"];
			include ("komentari_format.php");
			$i++;
		}
	while ($i < $brojkom)
	?>
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