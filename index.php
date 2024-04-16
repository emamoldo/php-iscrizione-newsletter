<?php 
$email = $_GET['email'];


if (str_contains($email, '@') && str_contains($email, '.')) {
    $message = 'Done. Your signed up to our NewsLetters!';
} else {
    $message = 'Something wrong. Try to use a correct Email.';
};

var_dump($email);
var_dump($message);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NewsLetter</title>
</head>
<body>
    <h1>Iscriviti alle NewsLetters</h1>
    <form action="" method="get">
        <input type="text" name="email" id="email">
        <button type="button">Subscribe</button>
    </form>
</body>
</html>