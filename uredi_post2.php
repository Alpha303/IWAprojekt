<?php
include('connect.php');
session_start();
if (isset($_SESSION['login']) && ($_SESSION['user_type'] == 0 || $_SESSION['user_type'] == 1))
{
?>
	<head>

	<link href="style.css" rel="stylesheet" type="text/css"/>
	<title>Blog.projekt - Uređivanje postova</title>
	<?php include('header.php'); ?>
	</head>
	

	<body>
	<div class="container" align="left">
		<br />
		<div align="center" class="velikinaslov">UREĐIVANJE POSTOVA</div><br />
		<?php
		$post_id = $_GET["postid"];
		$sql = ("SELECT clanak.clanak_id, clanak.naslov, clanak.tekst, clanak.datum, clanak.slika, clanak.objavljen, korisnik.ime, oznaka.oznaka
		FROM clanak
		INNER JOIN korisnik ON clanak.korisnik_id = korisnik.korisnik_id AND clanak.clanak_id = '$post_id'
		INNER JOIN oznaka ON clanak.clanak_id = oznaka.clanak_id");
		$query = mysqli_query($connect, $sql);
		$postnumber = mysqli_num_rows ($query);
		$result= mysqli_fetch_array ($query);
		$ime=$result["ime"];
		$tekst=$result["tekst"];
		$naslov=$result["naslov"];
		$datum=$result["datum"];
		$slika=$result["slika"];
		$oznaka=$result["oznaka"];
		$objavljen =$result["objavljen"];
		?>
		<form action="uredi_post_submit.php" method="post" style="margin-left:15px">
		Autor: <input size=30 type="text" value="<?php echo $ime?>" name="ime"><br><br>
		Naslov: <input size=30 type="text" value="<?php echo $naslov?>" name="naslov"><br><br>
		Tekst: <textarea name="tekst" cols="119" rows="20" style="resize:none"><?php echo $tekst ?></textarea><br><br>
		Slika: <input size=30 type="text" value="<?php echo $slika?>" name="slika"><br><br>
		Datum: <input size=30 type="text" value="<?php if (!empty ($datum)) { echo $datum; } else { echo "N/A"; } ?>" name="datum"><br><br>
		Oznake: <input size=30 type="text" value="<?php if (!empty ($oznaka)) { echo $oznaka; } else { echo "N/A"; } ?>" name="oznaka"><br><br>
		<?php switch ($objavljen)
							{
							case 0:
								echo "Objavljen:<input type='checkbox' name='objavljen'><br><br>";
								echo "Komentari uključeni:<input type='checkbox' name='komentari' disabled><br><br>";
								break;
							case 1:
								echo "Objavljen:<input type='checkbox' name='objavljen' checked><br><br>";
								echo "Komentari uključeni:<input type='checkbox' name='komentari' checked><br><br>";
								break;
							case 2:
								echo "Objavljen:<input type='checkbox' name='objavljen' checked><br><br>";
								echo "Komentari uključeni:<input type='checkbox' name='komentari'><br><br>";
								break; 
							}
		?>
		<input type="hidden" name="clanak_id" value=<?php echo $post_id ?>>
		<input type="submit" value="Uredi">
		</form>
	<a href="uredi_post.php"><img src="images/povratak.png" class="center" /></a>
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