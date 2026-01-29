<?php

require_once '../app/controllers/task.php';
require_once '../config/database.php';


$db = new Database();
$controller = new TaskController($db->getConnection());

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['taskName'])) {
    $controller->addTask($_POST['taskName']);
} elseif (isset($_GET['delete'])) {
    $controller->deleTask($_GET['delete']);
} else {
    $controller->index();
}
