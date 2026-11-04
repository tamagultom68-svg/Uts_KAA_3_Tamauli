<?php

class User
{
    private PDO $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function findByUsername($username)
    {
        $stmt = $this->db->prepare(
            "SELECT * FROM users WHERE username = ?"
        );

        $stmt->execute([$username]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($username, $passwordHash)
    {
        $stmt = $this->db->prepare(
            "INSERT INTO users (username, password) VALUES (?, ?)"
        );

        return $stmt->execute([$username, $passwordHash]);
    }
}