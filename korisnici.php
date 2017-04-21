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
		<h1>KORISNICI</h1>
		<br>
		<table align="center" border=1 width=1000>
			<th width=75>ID</th>
			<th width=80>Tip</th>
			<th width=102>Koris. ime</th>
			<th width=50>Lozinka</th>
			<th width=120>Ime</th>
			<th width=90>Prezime</th>
			<th width=200>E-mail</th>
			<th width=180>Slika</th>
			<th width=40>Uredi</th>
		</table>

		<?php
		$sql = ("SELECT * FROM korisnik");
		$query = mysqli_query($connect, $sql);
		$usernumber = mysqli_num_rows ($query);
		$i = 0;

		while ($i < $usernumber)
			{
			$userdata = mysqli_fetch_array ($query);
			$korisnik_id = $userdata["korisnik_id"];
			$tip_id = $userdata["tip_id"];
			$korisnicko_ime = $userdata["korisnicko_ime"];
			$lozinka = $userdata["lozinka"];
			$ime = $userdata["ime"];
			$prezime = $userdata["prezime"];
			$email = $userdata["email"];
			$slika = $userdata["slika"];

			include("korisnici_format.php");
			$i++;
			}
		?>
		<br>
		<div style="float:left; text-align:right; width:270px; margin:0px">
		<form action="novi_korisnik.php" method="post">

			<b>Dodavanje novog korisnika</b>
			<br>
			<br>
			Tip korisnika: 
			<ul style="list-style-type:none">
			<li><input type="radio" name="tip" value=0>admin</li>
			<li><input type="radio" name="tip" value=1>autor</li>
			<li><input type="radio" name="tip" value=2>korisnik</li>
			</ul>
		Korisničko ime: <input type="text" name ="username"><br><br>
		Lozinka: <input type="text" name ="password"><br><br>
		Ime korisnika: <input type="text" name ="ime"><br><br>
		Prezime korisnika: <input type="text" name ="prezime"><br><br>
		E-mail: <input type="text" name ="email"><br><br>
		Slika: <input type="text" name ="slika"><br><br><br><br>
		<input type="submit" value="Unesi">
		</form>
		</div>
	<div style="float:right; margin-right: 15px"">
	<b>Zahtjevi korisnika</b>
	<?php
	
	$find_author_requests = mysqli_query($connect, "SELECT * FROM korisnik WHERE tip_id = 3");
	$number_of_requests = mysqli_num_rows ($find_author_requests);
	
	if ($number_of_requests <> 0)
	{
	echo "<br>Sljedeći korisnici su zatražili status autora:";
	while ($requests_array = mysqli_fetch_array($find_author_requests))
		{
		$request_name=$requests_array["ime"];
		$request_id=$requests_array["korisnik_id"];
	?>
	<table>
		<tr>
			<td><?php echo $request_name?></td>
			<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Odobri? </td>
			<td><form style="margin:0; padding:0" action="accept_author_request.php" method="post">&nbsp;&nbsp;<input type="hidden" name="user_id" value=<?php echo $request_id?>><input type="image" value="" src="images/accept.png"></form>
			
			
			</td>
			<td><form style="margin:0; padding:0" action="deny_author_request.php" method="post">&nbsp;&nbsp;&nbsp;<input type="hidden" name="user_id" value=<?php echo $request_id?>><input type="image" value="" src="images/delete.png"></form></td>
		</tr>
	</table>
		<?php
	}
	?>

	<?php
	}
	else
	{
	echo "<br>Trenutno nema nikakvih zahtjeva.";
	}
	?>
	

	<form action="korisnici.php" method="post">
	<br>
	<input type="submit" value="Osvježi stranicu">
	</div>
	</form>
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