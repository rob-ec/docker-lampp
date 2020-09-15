<html>
    <head>
        <meta charset="utf-8"/>
        <title>docker-lampp</title>
    </head>
    <body class="center">
        <?php $connect = new mysqli('db', 'dev', 'devpass', 'test_db'); ?>
	
	<table>
		<tr><td class="e">Database</td><td class="v"><?= ($connect->connect_error) ? "Error" : "Ok" ?></td></tr>
	</table>

        <?php phpinfo(); ?>
    </body>
</html>
