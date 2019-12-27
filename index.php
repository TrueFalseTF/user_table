<?php	
    require_once("function.php");
    require_once("database.php");

    $link = db_connect(); 

    $sorted_valueSQL = "дата_регистрации";

    if(isset($_GET["sorted"])) {  
        $sorted_valueSQL = $_GET["sorted"];
    };

    $sorted_users = position_generator($link, "users", $sorted_valueSQL, false);

    
    $Res_users = $sorted_users;

    if(isset($_GET["add_users_page"])) {
        include("pages/add_users_page.php");
    } else if(isset($_GET["edit_row_page"])){
        include("pages/edit_row_page.php");
    } else { 
        include("pages/sample_page.php");
    }    

 
?>