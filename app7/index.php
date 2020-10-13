<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FileBrowser</title>
</head>
<body>
    <?php
        // print_r(scandir("."));
        $dir_contents = scandir("..");
        echo ("<table><thead>
        <tr><th>Type</th>
        <th>Name</th>
        <th>Actions</th>
        </tr></thead>");
        echo ("<tbody><tr>");
        foreach($dir_contents as $cont) {
            echo("<tr><td>" . (is_file($cont) ? "File" : "Dir") . "</td>");
            echo("<td>" . $cont . "</td>");
            echo("<td>" . "X" . "</td></tr>");
            // print("<pre>" . $cont);
        }
        echo("</table>");
    ?>
</body>
</html>