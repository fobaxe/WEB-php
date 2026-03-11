<?php

class UserService {

    public static function login($pdo, $username, $password) {
        // On cherche l'utilisateur par son nom
        $sql = "SELECT * FROM users WHERE username = :username";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ":username" => $username
        ]);
        $user = $stmt->fetch();

        // Si l'utilisateur existe et que le mot de passe est correct
        if ($user && password_verify($password, $user["password"])) {
            return $user;
        }

        return false;
    }

    public static function register($pdo, $username, $password) {

        $sql = "SELECT * FROM users WHERE username = :username";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([":username" => $username]);

        if ($stmt->fetch()) {
            return false; // username déjà pris
        }

        // Hashage du mot de passe avant de sauvegarder
        $passwordHash = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO users (username, password) VALUES (:username, :password)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ":username" => $username,
            ":password" => $passwordHash
        ]);

        return true;
    }
}
?>