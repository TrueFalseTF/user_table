<?php
    define('MYSQL_SERVER','localhost');
    define('MYSQL_USER', 'root');
    define('MYSQL_PASSWORD', '');
    define('MYSQL_DB', 'users_db');

    function db_connect() {
        $link = mysqli_connect(MYSQL_SERVER, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DB)
            # DB должна быть уже создана
            or die("Error: ".mysqli_error($link));
        if(!mysqli_set_charset($link, "utf8")){
            print("Error: ".mysqli_error($link));
        }

        # Можно запилить функцию, но зачеееем...

        $result_create_users = mysqli_query($link, 
            "CREATE TABLE IF NOT EXISTS `users_db`.`users` ( 
                `id` int(11) NOT NULL AUTO_INCREMENT,
                `имя` varchar(255) NOT NULL,
                `телефон` varchar(255) NOT NULL,
                `email` varchar(255) NOT NULL,
                `дата_регистрации` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
                PRIMARY KEY (`id`))");
        if (!$result_create_users)
            die(mysqli_error($link));


        return $link;
    }
?>

