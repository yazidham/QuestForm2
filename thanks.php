<?php

$errors = [];

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
         
        if(!isset($_POST["prenom"]) || trim($_POST["prenom"]) === '') 
            $errors[] = "Le prénom est obligatoire";
        if(!isset($_POST["nom"]) || trim($_POST["nom"]) === '') 
            $errors[] = "Le nom est obligatoire";
        if(!isset($_POST["number"]) || trim($_POST["number"]) === '') 
            $errors[] = "Le numéro est obligatoire";
        if(!isset($_POST["message"]) || trim($_POST["message"]) === '') 
            $errors[] = "Le message est obligatoire";
        if(!filter_var(($_POST["courriel"]), FILTER_VALIDATE_EMAIL)){
            $errors[] = "Votre E-mail n'est pas valide";
        }if ($_POST["subject"] === "--Choix du sujet :--"){
            $errors[] = "veuillez choisir un sujet";
        }if (count($errors) > 0){
            foreach ($errors as $error){
                echo $error . "<br>";
            }
        }elseif(empty($errors)) {
            $fname= $_POST["prenom"];
            $name= $_POST["nom"];
            $mail= $_POST["courriel"];
            $number= $_POST["number"];
            $message= $_POST["message"];
            $choix= $_POST["subject"];
            ?>

            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Document</title>
            </head>
            <body>
                <p>
                    <?php echo "Merci $fname $name de nous avoir contacté à propos de $choix . 
                    Un de nos conseillers vous contactera soit à l’adresse $mail ou par téléphone au $number dans les plus brefs délais pour traiter votre demande :
                    $message"?>
                </p>
            </body>
            </html>
<?php
        }
    }
?>