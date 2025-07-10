<?php

require_once __DIR__ . '/../Helper/Input.php';

$todo = input("Masukkan todo");
if (empty($todo)) {
    echo "Todo tidak boleh kosong" . PHP_EOL;
} else {
    echo "Todo yang dimasukkan: $todo" . PHP_EOL;
}