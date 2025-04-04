<?php
//config connection
include('../config/database.php');




$email     = $_POST['e_mail'];
$passwd   = $_POST['p_sswd'];
$sql ="SELECT 
      --id,
    --  email,
     --password
     COUNT(id) as total
from 
      users  
where
   email = '$email' and 
   password = '$passwd' and
    status = true
    group by 
    id;
    
 	";

$res = pg_query($conn, $sql);
if($res){
       $row = pg_fetch_assoc($res);
       if($row['total'] > 0){
        echo "loging ok";
         
      }else { 
        echo "login failed";

       
    }
    
}

?>