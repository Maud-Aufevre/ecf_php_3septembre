<?php

require_once('../connexion.php');
if(isset($_POST['soumis'])){
    if(!empty($_POST['login']) && !empty($_POST['pass'])){
        $login = trim(htmlentities(addslashes($_POST['login'])));
        $pass = md5(trim(htmlentities(addslashes($_POST['pass']))));
        $sql = "SELECT * FROM utilisateurs WHERE Login='$login' AND Mdp='$pass'";
        $res = mysqli_query($connex,$sql);

        var_dump(mysqli_num_rows($res));
        if(mysqli_num_rows($res) != 0){
            $data = mysqli_fetch_assoc($res);
            session_start();
            $_SESSION['user'] = $data;
            // var_dump($_SESSION);
            header('location:liste.php');
        }else{
            $erreur = '<div class="alert alert-danger">
            <strong>Identifiant et mot de passe incorrects</strong>
            </div>';
        }

    }
}

?>


<?php require_once('../partials/header.php') ?>

<div class="container">
    <div class="offset-3 col-6">
        <div class="card my-3">
            <div class="card-header text-center">Authentification</div>
            <div class="card-body">
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="login">Identifiant*</label>
                        <input class="form-control" type="text" id="login" name="login" placeholder="Votre identifiant" required/>
                    </div>
                    <div class="form-group">
                        <label for="pass">Mot de passe*</label>
                        <input class="form-control" type="password" id="pass" name="pass" placeholder="Votre mot de passe" required/>
                    </div>
                    <div class="text-center">
                        <button class="btn btn-primary" name="soumis" type="submit">Connexion</button>
                    </div>
                </form>
            </div>
            <div class="card-footer">
                <?php if(isset($erreur)){
                    echo $erreur;
                } ?>
            </div>
        </div>
    </div>
</div>

<?php require_once('../partials/footer.php') ?>