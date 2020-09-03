<?php

require_once('authentification.php');
require_once('../connexion.php');

// var_dump($_SESSION['user']);
if(isset($_POST['mCle'])){
    $mCle = trim(addslashes(htmlspecialchars($_POST['mCle'])));
    $sql = "SELECT * FROM articles a INNER JOIN continent c ON a.Id_continent=c.Id_continent WHERE Nom LIKE '%$mCle%' OR Pays LIKE '%$mCle%' OR Auteur LIKE '%$mCle%' OR Type_trip LIKE '%$mCle%' OR Recit LIKE '%$mCle%' OR Recit1 LIKE '%$mCle%' OR Recit2 LIKE '%$mCle%' OR Recit3 LIKE '%$mCle%'";
}else{
    $sql = "SELECT * FROM articles a INNER JOIN continent c ON a.Id_continent=c.Id_continent";
}
$resultat = mysqli_query($connex,$sql);

?>

<?php require_once('../partials/header.php'); ?>

<div class="container">
    <h1>Blog-Trotteurs / admin</h1>
    <h2 id="titreArticles">Liste des articles</h2>
    <form action="" method="post">
        <div class="input-group justify-content-end">
            <input type="search" class="form-control col-4 text-center" name="mCle" placeholder="Recherche">
            <button type="submit">
                <i class="fa fa-search"></i>
            </button>
        </div>
    </form>
    <table>
        <thead id="entetes">
            <tr>
                <th>Id</th>
                <th>Auteur</th>
                <th>Photo</th>
                <th>Pays</th>
                <th>Description</th>
                <th>Récit</th>
                <th colspan="3">Actions</th>
            </tr>
        </thead>
        <tbody id="articlesBlog">
        <?php if($_SESSION['user']['Droits']==1){ ?>
            <div class="text-right">
                <a id="bAdd" class="btn btn-warning" href="ajouter.php"><i class="fa fa-plus"></i> Ajouter</a>
            </div>
        <?php } ?>
            <?php while($data = mysqli_fetch_assoc($resultat)){ ?>
            <tr>
                <td><?=$data['Id']; ?></td>
                <td><?=$data['Auteur']; ?></td>
                <td>
                    <img src="../assets/images/<?=$data['Image'];?>" width="120" alt={e.image}/>
                </td>
                <td><?=$data['Pays']; ?></td> 
                <td><?=$data['Type_trip']; ?></td>
                <td><?=$data['Recit']; ?></td>

                <td>
                    <a class="btn btn-success" href="detail.php?id=<?=$data['Id'];?>"><i class="fas fa-info"></i> Détail</a>
                </td>
                <?php if($_SESSION['user']['Droits']==1 || $_SESSION['user']['Droits']==2){ ?>
                <td>
                    <a class="btn btn-warning" href="editer.php?id=<?=$data['Id'];?>"><i class="fas fa-pen"></i> Editer</a>
                </td>
                <?php } ?>
                <?php if($_SESSION['user']['Droits']==1){ ?>
                <td>
                    <a class = "btn btn-danger" onclick="return confirm('êtes vous sûr de vouloir supprimer cet article?')" href="supprimer.php?id=<?=$data['Id'];?>"><i class="fa fa-trash"></i> Supprimer</a>
                </td>
                <?php } ?>
            <?php } ?>
            </tr>
        </tbody>
    </table>
</div>


<?php require_once('../partials/footer.php'); ?>