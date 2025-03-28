<?php
//config connection
$host      = "localhost";
$port      = "5432";
$dbname    = "schoolar";
$user      = "postgres";
$password   = "unicesmag";

//create connetion
$conn = pg_connect("
host=$host
port=$port
dbname=$dbname
user=$user
password=$password
");

if(!$conn){
    die("Connection error: ". pg_last_error());


}else{
    echo "Succes connection";
}
?>