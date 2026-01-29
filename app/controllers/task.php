<?php
require_once '../app/models/task.php';

class TaskController {
    private $taskModel;

    public function __construct(Pdo $db) {
        $this->taskModel = new Task($db);
    }

    public function index() {
        $tasks = $this->taskModel->getAll();
        require '../app/views/taskList.php';
    }

    public function addTask($name) {
        $task = $this->taskModel->create($name);
        header('Location: /');
        exit();
    }

    public function deleTask(int $id) {
        $this->taskModel->deleteByID($id);
        header('Location: /');
        exit();
    }
}