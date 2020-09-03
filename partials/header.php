<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>

<title>Blog-trotteurs</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../assets/css/header.css">
<link rel="stylesheet" href="../assets/css/footer.css">
<link rel="stylesheet" href="../assets/css/adminx.css">
<link rel="stylesheet" href="../assets/css/accueil.css">
</head>
<body>
<h1>Blog-trotteurs</h1>
<header id="dessusBandeau">
    <ul id="réseauxSociaux">
        <li><a href="#"><img src="../assets/images/facebook.png" alt="facebook"/></a></li>
        <li><a href="#"><img src="../assets/images/instagram.png" alt="instagram"/></a></li>
        <li><a href="#"><img src="../assets/images/twiter.png" alt="twiter"/></a></li>
    </ul>
    
    <ul id="logoEntete">
        <li><a href="blog14juin.html"><img src="../assets/images/logo-blog-trotteurs.jpg" alt="logo blog trotteurs"/></a></li>
        <li>le plein d'idées et d'expériences pour créer vos propres voyages ...</li>
    </ul>

</header>
<main id="bandeau">
    <div id="texteBandeau">
        <p>Et vous, vous partez où ?...</p>
    </div>
</main>
<nav>
    <ul id="menu">
    
        <li><a id="navAccueil" activeClass="active" href="../admin/index.php">Accueil</a></li>
        <li><a id="navContact"  activeClass="active" href="../admin/index_admin.php">Administration</a></li>
        <li class="nav-item dropdown ml-auto">
             <a class="nav-link dropdown-toggle text-body" href="#" id="navbardrop" data-toggle="dropdown" ><NavLink activeClassName="active"><i class="fa fa-power-off" style="font-size:24px"></i></NavLink>
            </a>
           
            <div class="dropdown-menu">
                <a class="dropdown-item" href="../admin/register.php">Connexion</a>
              <a class="dropdown-item" href="../admin/logout.php">Déconnexion</a>
            </div>
        </li>
    </ul>
</nav>