сдлеать интерфейс задачек,инпут текст
кнопка добавить - сохраняю задачу в бд.
страницу с задачами с бд




<form action="" method="get">
    <input type="text" name="zadacha">
    <input type="submit" >
</form>
<?php
$task = $_GET['zadacha'];
//Устанавливаем доступы к базе данных:
$host = 'localhost'; //имя хоста, на локальном компьютере это localhost
$user = 'root'; //имя пользователя, по умолчанию это root
$password = 'root'; //пароль, по умолчанию пустой
$db_name = 'tasks'; //имя базы данных

//Соединяемся с базой данных используя наши доступы:
$link = mysqli_connect($host, $user, $password, $db_name);

//Устанавливаем кодировку (не обязательно, но поможет избежать проблем):
mysqli_query($link, "SET NAMES 'utf8'");

//Формируем тестовый запрос:
$query = "INSERT INTO taskbook set Task = '$task' ";

//Делаем запрос к БД, результат запроса пишем в $result:
$result = mysqli_query($link, $query) or die(mysqli_error($link));



?>

