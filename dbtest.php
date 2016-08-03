
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf8" />
 <title>Tenixy.com</title>
 </head>
 </head>
 <body>
 <?php 
//Sample Database Connection Syntax for PHP and MySQL. 
//Connect To Database 
$hostname="localhost"; 
$username="tenixy"; 
$password="qwertY789*%#"; 
$dbname="tenixy"; 
$usertable="blog"; 
$yourfield = "Zag"; 
mysql_connect($hostname,$username, $password) or die ("<html><script language='JavaScript'>alert('Unable to connect to database! Please try again later.'),history.go(-1)</script>"); 
mysql_select_db($dbname); 
# Check If Record Exists 
$query = "SELECT * FROM $usertable"; 



;
if (!mysql_query("set NAMES utf8")) {
printf("Ошибка при загрузке набора символов utf8: %s\n", $link->error);
} else {
///printf("Текущий набор символов: %s\n", $link->character_set_name());
}
$result = mysql_query($query);  

if($result) 
{ 
while($row = mysql_fetch_array($result)) 
{ 
$name = $row["$yourfield"]; 
echo "Name: ".$name."<br></br>"; 
} 
} 
?>