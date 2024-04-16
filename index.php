<?php 
include 'functions.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NewsLetter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="">
    <h1 class="px-4 py-2">Iscriviti alle NewsLetters</h1>
    <form action="" method="get" class="px-4">
        <input type="text" name="email" id="email">
        <button type="button">Subscribe</button>

        <?php if (isset($message)) : ?>
            <p><?= $message ?></p>
        <?php endif; ?>
    </form>
</body>
</html>