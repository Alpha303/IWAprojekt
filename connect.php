<?php
$db_host= 'localhost';
$db_user= 'iwa_2012';
$db_pass= 'FOI';
$db_name= 'iwa_2012_kz_projekt';

$connect= mysqli_connect($db_host, $db_user, $db_pass, $db_name) or die ('Podaci za spajanje na bazu su netočni!');
mysqli_set_charset($connect, 'utf8');

?>