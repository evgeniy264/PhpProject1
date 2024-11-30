<?php

$id = filter_input(INPUT_GET, 'id'); //проверяем, нет ли GET параметра id
$page = filter_input(INPUT_GET, 'page');

if (!$id || $page) { // если GET параметра id нет
    include 'views/main.php';
} else if ($id) { // если GET параметр id есть
    include 'views/workNews.php';
}

