<?php

require_once __DIR__ . '/../BusinessLogic/ShowTodoList.php';
require_once __DIR__ . '/../BusinessLogic/AddTodoList.php';
require_once __DIR__ . '/../View/ViewAddTodoList.php';

addTodoList('Belajar PHP');
addTodoList('Belajar OOP');
addTodoList('Belajar Laravel');
addTodoList('Belajar Design Pattern');

viewAddTodoList();

showTodoList();