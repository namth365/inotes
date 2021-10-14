<?php
class NoteModel{
	public function getAll(){
		$sql = "SELECT * FROM `note_type`";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll();
        $note_type = [];
        foreach ($result as $row) {
            $post = new NoteModel($row['name'], $row['description']);
            $post->id = $row['id'];
            $note_type[] = $post;
        }
        return $note_type;
	}
	public function find($id){
		$sql = "SELECT * FROM `note_type` WHERE `id` = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $id);
        $statement->execute();
        $row = $statement->fetch();
        $post = new NoteModel($row['name'], $row['description']);
        $post->id = $row['id'];
        return $post;
	}
	public function destroy($id){
		$sql = "DELETE FROM `note_type` WHERE `id` = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $id);
        return $statement->execute();
	}
	public function store(){
		return [];
	}
	public function update(){

	}
}


?>