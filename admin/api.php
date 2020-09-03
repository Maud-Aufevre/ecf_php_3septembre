<?php

require_once('../connexion.php');

$sql = "SELECT * FROM articles a INNER JOIN continent c ON a.Id_continent=c.Id_continent";

$res = mysqli_query($connex,$sql);



while($line = mysqli_fetch_assoc($res)){
    $data[] = $line; 
}

// var_dump($data);
echo json_encode($data);



?>