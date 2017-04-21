<?php
include('connect.php');

// Povuci user i pass iz forme
$username=$_POST['user'];
$password=$_POST['pass']; 

//Provjera

$query_login = ("SELECT * FROM korisnik WHERE korisnicko_ime='$username' and lozinka='$password'");
$query_result = mysqli_query($connect, $query_login);
$query_count = mysqli_num_rows($query_result);
$query_array = mysqli_fetch_array ($query_result);
$user_id = $query_array['korisnik_id'];
$user_type = $query_array['tip_id'];

if($query_count==1){
	session_start();
	$_SESSION['login'] = "1";
	$_SESSION['user'] = $username;
	$_SESSION['pass'] = $password;
	$_SESSION['user_id'] = $user_id;
	$_SESSION['user_type'] = $user_type;
	header("location:index.php");
	}
else {
	session_start();
	$_SESSION= array();
	$_SESSION['login_failed'] = "1";
	header("location:login.php");
	}
?>