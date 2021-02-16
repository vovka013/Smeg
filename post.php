<?php
 
$adminemail="service7000@ukr.net";  // e-mail админа 

$backurl="https://smeg-service.kiev.ua/";
  // На какую страничку переходит после отправки письма 
$subject ="";

// submit1--------------------------------------------------------

if (isset($_POST['submit1'])) {
	

$subject =  "ПОДАТЬ ЗАЯВКУ НА РЕМОНТ";

 
$name=$_POST['name']; 
 
$email=$_POST['email']; 
 
$msg=$_POST['message']; 

$tell=$_POST['tell']; 
// Проверяем валидность e-mail 
if ($name!=""&&$email!=""&&$msg!=""&&$tell!="") 
{ 
 
 
$msg=" 
 
Имя: $name
 
Number: $tell 

E-mail: $email 
 
Сообщение: $msg
 
"; 
 
 // Отправляем письмо админу  
 
mail("$adminemail","$subject", "$msg"); 
 
// Выводим сообщение пользователю 
 print "<script language='Javascript'><!-- 
function reload() {location = \"$backurl\"}; setTimeout('reload()'); 
//--></script> ";  

 }  
 
 

}

// submit2 submit4 submit5--------------------------------------------------------


if (isset($_POST['submit2'])) {
$subject =  "ПОЛУЧИТЬ КОНСУЛЬТАЦИЮ"; 
// Принимаем данные с формы 
 
$name=$_POST['name']; 
 
$msg=""; 

$tell=$_POST['tell']; 
// Проверяем валидность e-mail 
if ($name!=""&&$tell!="") 
  { 
 
 
$msg=" 
 
Имя: $name
 
Number: $tell 
 
"; 
 
 // Отправляем письмо админу  
 
mail("$adminemail","$subject", "$msg"); 
 
// Выводим сообщение пользователю 
 print "<script language='Javascript'><!-- 
function reload() {location = \"$backurl\"}; setTimeout('reload()'); 
//--></script> ";  

 } 
 

}





?>