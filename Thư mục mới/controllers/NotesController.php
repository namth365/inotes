<?php

class NotesController{
	public function index(){
		$objModel = new NoteModel();
		$items = $objModel->getAll;
		include_once './views/notes/list.php';
	}
	public function add(){
		
		include_once './views/notes/add.php';
	}

	public function edit(){
		
		include_once './views/notes/edit.php';
	}
}