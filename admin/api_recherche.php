<?php

require_once('../connexion.php');
 

session_start();


// while($line = mysqli_fetch_assoc($res)){
//     $data[] = $line; 
// }

// var_dump($_SESSION['recherche']);
// var_dump($_SESSION['recherche']);
if(isset($_SESSION['recherche'])){

    $res1 = $_SESSION['recherche'];
    foreach($res1 as $r){
        $data1[] = $r;
    };
     
    // var_dump($data1);
    echo json_encode($data1);
}








?>