<?php
require __DIR__ . '/../helpers/config.php';
require __DIR__ . '/../helpers/message.php';

function testConnection(): void
{
    $connect = new mysqli(CONF_DB_HOST, CONF_DB_USER, CONF_DB_PASS, CONF_DB_NAME);

    if ($connect->connect_error)
        echo error('connection failed');
    else
        echo success('DB connected');
}
