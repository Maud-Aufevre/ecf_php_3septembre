<?php

require_once('authentification.php');
require_once('../connexion.php');
$sql1 = "SELECT Id_continent, Nom FROM  continent";
$res=mysqli_query($connex,$sql1);

if(isset($_GET['id'])){
    $id = (int)$_GET['id'];
    $sql = "SELECT * FROM articles a INNER JOIN continent c ON a.Id_continent=c.Id_continent WHERE Id=$id";
    $resultat = mysqli_query($connex,$sql);
    $data = mysqli_fetch_assoc($resultat);

    if(isset($_POST['soumis'])){
        $id_continent = $_POST['continent'];
        $pays = trim(htmlentities(addslashes($_POST['pays'])));
        $auteur = trim(htmlentities(addslashes($_POST['auteur'])));
        $type_trip = trim(htmlentities(addslashes($_POST['type_trip'])));
        $recit = trim(htmlentities(addslashes($_POST['recit'])));
        $recit1 = trim(htmlentities(addslashes($_POST['recit1'])));
        $recit2 = trim(htmlentities(addslashes($_POST['recit2'])));
        $recit3 = trim(htmlentities(addslashes($_POST['recit3'])));
        $image = $data['Image'];
        if($_FILES['image']['name']!=""){
            $image =  $_FILES['image']['name'];
        }
        $destination = '../assets/images/';
        $destination2 = '../assets/images/HD/';
        $imageHD1 = $data['ImageHD1'];
        if($_FILES['imageHD1']['name']!=""){
            $imageHD1 = $_FILES['imageHD1']['name'];
        }
        $imageHD2 = $data['ImageHD2'];
        if($_FILES['imageHD2']['name']!=""){
            $imageHD2 = $_FILES['imageHD2']['name'];
        }
        $imageHD3 = $data['ImageHD3'];
        if($_FILES['imageHD3']['name']!=""){
            $imageHD3 = $_FILES['imageHD3']['name'];
        }


        if($image != $data['Image']){
            unlink('../assets/images/'.$data['Image']);
        };
        if($imageHD1 != $data['ImageHD1']){
            unlink('../assets/images/HD/'.$data['ImageHD1']);
        };
        if($imageHD2 != $data['ImageHD2']){
            unlink('../assets/images/HD/'.$data['ImageHD2']);
        };
        if($imageHD3 != $data['ImageHD3']){
            unlink('../assets/images/HD/'.$data['ImageHD3']);
        };

        move_uploaded_file($_FILES['image']['tmp_name'], $destination.$image);
        move_uploaded_file($_FILES['imageHD1']['tmp_name'], $destination2.$imageHD1);
        move_uploaded_file($_FILES['imageHD2']['tmp_name'], $destination2.$imageHD2);
        move_uploaded_file($_FILES['imageHD3']['tmp_name'], $destination2.$imageHD3);

           
        $sql2 = "UPDATE articles SET Id_continent='$id_continent', Pays='$pays', Auteur='$auteur', Type_trip='$type_trip', Recit='$recit', Recit1='$recit1', Recit2='$recit2', Recit3='$recit3', Image='$image', ImageHD1='$imageHD1', ImageHD2='$imageHD2', ImageHD3='$imageHD3' WHERE Id = '$id'";

        $resu = mysqli_query($connex,$sql2);
        
        if($resu){
            header('location:liste.php');
        }else{
            echo 'Echec de modification';
        }
        
    }
  
};
?>

<?php require_once('../partials/header.php');?>
<div class="container">
    <div class="card">
        <div class="card-header text-center">
            Modification de l'article: <?=$data['Id'];?>
        </div>
        <div class="card-body">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col">
                        <label for="nom">Pays</label>
                        <input type="text" id="pays" class="form-control" name="pays" value="<?=$data['Pays'];?>">
                    </div>
                    <div class="col">
                        <label for="auteur">Auteur</label>
                        <input type="text" id="auteur" class="form-control" name="auteur" value="<?=$data['Auteur'];?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                    <label for="trip">Trip</label>
                        <input type="text" id="type_trip" class="form-control" name="type_trip" value="<?=$data['Type_trip'];?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="continent">Continent</label>
                        <select class="form-control" name="continent" id="continent">
                            <option value="<?=$data['Id_continent'];?>"><?=$data['Nom'];?></option>
                            <?php while($line = mysqli_fetch_assoc($res)){ ?>
                                <option value="<?=$line['Id_continent'];?>"><?=$line['Nom'];?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="image">Image principale</label>
                    <input class="form-control" type="file" name="image" id="image" value="<?=$data['Image'];?>">
                </div>
                <div>
                    <img src="../assets/images/<?=$data['Image']?>" alt="">
                </div>
                <div class="form-group">
                    <label for="recit">Récit résumé</label>
                    <textarea class="form-control" name="recit" id="recit" cols="30" rows="5"><?=$data['Recit'];?></textarea>
                </div>
                <div class="form-group">
                    <label for="image">Image 1</label>
                    <input class="form-control" type="file" name="imageHD1" id="imageHD1" value="<?=$data['ImageHD1'];?>">
                </div>
                <div>
                    <img src="../assets/images/HD/<?=$data['ImageHD1']?>" width=250 alt="">
                </div>
                <div class="form-group">
                    <label for="recit1">Récit 1</label>
                    <textarea class="form-control" name="recit1" id="recit1" cols="30" rows="5"><?=$data['Recit1'];?></textarea>
                </div>
                <div class="form-group">
                    <label for="imageHD2">Image 2</label>
                    <input class="form-control" type="file" name="imageHD2" id="imageHD2" value="<?=$data['ImageHD2'];?>">
                </div>
                <div>
                    <img src="../assets/images/HD/<?=$data['ImageHD2']?>" width=250 alt="">
                </div>
                <div class="form-group">
                    <label for="recit2">Récit 2</label>
                    <textarea class="form-control" name="recit2" id="recit2" cols="30" rows="5"><?=$data['Recit2'];?></textarea>
                </div>
                <div class="form-group">
                    <label for="image">Image 3</label>
                    <input class="form-control" type="file" name="imageHD3" id="imageHD3" value="<?=$data['ImageHD3'];?>">
                </div>
                <div>
                    <img src="../assets/images/HD/<?=$data['ImageHD3']?>" width=250 alt="">
                </div>
                <div class="form-group">
                    <label for="recit3">Récit 3</label>
                    <textarea class="form-control" name="recit3" id="recit3" cols="30" rows="5"><?=$data['Recit3'];?></textarea>
                </div>
                <a class="btn btn-secondary" href="liste.php">Annuler</a>
                <button type="submit" class="btn btn-primary" name="soumis">Modifier</button>
            </form>
        </div>
    </div>
</div>
<?php require_once('../partials/footer.php');?>