
<?php
// database/Migration.php

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../app/config/env.php';

$host = DB_HOST;
$user = DB_USER;
$password = DB_PASSWORD;
$dbname = DB_NAME;

try {
    $pdo = new PDO("pgsql:host=$host", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $pdo->exec("DROP DATABASE IF EXISTS $dbname");
    $pdo->exec("CREATE DATABASE $dbname");
    echo "✔ Base de données '$dbname' créée.\n";

    $pdo = new PDO("pgsql:host=$host;dbname=$dbname", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = <<<SQL
        CREATE TYPE type_compte AS ENUM ('Principale', 'Secondaire');
        CREATE TYPE type_transaction AS ENUM ('depot', 'paiement', 'retrait');

        CREATE TABLE type_user (
            id SERIAL PRIMARY KEY,
            nom VARCHAR(100) NOT NULL
        );

        CREATE TABLE users (
            id SERIAL PRIMARY KEY,
            nom VARCHAR(100),
            prenom VARCHAR(100),
            login VARCHAR(100) UNIQUE,
            password TEXT NOT NULL,
            type_user_id INT REFERENCES type_user(id),
            adresse TEXT,
            numeroCarteIdentite VARCHAR(50),
            photoIdentiteRecto TEXT,
            photoIdentiteVerso TEXT
        );

        CREATE TABLE compte (
            id SERIAL PRIMARY KEY,
            tel VARCHAR(20),
            type_compte type_compte NOT NULL,
            date_creation TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            solde NUMERIC(12,2) DEFAULT 0,
            user_id INT REFERENCES users(id) ON DELETE CASCADE
        );

        CREATE TABLE transaction (
            id SERIAL PRIMARY KEY,
            date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            type_transaction type_transaction NOT NULL,
            compte_id INT REFERENCES compte(id) ON DELETE CASCADE,
            montant NUMERIC(12,2) NOT NULL
        );
    SQL;

    $pdo->exec($sql);
    echo "✔ Tables et types créés avec succès.\n";

} catch (PDOException $e) {
    echo "❌ Erreur : " . $e->getMessage() . "\n";
    exit(1);
}
