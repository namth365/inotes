<?php

require "model/DBConnection.php";
require "model/PostDB.php";
require "model/Post.php";
require "controller/PostController.php";

use \Controller\PostController;

?>
<html>
    <head>
        <meta charset="utf-8">
        <title>iNotes</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css">

    </head>
    <body>
        <div class="container">
            <div class="navbar navbar-default">
                <a class="navbar-brand" href="inotes.php">Danh Sách Ghi Chú</a>
            </div>
            <?php
            $controller = new \controller\PostController();
            $page = isset($_REQUEST['page'])? $_REQUEST['page'] : NULL;

            switch ($page){
                case 'add':
                    $controller->add();
                    break;
                case 'view':
                    $controller->view();
                    break;
                case 'delete':
                    $controller->delete();
                    break;
                case 'edit':
                    $controller->edit();
                    break;
                default:
                    $controller->index();
                    break;
            }
            ?>
        </div>
    </body>
</html>