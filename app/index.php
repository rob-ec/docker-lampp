<html>
    <head>
        <meta charset="utf-8"/>
        <title>docker-lampp</title>
    </head>
    <body>
        <!-- DB CONNECT TEST -->
        <?php $connect = new mysqli('db', 'dev', 'devpass', 'test_db'); ?>
        <p><?= ($connect->connect_error) ? "Database = Error" : "Database = Ok" ?></p>
        <!-- PHPMyAdmin -->
        <a href="http://127.0.0.1:8900" target="_blank">[PHPMyAdmin]</a>
        <!-- PHP Info -->
        <?php phpinfo(); ?>
    </body>
</html>