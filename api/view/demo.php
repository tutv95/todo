<?php
include '../config/config.php';
include 'echoJson.php';
include '../model/Todo.php';

$todo = new Todo($conn);

print_r($todo->get(90));