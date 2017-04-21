<?php
//Provjeri da li je korisnik ulogiran, te da li ima status administratora
include('connect.php');
session_start();
if (isset($_SESSION['login']) && ($_SESSION['user_type'] == 0 ))
{
?>
	<html>
	<head>
	<link href="style.css" rel="stylesheet" type="text/css" />
	<title>Blog.projekt - Korisnici</title>
	<?php
	include ("header.php");
	?>
	</head>
	
	<body>
	<div class="container">
		<h1>UREĐIVANJE KORISNIKA</h1>
		<br>
		<?php
		$user_id = $_GET["userid"];
		$sql = ("SELECT * FROM korisnik");
		$query = mysqli_query($connect, $sql);
		$usernumber = mysqli_num_rows ($query);
		$i = 0;
		?>

		<?php
		$sql2 = ("SELECT * FROM korisnik WHERE korisnik_id = '$user_id'");
		$query2 = mysqli_query($connect, $sql2);
		$userdata2 = mysqli_fetch_array ($query2);

		$tip = $userdata2["tip_id"];
		$korisnicko_ime = $userdata2["korisnicko_ime"];
		$lozinka = $userdata2["lozinka"];
		$ime = $userdata2["ime"];
		$prezime = $userdata2["prezime"];
		$email = $userdata2["email"];
		$slika = $userdata2["slika"];
		?>
		<form action="update_user.php" method="post" style="padding:0; margin-left:15px">
		<input type="hidden" name="user_id" value="<?php echo $user_id ?>">
		<img src="<?php echo $slika ?>"><br><br>
		Tip korisnika:
		<select name="tip">
			<?php switch ($tip)
						{
						case 0:
							echo 
							"<option selected value='0'>Admin</option>
							<option value='1'>Autor</option>
							<option value='2'>Korisnik</option>";
							break;
						case 1:
							echo
							"<option value='0'>Admin</option>
							<option selected value='1'>Autor</option>
							<option value='2'>Korisnik</option>";
							break;
						case 2:
							echo
							"<option value='0'>Admin</option>
							<option value='1'>Autor</option>
							<option selected value='2'>Korisnik</option>";
							break;
						case 3:
							echo
							"<option value='0'>Admin</option>
							<option value='1'>Autor</option>
							<option value='2'>Korisnik</option>";
							break;
						}
			?>
		</select>
		<br><br>
		Korisničko ime: <input size=30 type="text" value="<?php echo $korisnicko_ime?>" name="username"><br><br>
		Lozinka: <input size=30 type="text" value="<?php if (!empty ($lozinka)) { echo $lozinka; } else { echo "N/A"; } ?>" name="password"><br><br>
		Ime: <input size=30 type="text" value="<?php echo $ime?>" name="ime"><br><br>
		Prezime: <input size=30 type="text" value="<?php if (!empty ($prezime)) { echo $prezime; } else { echo "N/A"; } ?>" name="prezime"><br><br>
		E-mail:	<input size=30 type="text" value="<?php if (!empty ($email)) { echo $email; } else { echo "N/A"; } ?>" name="email"><br><br>
		Slika:	<input size=30 type="text" value="<?php if (!empty ($slika)) { echo $slika; } else { echo "N/A"; } ?>" name="slika"><br><br>
		<input type="submit" name="spremi" value="Spremi">
		<input type="submit" name="obrisi" value="Obriši">
		</form>
	<br>
	<a href="korisnici.php"><img src="images/povratak.png" class="center" /></a>
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