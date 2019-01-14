<html>
    <head>
        <meta charset="UTF-8">
        <title>Coding Club</title>
        <link rel="stylesheet" href="index.css" type="text/css">
    </head>
    <body>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
        <script src="index.js" type="text/javascript"></script>
        
        <?php
        if ($_POST["name"] === "Mark" && $_POST["password"] === "123") {
            echo "<b>Welcome</b>";
        } else {
            echo "<p style='color:red;'>You are bad</p>";
        }
        ?>
        
        <br>
        <a href="index.php">Logout</a>
    </body>
</html>