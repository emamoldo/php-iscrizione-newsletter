<?php 
$email = $_GET['email'];


if (str_contains($email, '@') && str_contains($email, '.')) {
    $message = 'Thank You! Your signed up to our NewsLetters.';
} else {
    $message = 'Something wrong! Try to use a correct Email.';
};

var_dump($email);
var_dump($message);
?>