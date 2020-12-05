<?php
    
    session_start();

    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $text = $_POST['textarea'];
    $messageError = "";

    if (!ctype_alnum((str_replace(' ', '', $prenom)))){
        $messageError .= "Le prénom doit uniquement contenir des lettres.";
    }

    if (!ctype_alnum((str_replace(' ', '', $nom)))){
        $messageError .= "Le nom doit uniquement contenir des lettres.";
    }

    if (!ctype_alnum((str_replace(' ', '', $text)))){
        $messageError .= "Le message doit uniquement contenir des lettres et/ou des chiffres.";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $messageError .= "L'adresse email '$email' n'est pas considérée comme valide.";
    }

    echo $messageError;

    if (empty($messageError)){
        // mail ()

        $_SESSION["msgN"] = 0;
        $messageError = "Votre mail c'est bien envoyé !";

        // if (mail pas envoyé){
        //     $messageError = "Votre mail ne c'est pas envoyé, nous allons réglé le problème rapidement. Désolé du dérangement, mais vous pouvez me contacter sur Quent-73@hotmail.fr.";
        // }
    }
    else{
        $_SESSION["msgN"] = 1;
    }

    $_SESSION["msg"] = $messageError;
    header("location:contact.php");

?>