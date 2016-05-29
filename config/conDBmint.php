<?php
################### Config ######################
ini_set('max_execution_time', 3000); 
$servername = 'WIN-BELL'; 
$databasename = 'master'; 
$user = ''; 
$pass = ''; 

$connection ="DRIVER={SQL Server};Server=WIN-BELL;Database=Master;Trusted_Connection=True";
$conn = odbc_connect($connection,'','');

?>
