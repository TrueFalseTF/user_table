<?php
require_once("function.php");
require_once("database.php");

$link = db_connect();

if(isset($_GET["add_users"])) {
    add_users($link, $_POST);
    header('Location: index.php');
    //exit();
};

if(isset($_GET["edit_row"])) {
    edit_row($link, $_POST);
    header('Location: index.php');
    //exit();
};

if(isset($_GET["del_users"])) {
    del_users($link, $_GET);
    header('Location: index.php');
    //exit();
};
