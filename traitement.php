<?php
// Connexion à la base de données
$connexion = new PDO('mysql:host=localhost;dbname=waw', 'root', '');

// Récupération des données du formulaire
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$service = $_POST['service'];
$processus_metier = $_POST['processus_metier'];
$description = $_POST['description'];
$outils_utilises = $_POST['outils_utilises'];
$amelioration = $_POST['amelioration'];

// Préparation de la requête d'insertion
$requete = $connexion->prepare('INSERT INTO utilisateurs (nom, prenom, email, service, processus_metier, description, outils_utilises, amelioration) VALUES (?, ?, ?, ?, ?, ?, ?, ?)');

// Exécution de la requête
$requete->execute([$nom, $prenom, $email, $service, $processus_metier, $description, $outils_utilises, $amelioration]);

// Redirection vers une page de confirmation
// header('Location: confirmation.html');
// http_response_code(200);
// echo 'success';
// exit();
?>