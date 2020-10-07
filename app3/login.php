<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
        // print_r("User data ---> " . $_POST['username'] . " " . $_POST['password']);
        if($_POST['username'] == "User" and $_POST['password'] == "User1")
            print("Hello mr. " . $_POST['username'] . "!");
        else 
            print("<span style='color: red'> Incorrect username or password!");
    ?>
</body>

</html>