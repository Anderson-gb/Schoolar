<?php
include('../config/database.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="3" align="center">
        <tr>
            <td>Firstname</td>
            <td>Lastname</td>
            <td>E-mail</td>
            <td>Status</td>
            <td>...</td>
        </tr>
       
        <?php
            //Here code
            $sql = "
            select
               firstname,
               lastname,
               email,
               case when status = true then 'Active' else 'No active' end as status
            from
                users
            ";
            $res = pg_query($conn, $sql);
            if(!$res){
                echo "query error";
                exit;
            }

            while($row = pg_fetch_assoc($res)){
                echo "<tr>";
                echo "<td>".$row['firstname']."</td>";
                echo "<td>".$row['lastname']."</td>";
                echo "<td>".$row['email']."</td>";
                echo "<td>".$row['status']."</td>";
                echo "<td>";
                echo "<a href=''><img src ='icon/lapiz.png' width='30'></a>";
                echo "<a href=''><img src = 'icon/lupa.png' width='30'></a>";
                echo "<a href=''><img src = 'icon/elimi.png' width='30'></a>";
                echo "</td>";
                echo "</tr>";

            }

        ?>
    </table>
</body>
</html>