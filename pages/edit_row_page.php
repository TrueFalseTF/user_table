<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">    
    <title>Пользователи</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./pages/css/styles.css">    
</head>
<body>
    <a href="./index.php"><h4 class="h4">Главная</h4></a> 
    <form id="edit_form" action="./engine.php?edit_row" method="POST">
        <input type="submit" class="btn btn-secondary" value="Сохранить">    
            <table class="table product_table">    
                <caption>Выборка товаров по свойствам</caption>       
                
                <tr><!--поддержка добавления одним нажатием нескольких пользователей через vue поля ввода как компонент-->
                    <th>№</th><th>имя</th><th>телефон</th><th>email</th>          
                </tr>
                
                    <tr><!--стилизовать input name="id"-->
                        <th><p><?=$_GET["edit_row_page"]?></p><input hidden="false" type="text" name="id" value="<?=$_GET["edit_row_page"]?>"></th>
                        <th><input type="text" name="name" value="<?=$_GET["имя"]?>"></th>
                        <th><input type="tel" name="phone" value="<?=$_GET["телефон"]?>"></th>
                        <th><input type="email" name="email" value="<?=$_GET["email"]?>"></th>
                    </tr>
                
                
            </table>
    </form>
        <!-- переключатель страниц, № страницы по POST -->    
    
</body>
<script src="./pages/js/engine.js"></script>
</html>