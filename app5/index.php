<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="data.php" method="post">
        <h1>Enter your data!</h1>
        <label for="height">Enter your height(cm): </label>
        <input type="number" name="height" id="height" min="0.1" max="250" step="0.1">
        <label for="weight">Enter your weight(kg): </label>
        <input type="number" name="weight" id="weight" min="0.1" max="300" step="0.1">
        <input type="submit" value="Submit data">
    </form>
</body>
</html>