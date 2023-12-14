<?php session_start()?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Exercice :

1 ul avec 4 li
    -> page Accueil
    -> Page Informations
    -> Page Formulaire
    -> Page Deconnexion

Dans la page d'accueil, affichez "bonjour" suivi de votre nom (le nom doit être obtenu a l'aide du get
Dans la page information, affichez votre nom, prénom, age les uns en dessous des autres (infos obtenu depuis l'url)
Dans la page formulaire, affichez un formulaire avec 4 input texte, 1 input number et 1 input submit
Dans la page de deconnexion, affichez uniquement un bouton de deconnexion

Les ul et li doivent tout le temps apparaitre.  -->
<ul>
       <a href="?page=accueil"><li >Accueil</li></a>
       <a href="?page=infos"><li>Informations</li></a>
       <a href="?page=formulaire"><li>Formulaire</li></a>
        <a href="?page=deconnexion"><li>Deconnexion</li></a>
  
</ul>         
    <?php
    // isset -> vérife si la variable existe si elle est true ou false
    if (isset($_GET['page'])){
        if ($_GET['page'] == "accueil"){
            echo "Bonjour Izaline";
        }
         if ($_GET['page'] == "infos"){
            echo "Dhalluin " . 'Izaline' . " 26 ans";
        }
        if ($_GET['page'] == "formulaire"){
            echo '<form method="POST">
            <input type="text" name="prenom">
            <input type="text" name="nom">
            <input type="text" name="age">
            <input type="submit" name="submit">
          </form>';
        
        }
         if (isset($_POST['submit'])) {
        echo "Je m'appelle " . $_POST['prenom'] . ' ' . $_POST['nom'] . " j'ai " . $_POST['age'] . " ans.";
    }
         if ($_GET['page'] == "deconnexion"){
            echo "<button>Deconnexion</button>";
        }
    }
        $_SESSION['user'] = 'Izaline';
        var_dump($_SESSION['user']);

    ?> 
<!-- correction -->
    <!-- <ul>
    <a href="?page=accueil&name=Thomas"><li>Accueil</li></a>
    <a href="?page=informations&nom=Brandt&prenom=Thomas&age=35"><li>Informations</li></a>
    <a href="?page=formulaire"><li>Formulaire</li></a>
    <a href="?page=deconnexion"><li>Deconnexion</li></a>
    </ul>



    if (isset($_GET['page']) && $_GET['page'] == "accueil"){
        if (!isset($_GET['name'])){
            echo "bonjour, prénom non défini";
        }
        if (isset($_GET['name'])){
            echo "Bonjour " . $_GET['name'];
        }
    }
    if (isset($_GET['page']) && $_GET['page'] == "informations"){
        if (isset($_GET['nom'])){
            echo "<p>" . $_GET['nom'] . "</p>";
        }
        if (isset($_GET['prenom'])){
            echo "<p>" . $_GET['prenom'] . "</p>";
        }
        if (isset($_GET['age'])){
            echo "<p>" . $_GET['age'] . "</p>";
        }

    }
    if (isset($_GET['page']) && $_GET['page'] == "formulaire"){
        echo '<form>
        <input type="text"><input type="text"><input type="text"><input type="text">
        <input type="number"><input type="submit">
        </form>';
    }

    if (isset($_GET['page']) && $_GET['page'] == "deconnexion"){
        echo '<form class="formulaire"><input type="submit" value="deconnexion"></form>';
    } --> 

    <!-- // if (isset($_GET['page']) && $_GET['page'] == "informations" && isset($_GET['nom']) && isset($_GET['prenom']) && isset($_GET['age'])){
    //     echo "<p>" . $_GET['nom'] . "</p>";
    //     echo "<p>" . $_GET['prenom'] . "</p>";
    //     echo "<p>" . $_GET['age'] . "</p>";
    // }
 -->





</body>
</html>
