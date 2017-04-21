<?php
//Provjeri da li je korisnik ulogiran
include('connect.php');
session_start();
if (isset($_SESSION['login']))
{
?>
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<?php
		$id = $_GET['id'];
		$sql = ("SELECT clanak.clanak_id, clanak.naslov, clanak.tekst, clanak.datum, clanak.slika, clanak.objavljen, korisnik.ime, oznaka.oznaka
				FROM clanak
				INNER JOIN korisnik ON clanak.korisnik_id = korisnik.korisnik_id
				AND clanak_id = '$id'
				INNER JOIN oznaka ON clanak.clanak_id = oznaka.clanak_id");
		$fetchpostdata = mysqli_query($connect, $sql);
		$result = mysqli_fetch_array($fetchpostdata);
		$objavljen = $result["objavljen"];
		if ($objavljen == 1 or $objavljen == 2)
			{
			$naslov = $result["naslov"];
			$autor = $result["ime"];
			$datum = $result["datum"];
			$clanak_slika = $result["slika"];
			$tekst = $result["tekst"];
			$oznaka = $result["oznaka"];
			?>
			<title>Blog.projekt - <?php print $naslov; ?></title>
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
			<link href="style.css" rel="stylesheet" type="text/css" />
			</head>
			<body>
			<?php include ("header.php");?>
			<div class="container" align="center">
			<?php
			include ("pretraga.php");
			?>
			<br><br><br>
			<table class="titletable" align="center" width="620" border="0">
				<tr>
					<td align="left">
					<span class="naslov">
					<?php
						print $naslov;
					?>
					</span>
					</br>
					</td>
				</tr>
			</table>
			<table class="posttable" align="center" width="620" border="0">
				<tr>
					<td align="left">
					<span class="datum">
					<?php
						print $datum;
					?>
					&nbsp;&nbsp;&nbsp;Autor: 
					<?php 
						print $autor 
					?>
					</span>
					</br>
					</td>
				</tr>
				<tr>
					<td>
					<img class="break" src="images/break.png"/>
					</td>
				</tr>
				<tr>
					<td align="center">
					<img src="<?php echo $clanak_slika ?>" width="587" height="129" />
					</td>
				</tr>
				<tr>  
					<td class="tekst" ><?php print $tekst?>
					</td>
				</tr>
				<tr>
				<td><img class="break" src="images/break.png"/></td>
				</tr>
				<tr>
				<td><span class="datum">Oznake:&nbsp;<span color=#FFFFFF><?php echo $oznaka ?></span></span></td>
				</tr>
			</table>
			<a href="index.php"><img src="images/povratak.png" class="center" /></a>
			<br /><br />
			<?php include ("komentari.php");
			if ($objavljen == 1)
			{
				include ("novi_komentar.php");
			}
			else
			{
				echo "<br><br><span style='color:#FF0000' class='tekst'>Za ovu temu su isključeni komentari.</span>";
			}
			?>
			</div>
			<img class="center" src="images/containerbottom.png"/>
			</body>
			</html>
			<?php 
			}
			else
			{
			goto fail;
			}
			?>
<?php
}
else //404
{
fail:
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