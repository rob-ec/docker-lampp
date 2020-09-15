<html>
    <head>
        <meta charset="utf-8"/>
        <title>docker-lampp</title>
    </head>
    <body class="center">
        <?php $connect = new mysqli('db', 'dev', 'devpass', 'test_db'); ?>
	
	<table>
		<tr class="h"><td><h1>Docker LAMPP</h1></td></tr>
	</table>

    	<h1>MySQL/MariaDB</h1>
	<table>
		<tr><td class="e">Status</td><td class="v"><?= ($connect->connect_error) ? "error" : "working" ?></td></tr>
		<tr><td class="e">Host</td><td class="v">db</td></tr>
		<tr><td class="e">User</td><td class="v">dev</td></tr>
		<tr><td class="e">Password</td><td class="v">devpass</td></tr>
		<tr><td class="e">Standard Database</td><td class="v">test_db</td></tr>
	</table>
	<hr />

	<h1>PHPMyAdmin</h1>
	<table>
		<tr><td class="e">Data Base Host Connection</td><td class="v">db</td></tr>
		<tr><td class="e">Port</td><td class="v">8900</td></tr>
	</table>
	<hr />

        <?php phpinfo(); ?>
    </body>
</html>
