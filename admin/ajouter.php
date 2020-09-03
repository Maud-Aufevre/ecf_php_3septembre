<?php

require_once('authentification.php');
require_once('../connexion.php');

$sql_continent = "SELECT * FROM continent";
$res = mysqli_query($connex,$sql_continent);


if(isset($_POST['soumis'])){
    $pays = trim(htmlentities(addslashes($_POST['pays'])));
    $auteur = trim(htmlentities(addslashes($_POST['auteur'])));
    $type_trip = trim(htmlentities(addslashes($_POST['type_trip'])));
    $recit = trim(htmlentities(addslashes($_POST['recit'])));
    $recit1 = trim(htmlentities(addslashes($_POST['recit1'])));
    $recit2 = trim(htmlentities(addslashes($_POST['recit2'])));
    $recit3 = trim(htmlentities(addslashes($_POST['recit3'])));
    $continent = (int)$_POST['continent'];
    $destination = '../assets/images/';
    $destination2 = '../assets/images/HD/';
    $image =  $_FILES['image']['name'];
    $imageHD1 = $_FILES['imageHD1']['name'];
    $imageHD2 = $_FILES['imageHD2']['name'];
    $imageHD3 = $_FILES['imageHD3']['name'];
    
    move_uploaded_file($_FILES['image']['tmp_name'],$destination.$image);
    move_uploaded_file($_FILES['imageHD1']['tmp_name'],$destination2.$imageHD1);
    move_uploaded_file($_FILES['imageHD2']['tmp_name'],$destination2.$imageHD2);
    move_uploaded_file($_FILES['imageHD3']['tmp_name'],$destination2.$imageHD3);

    if($pays != "" && $type_trip != "" && $auteur != "" && $recit != "Max 300 caractères" && $recit1 != "Max 800 caractères" && $recit2 != "Max 800 caractères" && $recit3 != "Max 800 caractères" && isset($image) && isset($imageHD1) && isset($imageHD2) && isset($imageHD3) && $continent != "Choisir"){
        $sql_new = "INSERT INTO articles(Pays,Type_trip,Auteur,Recit,Recit1,Recit2,Recit3,Image,ImageHD1,ImageHD2,ImageHD3,Id_continent) VALUES('$pays','$type_trip','$auteur','$recit','$recit1','$recit2','$recit3','$image','$imageHD1','$imageHD2','$imageHD3','$continent')";
        $res_new = mysqli_query($connex,$sql_new);
        if($res_new){
            header('location:liste.php');
        }else{
            echo "Echec d'insertion";
        }
    }else{
        $warning = '<div class="alert alert-warning">
        <strong>Attention :</strong> Veuillez renseigner tous les champs
        </div>';
    }
    
}

?>


<?php require_once('../partials/header.php');?>
<div class="container">
    <div class="card">
        <div class="card-header text-center">
            Ajout d'un article:
        </div>
        <div>
            <?php
                if(isset($warning)){
                    echo $warning;
                }          
            ?>
        </div>
        <div class="card-body">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col">
                        <label for="nom">Pays</label>
                        <input type="text" id="pays" class="form-control" name="pays">
                    </div>
                    <div class="col">
                        <label for="auteur">Auteur</label>
                        <input type="text" id="auteur" class="form-control" name="auteur">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                    <label for="trip">Trip</label>
                        <input type="text" id="type_trip" class="form-control" name="type_trip">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="continent">Continent</label>
                        <select class="form-control" name="continent" id="continent">
                            <option>Choisir</option>
                            <?php while($line = mysqli_fetch_assoc($res)){ ?>
                                <option value="<?=$line['Id_continent'];?>"><?=$line['Nom'];?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="image">Image principale</label>
                    <input class="form-control" type="file" name="image" id="image">
                </div>
                <div class="form-group">
                    <label for="recit">Récit résumé</label>
                    <textarea class="form-control" name="recit" id="recit" cols="30" rows="5">Max 300 caractères</textarea>
                </div>
                <div class="form-group">
                    <label for="image">Image 1</label>
                    <input class="form-control" type="file" name="imageHD1" id="imageHD1">
                </div>
                <div class="form-group">
                    <label for="recit1">Récit 1</label>
                    <textarea class="form-control" name="recit1" id="recit1" cols="30" rows="5">Max 800 caractères</textarea>
                </div>
                <div class="form-group">
                    <label for="imageHD2">Image 2</label>
                    <input class="form-control" type="file" name="imageHD2" id="imageHD2">
                </div>
                <div>
                <div class="form-group">
                    <label for="recit2">Récit 2</label>
                    <textarea class="form-control" name="recit2" id="recit2" cols="30" rows="5">Max 800 caractères</textarea>
                </div>
                <div class="form-group">
                    <label for="image">Image 3</label>
                    <input class="form-control" type="file" name="imageHD3" id="imageHD3">
                </div>
                <div class="form-group">
                    <label for="recit3">Récit 3</label>
                    <textarea class="form-control" name="recit3" id="recit3" cols="30" rows="5">Max 800 caractères</textarea>
                </div>
                <a class="btn btn-secondary" href="liste.php">Annuler</a>
                <button type="submit" class="btn btn-primary" name="soumis">Ajouter</button>
            </form>
        </div>
    </div>
</div>
<?php require_once('../partials/footer.php');?>