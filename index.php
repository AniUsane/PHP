<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
    <label>Name</label>
    <input type="text" name="name">
    <label>Password</label>
    <input type="password" name="password">
    <label>Confirm Password</label>
    <input type="password" name="password_confirmation">
    <input type="submit" value='Submit'>
    </form>
</body>
</html>

<?php
    
    $name = $_POST["name"];
    $password = $_POST["password"];
    $confirmation_password = $_POST["password_confirmation"];

    if ($password == $confirmation_password){
        echo $name . " თქვენ წარმატებით დარეგისტრირდით";
    }
    else {
        echo "პაროლი და მისი ინფორმაცია არასწორია";
    }
?>