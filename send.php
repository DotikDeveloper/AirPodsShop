<?php
// check if fields passed are empty
if(empty($_POST['name'])   ||
   empty($_POST['phone']))
   {
echo "No arguments Provided!";
return false;
   }

$name = $_POST['name'];
$phone = $_POST['phone'];

// create email body and send it 
$to = 'ilya.koryakov777@gmail.com'; // put your email
$email_subject = "Вам отправлена заявка с сайта по продаже наушников - Перезвоните мне: $name";
$email_body = "Заполнена форма \"Перезвоните мне\". \n\n".
 "Данные отправителя:\n\nИмя: $name \n".
 "Телефон: $phone";
$headers = "From: contact@mail.com\n";
$headers .= "Reply-To:"; 
mail($to,$email_subject,$email_body,$headers);
return true;

if (mail($to, $email_subject, $email_body, $headers) == true) {
   include('good.html');
} 

?>