<?php

class Task {
    protected $db;

    public function __construct(Pdo $db) {
        $this->db = $db;
    }

    public function create(string $name): bool{
        $query = $this->db->prepare("INSERT INTO tasks (name) VALUES (?)");
        return $query->execute([$name]);
    }

    public function getALL(): array{
        $query = $this->db->prepare("SELECT * FROM tasks");
        $query->execute();
        $result = $query->fetchAll();
        return $result;
    }

    public function deleteByID(int $id): array|bool{
        echo "test";
        $query = $this->db->prepare("DELETE FROM tasks WHERE id = ?");
        $query->execute([$id]);
        return $query->fetch();
    }
}
