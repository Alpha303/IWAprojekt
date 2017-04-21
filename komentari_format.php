<?php
//Provjeri da li je korisnik ulogiran, te da li ima status administratora ili autora
if (isset($_SESSION['login']))
{

?>	
	
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Untitled Document</title>
	<link href="style.css" rel="stylesheet" type="text/css" />
	</head>
	<?php
	$post_id = $_GET["id"];
	?>
	<body>
	<table class="commenttable" align="center" width="620">
		<tr>
			<td>
				
				<?php
				
				if ($brojkom != 0)
				{
				echo "<img src= $korisnik_slika ?> &nbsp;";
				echo $datum;
					if ($user === 'admin')
					{
						echo "<span style='color:#F00; font-weight:bold'> $user </span> kaže:";
					}
					else
					{
						echo "<span style='font-weight:bold'> $user </span> kaže:";
					}
				}
				else {}	
					
				?>
					
				
			</td>
			<td align="right">
			<?php if (($_SESSION['user_type'] == 0) && ($brojkom != 0))
			{ ?>
			<form action="delete_comment.php" method="post">
			<input name="komentar_id" type="hidden" value="<?php echo $komentar_id?>" />
			<input name="post_id" type="hidden" value="<?php echo $post_id?>" />
			<input name="submit" type="image" src="images/delete.png" align="right" title="Obriši komentar" /> 
			</form>
			<?php } ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php
				if ($brojkom == 0)
				{
				echo "Nema komentara!";
				}
				else 
				{
					if ($user === 'admin')
					{
						echo "<span style='color:#F00'> $tekst </span>";
					}
					else
					{
						echo $tekst;
					}
				}
				
				?>
			</td>
		</tr>
		<tr>
			<td>
			</td>
		</tr>





	</table>

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