<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if ($_POST['username'] == "user" and $_POST['password'] == "12345")
        print("Hello mr. " . $_POST['username'] . "!");
    else {
        print("<span style='color: red'>Incorrect username or password!");
    }
    if(empty($_POST['username'])or empty($_POST['password'])) {
        echo '<script>alert("Please provide valid username and password!")</script>';
    }
    ?>
    <a href="index.php">
        <br>
        <button type="submit">Go to login screen!</button>
    </a>
</body>

</html>