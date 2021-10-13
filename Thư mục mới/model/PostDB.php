<?php

namespace Model;

class PostDB
{
    public $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function create($post){
        $sql = "INSERT INTO `note_type`(`name`, `description`) VALUES (?, ?)";
        $statement = $this->connection->prepare($sql);
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $post->name);
        $statement->bindParam(2, $post->description);
        return $statement->execute();
    }

    public function update($id, $post){
        $sql = "UPDATE `note_type` SET `name` = ?, `description` = ? WHERE `id` = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $post->name);
        $statement->bindParam(2, $post->description);
        $statement->bindParam(5, $id);
        return $statement->execute();
    }

    public function delete($id){
        $sql = "DELETE FROM `note_type` WHERE `id` = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $id);
        return $statement->execute();
    }

    public function get($id){
        $sql = "SELECT * FROM `note_type` WHERE `id` = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $id);
        $statement->execute();
        $row = $statement->fetch();
        $post = new Post($row['name'], $row['description']);
        $post->id = $row['id'];
        return $post;
    }

    public function getAll()
    {
        $sql = "SELECT * FROM `note_type`";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll();
        $note_type = [];
        foreach ($result as $row) {
            $post = new Post($row['name'], $row['description']);
            $post->id = $row['id'];
            $note_type[] = $post;
        }
        return $note_type;
    }
}