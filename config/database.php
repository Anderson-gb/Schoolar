<?php

$host      = "aws-0-us-east-1.pooler.supabase.com";
$port      = "6543";
$dbname    = "postgres";
$user      = "postgres.qazrpjzoqotajnferqfz";
$password   = "unicesmag@@";

//config connection
/*$host      = "localhost";
$port      = "5432";
$dbname    = "schoolar";
$user      = "postgres";
$password   = "unicesmag";
*/
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