<?php
if (isset($_SESSION['login']) && ($_SESSION['user_type'] == 0 ))
{
?>
	<table align="center" border= 1 width=1000 style='table-layout:fixed'>
		<tr>
			<td width=75><?php echo $korisnik_id ?></td>
			<td width=80>
				<?php switch ($tip_id) 
					{
					case 0:
						echo "ADMIN";
						break;
					case 1:
						echo "AUTOR";
						break;
					case 2:
						echo "KORISNIK";
						break;
					case 3:
						echo "KOR_ZAHTJEV";
						break;
					case 4:
						echo "GOST";
						break;
					}	
				?>

			</td>
			<td style="overflow:hidden;white-space:nowrap" width=102><?php echo $korisnicko_ime ?></td>
			<td style="overflow: hidden; text-overflow:ellipsis;white-space:nowrap" width=53><?php if (!empty ($lozinka)) { echo $lozinka; } else { echo "N/A"; } ?></td>
			<td style="overflow: hidden; text-overflow:ellipsis;white-space:nowrap"  width=120><?php if (!empty ($ime)) { echo $ime; } else { echo "N/A"; } ?></td>
			<td style="overflow: hidden; text-overflow:ellipsis;white-space:nowrap"  width=90><?php if (!empty ($prezime)) { echo $prezime; } else { echo "N/A"; } ?></td>
			<td style="overflow: hidden; text-overflow:ellipsis;white-space:nowrap" width=200><?php if (!empty ($email)) { echo $email; } else { echo "N/A"; } ?></td>
			<td style="overflow: hidden; text-overflow:ellipsis;white-space:nowrap" ><?php if (!empty ($slika)) { echo $slika; } else { echo "N/A"; } ?></td>
			<td align="center" width=40><?php echo "<a href='edit_user.php?userid=" . $korisnik_id . "'><img src=images/uredi.png></a>" ?> </td>
		</tr>
	</table>
	

	
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