<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <title>Tenixy.com</title>
 </head>
 </head>

<?php
$link = mysqli_connect('localhost','tenixy','qwertY789*%#','tenixy');
if (mysqli_connect_errno()) 
{
    printf("Не удалось подключиться: %s\n", mysqli_connect_error());
    exit();
}
if ($link->set_charset("utf8")) 
{
printf("Ошибка при загрузке набора символов utf8: %s\n", $link->error);
}
else 
{
printf("Текущий набор символов: %s\n", $link->character_set_name());
} 
//var_dump($link);
$link->real_query("SELECT * FROM blog ORDER BY id DESC");
$res = $link->use_result();

while ($row = $res->fetch_assoc()) 
{
    echo $row['Zag'];
    echo "\n";
    echo "<br>";
    echo $row['timestamp'];
}
?>