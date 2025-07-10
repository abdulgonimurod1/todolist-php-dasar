<?php
/**
 * ini menghapus todo list
 */
function removeTodoList(int $number) : bool
{
    global $todoList;
    if ($number <= 0 || $number > count($todoList)) {
        echo "Gagal menghapus todo dengan nomor $number" . PHP_EOL;
        return false;
    }

    for ($i = $number; $i < count($todoList); $i++) {
        $todoList[$i] = $todoList[$i + 1];
    }
    unset($todoList[count($todoList)]);

    return true;
}