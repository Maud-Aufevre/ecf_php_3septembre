<?php

require_once('authentification.php');
require_once('../connexion.php');

if(isset($_GET['id'])){
    $id = (int)$_GET['id'];
    $sql_image = "SELECT image FROM articles WHERE Id =".$id;
    $res_image = mysqli_query($connex,$sql_image);
    $data_image = mysqli_fetch_assoc($res_image);

    $sql_delete = "DELETE FROM articles WHERE Id =".$id;

    $res_delete = mysqli_query($connex, $sql_delete);

    if($res_delete){
        unlink('../assets/images/'.$data['image']);
        unlink('../assets/images/HD/'.$data['imageHD1']);
        unlink('../assets/images/HD/'.$data['imageHD2']);
        unlink('../assets/images/HD/'.$data['imageHD3']);
        header('location:liste.php');
    }
}

?>