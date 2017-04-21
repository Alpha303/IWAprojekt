<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<title>Blog.projekt - Prijava</title>
<head>
<link href="style.css" rel="stylesheet" type="text/css" />
<?php 
include("header.php");
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>


<?php
session_start();
if (empty ($_SESSION['login_failed'])) //Ukoliko korisnik unese krive podatke bit će redirektiran sa "login-provjera.php" uz ovu varijablu postavljenu na 1
	{
?>	

	<br /><br /><br /><br /><br /><br />
	<form action="login-provjera.php" method="post">
	<table width="200" border="0" align="center"class="logintable">
	  	<tr valign="middle">
	    <td>Korisničko ime:
	    	<table width="100" border="0" align="center">
	  		<tr>
	    		<td><input name="user" type="text" 		/>		
	        	</td>
	  		</tr>
			</table>
	    </td>
	  	</tr>
	  	<tr>
	    <td>Lozinka:
	    	<table width="60" border="0" align="center">
	  		<tr>
	    	<td><input name="pass" type="password" maxlength="20" />
	        </td>
	  		</tr>
			</table>  
	    </td>
	    </tr>
	  <tr>
	      <td align="center" class="error">
	      
	      </td>
	  </tr>
	  <tr>
	      <td align="center">
	    	<input name="login" type="submit" value="Prijava" />	        
	      </td>
	  </tr>
	</table>
	</form>
<?php
	}
else //Ukoliko je 'login_failed' = 1 tada se pokazuje "NEVAŽEĆI PODACI"
	{
?>
	<br /><br /><br /><br /><br /><br />
	<form action="login-provjera.php" method="post">
	<table width="200" border="0" align="center"class="logintable">
	  	<tr>
	    <td>Korisničko ime:
	    	<table width="100" border="0" align="center">
	  		<tr>
	    		<td><input name="user" type="text" 		/>		
	        	</td>
	  		</tr>
			</table>
	    </td>
	  	</tr>
  		<tr>
	    <td>Lozinka:
	    	<table width="60" border="0" align="center">
	  		<tr>
	    	<td><input name="pass" type="password" maxlength="20" />
	        </td>
	  		</tr>
			</table>  
	    </td>
	    </tr>
	  <tr>
	      <td align="center" class="error">
	      <label>NEVAŽEĆI PODACI</label>
	      </td>
	  </tr>
	  <tr>
	      <td align="center">
	    	<input name="login" type="submit" value="Prijava" /> 
	    </td>
	  </tr>
	</table>
	</form>
<?php
	$_SESSION=array(); //Uništavaju se sve SESSION varijable
	}
?>
</body>
</html>