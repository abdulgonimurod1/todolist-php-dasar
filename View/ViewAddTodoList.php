<?php

require_once __DIR__ . '/../BusinessLogic/AddTodoList.php';
require_once __DIR__ . '/../Helper/Input.php';
require_once __DIR__ . '/../Model/TodoList.php';

function viewAddTodoList(){
    echo "=== Tambah Todo ===" . PHP_EOL;
    
    $todo = input("Masukkan todo (atau tekan enter untuk batal)");
    
    if (empty($todo)) {
        echo "Todo tidak boleh kosong." . PHP_EOL;
    } else {
        addTodoList($todo);
        echo "Todo '$todo' telah ditambahkan." . PHP_EOL;
    }
    
    echo "=== Selesai ===" . PHP_EOL;
}