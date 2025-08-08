<?php
// Fichier de connexion PDO à la base de données
// - Contient les identifiants de connexion ($host, $db, $user, $pass)
// - Crée l'objet $pdo (connexion)
// - Définit éventuellement des fonctions utilitaires comme h() pour échapper le HTML

$host = "localhost";// Serveur MySQL (en local c'est souvent localhost)
$sdname = "task_crud";// Nom de la base de données dans phpMyAdmin
$user = "root";// Nom d'utilisateur MySQL (par défaut root en local)
$pass = "";// Mot de passe MySQL (souvent vide en local)

// ==================================
// ----- Tentative de connexion -----
// ==================================
try {
    // ==============================
    // Création d'une instance PDO
    // ==============================
    // DSN = Data Source Name (type de base, hôte, nom de base, encodage)
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);

    // Activer le mode exception pour voir les erreurs
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // (Facultatif) Afficher un message de succès
    // echo "Connexion réussie à la base de données";
} catch (PDOException $e) {
    // Si la connexion échoue, on arrête le script et on affiche l'erreur
    die("Erreur de connexion : " . $e->getMessage());

}