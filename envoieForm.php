<?php
    $host = "conversiqh223.mysql.db";
    $username = "conversiqh223";
    $password = "C0nversium";
    $dbname = "conversiqh223";

    $conn = mysqli_connect($host, $username, $password, $dbname);

    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $telephone = $_POST['telephone'];
    $entreprise = $_POST['entreprise'];
    $email = $_POST['email'];
    $demande = $_POST['demande'];

    $sql = "INSERT INTO conversium_form (nom, email, message) VALUES ('$nom', $prenom, $telephone, $entreprise, '$email', '$demande')";
    mysqli_query($conn, $sql);
    mysqli_close($conn);

?>