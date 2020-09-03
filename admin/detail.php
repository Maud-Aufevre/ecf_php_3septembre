<?php

require_once('authentification.php');
require_once('../connexion.php');

// var_dump($_GET);
if(isset($_GET['id'])){
    $id = (int)$_GET['id'];
    $sql = "SELECT * FROM articles a INNER JOIN continent c ON a.Id_continent=c.Id_continent WHERE Id=$id";
    $resultat = mysqli_query($connex,$sql);
    $data = mysqli_fetch_assoc($resultat);
};

require_once('../partials/header.php');
?>
<br/>
<div class="container mx-6">
    <h1>Détail</h1>
    <div class="text-right">
    <a class= "btn" href="liste.php"><i class="fas fa-arrow-alt-circle-left" style="font-size:36px"></i> Retour</a>
    </div>
    <h2 class="h3 text-center">Un voyage en <?=$data['Nom']?> ...</h2>
    <br/>
    <div class="row shadow p-3 mb-5 bg-white rounded mt-6">
        <div class="col-8">
            <img src="../assets/images/HD/<?=$data['ImageHD1'];?>" alt="" class="img-thumbnail"/>
        </div>
        <div class="col-4">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <strong>Pays : </strong><?=$data['Pays'];?>
                </li>
                <li class="list-group-item">
                    <strong>Trip : </strong><?=$data['Type_trip'];?>
                </li>
                <li class="list-group-item text-right">
                    <i>Par - </i><i><?=$data['Auteur'];?></i><i> -</i>
                </li>
            </ul>
        </div>
    </div>
    <br/>
    <div class="mb-3">
    <?=$data['Recit1'];?>
    </div>
    <div>
    <img class="img-fluid mb-6" src="../assets/images/HD/<?=$data['ImageHD1'];?>" alt="visuel 1"/>
    </div>
    <br/>
    <div class="mb-3">
    <?=$data['Recit2'];?>
    </div>
    <div>
    <img class="img-fluid mb-6" src="../assets/images/HD/<?=$data['ImageHD2'];?>" alt="visuel 2"/>
    </div>
    <br/>
    <div class="mb-3">
    <?=$data['Recit3'];?>
    </div>
    <div>
    <img class="img-fluid mb-6" src="../assets/images/HD/<?=$data['ImageHD3'];?>" alt="visuel 3"/>
    </div>
    <div class="text-right">
    <a class= "btn" href="liste.php"><i class="fas fa-arrow-alt-circle-left" style="font-size:36px"></i> Retour</a>
    </div>
</div>
<br/>

<?php
require_once('../partials/footer.php');
?>