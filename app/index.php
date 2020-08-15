<?php
require __DIR__.'/source/core/testConnection.php';
?>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>PHP Dev Env</title>
        <link rel="stylesheet" href="shared/styles.css">
    </head>
    <body>
        <?= success('PHP is Working!'); ?>
        <?php
            testConnection();
        ?>
    </body>
</html>