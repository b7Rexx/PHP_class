<?php
include "config.php";
?>

<!Doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }
    </style>
</head>
<body>
<div style="position:relative;width:700px">
    <div>
        <form method="post" action="input.php">
            <input type="text" name="name" placeholder="name"/>
            <input type="text" name="image" placeholder="image name"/>
            <button type="submit">Click</button>
        </form>
    </div>
    <?php
    $result = mysqli_query($db, "SELECT * FROM `imag`");
    while ($row = mysqli_fetch_array($result)) {
        echo "<div style=\"float:left;\">";
        echo "<img src=\"{$row['image']}\" style=\"width:100px;height:150px;padding:10px;display:block;\">";
        echo "<a style=\" float:bottom;margin-left: 30px;\">{$row['name']}</a>";
        echo "<a onclick=\"return confirm('Delete this image?')\" href=\"delete.php?id=" . $row['sn'] . "\">&times</a>";
    echo "</div>";
    }
    ?>
</div>
</body>
</html>
