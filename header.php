<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css">

</style>
</head>
<body>
<div class="banner">
<a href="index.php"><img style="position: absolute; top:33px; left:10px;" src="images/blogprojekt-logo.png" /></a>

<img style="position:absolute; top:5px; right:10px;" src="images/iwa.png"/>
<?php

// Provjerava da li je korisnik logiran

if (isset ($_SESSION['login']))
{
	$user= $_SESSION['user'];
	$usertype= $_SESSION['user_type'];
	echo "<span class='welcometext' style='position:absolute; top:2px;right:140px;'>Dobrodošli, <b>" . $user . "</b>!</span>";
	
	switch ($usertype)
	{
	case 0: //ADMIN
		echo "
			<span class='welcometext' style='position:absolute; top:22px;right:140px;'>(admin)</span>
			<div style ='position:relative; display:block; width:1009px; height:100px; margin-left:auto; margin-right:auto'>
			<a style='position:absolute; left:0px; bottom:0px;' class='mnbtn' href='novi_post.php'>NOVI POST</a>
			<a style='position:absolute; left:151px; bottom:0px;' class='mnbtn' href='uredi_post.php'>UREDI POST</a>
			<a style='position:absolute; left:302px; bottom:0px;' class='mnbtn' href='korisnici.php'>KORISNICI</a>
			<a style='position:absolute; right:0px; bottom:0px' class='mnbtn' href='logout.php'>ODJAVA</a>
			</div>";
		break;
	case 1: //AUTOR
		echo "
			<span class='welcometext' style='position:absolute; top:22px;right:140px;'>(autor)</span>
			<div style ='position:relative; display:block; width:1009px; height:100px; margin-left:auto; margin-right:auto'>
			<a style='position:absolute; left:0px; bottom:0px;' class='mnbtn' href='novi_post.php'>NOVI POST</a>
			<a style='position:absolute; left:151px; bottom:0px;' class='mnbtn' href='uredi_post.php'>UREDI POST</a>
			<a style='position:absolute; right:0px; bottom:0px' class='mnbtn' href='logout.php'>ODJAVA</a>";
		break;
	case 2: //KORISNIK
		echo "
			<span class='welcometext' style='position:absolute; top:22px;right:140px;'>(korisnik)</span>
			<div style ='position:relative; display:block; width:1009px; height:100px; margin-left:auto; margin-right:auto'>
			<a style='position:absolute; right:0px; bottom:0px' class='mnbtn' href='logout.php'>ODJAVA</a>
			<a style='position:absolute; right:151px; bottom:0px;' class='mnbtn' href='req_author.php'>ZATRAŽI AUTORSTVO</a>";
		break;
	case 3: //KORISNIK SA ZAHTJEVOM
		echo "
			<span class='welcometext' style='position:absolute; top:22px;right:140px;'>(korisnik)</span>
			<div style ='position:relative; display:block; width:1009px; height:100px; margin-left:auto; margin-right:auto'>
			<a style='position:absolute; right:0px; bottom:0px' class='mnbtn' href='logout.php'>ODJAVA</a>
			<div style='position:relative; left:100px; color:#FFFFFF; font-weight:bold'><img style='margin-top:15px'src='images/info.png'></img>&nbsp;Zatražili ste status autora na blogu. Ukoliko Vam administrator odobri zahtjev, moći ćete pisati i uređivati članke.&nbsp;<img src='images/info.png'></img></div></div>";
		break;
	}
}
else
{
	echo "<span class='welcometext' style='position:absolute; top:2px;right:140px;'>Dobrodošli, <b>gost</b>!</span>";
	echo "<div style ='position:relative; display:block; width:1009px; height:100px; margin-left:auto; margin-right:auto'>";
	echo "<a style='position:absolute; right:0px; bottom:0px' class='mnbtn' href='login.php'>PRIJAVA</a>";
	echo "</div>";
}
?>

</div>
</body>
</html>
