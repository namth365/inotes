<?php include '../database.php'; ?>
<?php
$id = $_GET['id'];
$sql    = "DELETE FROM note_type WHERE id = " . $id;
$stmt  = $connect->query($sql);
$stmt->setFetchMode(PDO::FETCH_OBJ);
$note_type = $stmt->fetch();

header("Location: list-notes.php");
die();
