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
    <a href="./index.php?add_users_page" class="btn btn-secondary add_users">Добавить пользователя</a> 
    <div class="sorted">
        <span>Сортировать по: </span>
        <a href="./index.php?sorted=дата_регистрации" class="btn btn-info">дате регистрации</a>
        <a href="./index.php?sorted=имя" class="btn btn-info">имени</a>
    </div>
    
   
        <table class="table product_table">    
            <caption>Выборка товаров по свойствам</caption>       
            
            <tr>
                <th>№</th><th>имя</th><th>телефон</th><th>email</th><th>дата_регистрации</th>             
            </tr>

            
            <?php foreach($Res_users as $row): ?>
                <tr id="tr_<?=$row["id"]?>">
                    <td><?=$row["id"]?></td>

                    <td><?=$row["имя"]?></td>

                    <td><?=$row["телефон"]?></td>                

                    <td><?=$row["email"]?></td> 

                    <td><?=$row["дата_регистрации"]?></td>
                    <td><a href="./engine.php?del_users=<?=$row["id"]?>" class="btn btn-secondary">Удалить</a> </td>
                    <td><a href="./index.php?edit_row_page=<?=$row["id"]?>&имя=<?=$row["имя"]?>&телефон=<?=$row["телефон"]?>&email=<?=$row["email"]?> " class="btn btn-secondary">Редактировать</a></td>                
                </tr>
            <?php endforeach;?>
        </table>
        <!-- переключатель страниц, № страницы по POST -->    
    
</body>
<script src="./pages/js/engine.js"></script>
</html>