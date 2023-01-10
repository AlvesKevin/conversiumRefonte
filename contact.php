<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contactez-nous</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="/img/icone.jpg">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body>
<div id="navBar">
    <a href="index.html"><img id="logoConversium" src="img/logoConversium.png" alt="logo conversium"></a>
    <div id="containerTexteNavBar">
        <div><a href="index.html">Accueil</a></div>
        <div><a href="quiSommesNous.html">Qui sommes-nous ?</a></div>
        <div><a href="generationLead.html">Génération de lead</a></div>
        <div><a href="developpementWeb.html">Développement web</a></div>
        <div><a href="chatbot.html">Notre chatbot</a></div>
    </div>
    <div id="contactezNousNavBar">
        <img id="phone" src="img/phone.png" alt="téléphone">
        <div><a href="contact.html">Contactez nous</a></div>
    </div>
</div>

<div id="containerTexteContactezNous">
    <h1>Contactez-nous</h1>
    <p>Contactez-nous dès aujourd'hui pour en savoir plus sur nos services de génération de leads et comment nous pouvons vous aider à atteindre vos objectifs de vente.</p>
</div>

<div id="containerCarteFormulaire">
    <div id="containerCarte">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.3538611474587!2d2.3059081158972887!3d48.87053040780555!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66fc44426d0a3%3A0x4dd46a14608f8c25!2s10%20Rue%20du%20Colis%C3%A9e%2C%2075008%20Paris!5e0!3m2!1sfr!2sfr!4v1672924812787!5m2!1sfr!2sfr" id="carte" width="550" height="450" style="border:0; border-radius:10px 10px 0 0;"  allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <div id="containerLocTelMail">
            <div id="containerAdresse">
                <img src="img/adresse.png">
                <div><span>Adresse :</span> </br> Paris : 10 Rue du colisee 75008</div>
            </div>
            <div id="containerMail">
                <img src="img/mail.png">
                <div><span>Mail :</span> </br>contact@conversium.fr</div>
            </div>
            <div id="containerTel">
                <img src="img/telephone.png">
                <div><span>Téléphone :</span> </br>01 80 88 60 00</div>
            </div>
        </div>
    </div>
    <form id="containerFormulaire" method="post">
        <div>
            <label for="nom">Nom :</label><br>
            <input type="text" id="nom" name="nom"><br>
        </div>
        <div>
            <label for="prenom">Prénom :</label><br>
            <input type="text" id="prenom" name="prenom"><br>
        </div>
        <div>
            <label for="telephone">Téléphone :</label><br>
            <input type="tel" id="telephoneForm" name="telephone"><br>
        </div>
        <div>
            <label for="entreprise">Entreprise :</label><br>
            <input type="text" id="entreprise" name="entreprise"><br>
        </div>
        <div>
            <label for="email">Email :</label><br>
            <input type="email" id="email" name="email"><br>
        </div>
        <div>
            <label for="demande">Formulez votre demande :</label><br>
            <textarea id="demande" name="demande" rows="5" cols="50"></textarea><br>
        </div>
        <input id="buttonForm" type="submit" value="Envoyer >" name="envoyer">
    </form>
    <?php
    //si le bouton envoyer a été cliqué
    if (isset($_POST["envoyer"])){
        //on recupère le nom
        $nom = $_POST["nom"];
        //on recupère le prenom
        $prenom = $_POST["prenom"];
        //on recupère le téléphone
        $telephone = $_POST["telephone"];
        //on recupère l'entreprise'
        $entreprise = $_POST["entreprise"];
        //on recupère l'adresse email
        $email = $_POST["email"];
        //on recupère la demande
        $demande = $_POST["demande"];

        $to = "kevin.alves72100@gmail.com";
        $headers = "From:" . $nom . " " . $prenom ." " . $email;
        //on envoie le message avec la fonction mail
        if (mail($to, $telephone, $entreprise,$demande,$headers))
        //si le message a été envoyé, on le confirme
        {
            echo " ton message est bien envoyé.";
        }
        //sinon on n'affiche un message d'erreur
        else
        {
            echo "Une erreur s'est produite";
        }
    }
    ?>
</div>

<footer>
    <img id="logoFooter" src="img/logoConversium.png" alt="logo conversium">
    <div id="containerContact">
        <div id="localisation"><span>Localisation:</span> Paris : 10 Rue <br/> du colisee 75008</div>
        <img id="logoLinkedin" src="img/logoLinkedin.png" alt="logo linkedin">
        <a href="tel:+33180886000"><div id="telephone"><span>Téléphone:</span> 01 80 88 60 00 </div></a>
    </div>
    <div id="copyright">Copyright © 2022 Conversium | Mentions légales</div>
</footer>

</body>
</html>