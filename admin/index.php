<?php

require_once('../connexion.php');

if(isset($_POST['mCle'])){
    $mCle = trim(addslashes(htmlspecialchars($_POST['mCle'])));
    $sql1 = "SELECT * FROM articles a INNER JOIN continent c ON a.Id_continent=c.Id_continent WHERE Nom LIKE '%$mCle%' OR Pays LIKE '%$mCle%' OR Auteur LIKE '%$mCle%' OR Type_trip LIKE '%$mCle%' OR Recit LIKE '%$mCle%' OR Recit1 LIKE '%$mCle%' OR Recit2 LIKE '%$mCle%' OR Recit3 LIKE '%$mCle%'";
}

if(isset($sql1)){
    session_start();
    $res1 = mysqli_query($connex,$sql1);
}

if(isset($res1)){
    
    var_dump(mysqli_num_rows($res1));
    if(mysqli_num_rows($res1) != 0){
        
        while($line = mysqli_fetch_assoc($res1)){
            $data1[] = $line; 
        };
        
        $_SESSION['recherche'] = $data1;
        var_dump($data1);
    }
}

// var_dump(isset($_SESSION['recherche']));

?>

<?php require_once('../partials/header.php'); ?>

<form action="" method="post">
        <div class="input-group justify-content-end">
            <input type="search" class="form-control col-4 text-center" name="mCle" placeholder="Recherche">
            <button type="submit">
                <i class="fa fa-search"></i>
            </button>
        </div>
    </form>

<div id="corpsPage">
           
</div>

<?php require_once('../partials/footer.php'); ?>