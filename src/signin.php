<?php
//config connection
include('../config/database.php');

session_start();

if(isset($_SESSION['user_id'])){
  header('Refresh: 0; URL=http://localhost/Schoolar/src/home.php');
}

$email     = $_POST['e_mail'];
$passwd   = $_POST['p_sswd'];
$enc_pass = sha1($passwd);
$sql ="SELECT 
    --id,
    --  email,
    --password
    COUNT(id) as total
    from 
     users  
    where
    email = '$email' and 
    password = '$enc_pass' and
    status = true
    GROUP BY
    id;
    
 	";

$res = pg_query($conn, $sql);

if($res){
       $row = pg_fetch_assoc($res);
       if($row['total'] > 0){
        //echo "loging ok";
        $SESSION['user_id'] = $row['id'];
         header('Refresh: 0; URL=http://localhost/Schoolar/src/home.php');
       }else { 
        echo "login failed";

       
    }
    
}

?>