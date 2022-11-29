<?php
$json_string = file_get_contents("./json/todo.json");
$todo_list = json_encode($json_string, true);
var_dump($json_string);
