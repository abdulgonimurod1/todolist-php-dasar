<?php
require_once __DIR__ . '/../Helper/Input.php';
require_once __DIR__ . '/../BusinessLogic/RemoveTodoList.php';

function viewRemoveTodoList(){
    echo "Menghapus Todo" . PHP_EOL;
    echo "===================" . PHP_EOL;

    $pilihan = input("Nomor Todo yang ingin dihapus (atau tekan enter untuk batal)");
    if ($pilihan == '') {
        echo "Operasi dibatalkan." . PHP_EOL;
        return;
    }else{
        $success = removeTodoList($pilihan);
        if ($success) {
            echo "Todo nomor $pilihan telah dihapus." . PHP_EOL;
        } else {
            echo "Gagal menghapus Todo nomor $pilihan." . PHP_EOL;
        }
    }
}