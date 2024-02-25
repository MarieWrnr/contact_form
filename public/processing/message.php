<?php
// all form values
$name = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$website = $_POST['website'];
$message = $_POST['message'];

if (!empty($email) && !empty ($message)) {
 if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $reciever = "mv.matsko@gmail.com";
    $subject = "From: FormExample <formexample@gmail.com>";
    $body = "Welcome to the Form Example! There I check an effectiveness of a form. Your data is:
    name - $name $lastname, email - $email, phonenumber - $phone, you checked $website. Also you detailed your query with such message:
    $message";
    $sender = "From: $email";
    if(mail($reciever, $subject, $body, $sender)) {
        echo "Your message has been sent";
    } // встроенная функция для отправления сообщений на почту
     else {
         echo "Sorry, failed to send your message!";
     }
 } else {
     echo "Enter a valid email address!";
 }
}
else echo "Email and message field is required!";