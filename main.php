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
        if ($_GET["name"]) {
            echo "Hello " . $_GET["name"];
        }
        ?>
        
        <br>
        <a href="index.php">Exit</a>
    </body>
</html>