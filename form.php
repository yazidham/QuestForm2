<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice formulaire</title>
</head>
<body>
    
    <form action="thanks.php" method="post">
        
        <div>
            <label for="f-name">Prénom :</label><br>
            <input type="text" id="f-name" name="prenom"><br><br>
        </div>
    
        <div>
            <label for="l-name">Nom :</label><br>
            <input type="text" id="l-name" name="nom"><br><br>
        </div>

        <div>
            <label for="mail">E-mail :</label><br>
            <input type="email" id="mail" name="courriel"><br><br>
        </div>

        <div>
            <label for="number">Numero de telephone :</label><br>
            <input type="text" id="pnumber" name="number"><br><br>
        </div>

        <div>
            <label for="choices">Choix du sujet :</label>
            <select name="subject" id="menu">
            <option>--Choix du sujet :--</option>
            <option>chiens</option>
            <option>football</option>
            <option>voitures</option>
            <option>bouff</option>
            </select><br><br>
        </div>

        <div>
            <label for="msg">Message :</label><br>
            <textarea name="message" id="msg"></textarea><br><br>
        </div>

        <div>
            <input type="submit">
        </div>
    </form>

</body>
</html>