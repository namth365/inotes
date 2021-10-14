<?php

	$controller = ( isset( $_GET['controller'] ) ) ? $_GET['controller'] : 'index';
	switch ($controller) {
		case 'notetypes':
			include_once './models/NotetypeModel.php';
			include_once './controllers/NotetypesController.php';
			$objController = new NotetypesController();
			break;
		case 'notes':
			include_once './models/NoteModel.php';
			include_once './controllers/NotesController.php';
			$objController = new NotesController();
			break;
		default:
		
			break;
	}


	$page = ( isset( $_GET['page'] ) ) ? $_GET['page'] : 'index';
	switch ($page) {
		case 'index':
			$objController->index();
			break;
		case 'add':
			$objController->add();
			break;
		case 'edit':
			$objController->edit();
			break;
		default:
		
			break;
	}