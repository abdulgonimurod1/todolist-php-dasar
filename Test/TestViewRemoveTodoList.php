<?php

require_once __DIR__ . '/../BusinessLogic/ShowTodoList.php';
require_once __DIR__ . '/../BusinessLogic/AddTodoList.php';
require_once __DIR__ . '/../BusinessLogic/RemoveTodoList.php';
require_once __DIR__ . '/../View/ViewShowTodoList.php';
require_once __DIR__ . '/../View/ViewAddTodoList.php';
require_once __DIR__ . '/../View/ViewRemoveTodoList.php';

addTodoList('Belajar PHP');
addTodoList('Belajar OOP');
addTodoList('Belajar Laravel');
addTodoList('Belajar Design Pattern');


showTodoList();
viewRemoveTodoList();
showTodoList();
