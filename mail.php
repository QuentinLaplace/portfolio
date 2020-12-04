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



        try{
            $mail = new PHPMailer();
            $mail->SMTPSecure = 'tls';
            $mail->Username = "quent-73@hotmail.com";
            $mail->Password = "alexandrajoly73";
            $mail->AddAddress("quent-73@hotmail.com");
            $mail->FromName = "My Name";
            $mail->Subject = "My Subject";
            $mail->Body = "My Body";
            $mail->Host = "smtp.live.com";
            $mail->Port = 587;
            $mail->IsSMTP();
            $mail->SMTPAuth = true;
            $mail->From = $mail->Username;
            $mail->Send();
        }
        catch(Exception $e ){
            echo $e->toString();
        }



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