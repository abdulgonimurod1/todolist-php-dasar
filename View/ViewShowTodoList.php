<?php

require_once __DIR__ . '/../BusinessLogic/ShowTodoList.php';
require_once __DIR__ . '/../Model/TodoList.php';
require_once __DIR__ . '/../View/ViewAddTodoList.php';
require_once __DIR__ . '/../View/ViewRemoveTodoList.php';
require_once __DIR__ . '/../Helper/Input.php';

function viewShowTodoList(){
    while (true) {
        showTodoList();

        echo "Menu: " . PHP_EOL;
        echo "1. Tambah Todo" . PHP_EOL;
        echo "2. Hapus Todo" . PHP_EOL;
        echo "x. Keluar" . PHP_EOL;

        $choice = input("Pilih menu");

        if ($choice === '1') {
            viewAddTodoList();
        } elseif ($choice === '2') {
            viewRemoveTodoList();
        } elseif ($choice === 'x') {
            break;
        } else {
            echo "Pilihan tidak valid." . PHP_EOL;
        }
    }
    echo "Sampai jumpa!" . PHP_EOL;
}