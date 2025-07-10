<?php

require_once __DIR__ . '/../BusinessLogic/RemoveTodoList.php';
require_once __DIR__ . '/../BusinessLogic/ShowTodoList.php';
require_once __DIR__ . '/../BusinessLogic/AddTodoList.php';
require_once __DIR__ . '/../Model/TodoList.php';


addTodoList('Belajar PHP');
addTodoList('Belajar OOP');
addTodoList('Belajar Design Pattern');

showTodoList();

removeTodoList(1);
showTodoList();

removeTodoList(2);
showTodoList();

removeTodoList(3);
showTodoList();