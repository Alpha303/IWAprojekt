<?php
if (isset($_SESSION['login']))
{
?>


	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<title>Untitled Document</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="style.css" rel="stylesheet" type="text/css" />
	<!--HTML formatiranje postova -->
	</head>

	<body>
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
			Objavljeno:
			<?php
			print ($datum);
			?>
			&nbsp;&nbsp;&nbsp;Autor: 
			<?php print $autor ?>
			&nbsp;&nbsp;&nbsp;Komentari:
			<?php print $broj_komentara;
			if (($_SESSION['user_type']) == 0)
			{
			?>
			<form action="delete_post.php" method="post">
			<input name="post_id" type="hidden" value="<?php echo $post_id?>">
			<input style="position:absolute;top:7px; right:7px" name="submit" type="image" src="images/delete.png" align="right" alt="Delete" title="Obriši post" />
			</form>
			<?php
			}
			?>
			</span>
			</td>
		</tr>
		<tr>
			<td>
			<img class="break" src="images/break.png"/>
			</td>
		</tr>
		<tr>
			<td align="center">
			<img src="<?php echo $clanak_slika; ?>" width="587" height="129"/>
			</td>
		</tr>
	  <tr>
		<td class="tekst" ><?php print substr ($tekst, 0, 500); //Prikaži samo skraćenu verziju članka
		echo "...";
		?>
		<a href="open_post.php?id=<?php echo $post_id ?>">Više >>></a>
		</td>
	  </tr>
	  <tr>
	  <td><img class="break" src="images/break.png"/></td>
	  </tr>
	  <tr>
	  <td><span class="datum">Oznake:&nbsp;<span color=#FFFFFF><?php echo $oznaka ?></span></span></td>
	  </tr>
	</table>
	<br />
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