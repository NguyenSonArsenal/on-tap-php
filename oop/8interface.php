<?php

interface Task {
    public function runTask();
    public function anotherMethod();
}

abstract class TaskImpl implements Task {
    public function runTask() {
        // TODO: Implement runTask() method.
        echo $this->anotherMethod();
    }
}

class TaskImpl2 extends TaskImpl {

    public function anotherMethod() {
        // TODO: Implement anotherMethod() method.
        return 'another method running task';
    }
}

$task = new TaskImpl2();
$task->runTask();

/*interface Task {
    public function runTask();
    public function anotherMethod();
}

abstract class TaskImpl implements Task {
    public function runTask() {
        echo $this->anotherMethod();
    }
}

class TaskImpl2 extends TaskImpl {
    public function anotherMethod() {
        return "another method running task ";
    }
}

$task = new TaskImpl2();
$task->runTask();
*/?>