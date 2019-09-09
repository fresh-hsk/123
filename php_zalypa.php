<?php
require_once 'connect.php'; 
 

$link = mysqli_connect('localhost','root','','text') 
    or die("Ошибка " . mysqli_error($link));
 
$query ="SELECT phones";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
if($result)
{
    echo "Выполнение запроса прошло успешно";
} 
mysqli_close($link);
?>