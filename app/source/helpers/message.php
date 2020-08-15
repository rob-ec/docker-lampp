<?php

function success(string $message): string
{
    return "<div class='trigger success'><p>{$message}</p></div>";
}

function error(string $message): string
{
    return "<div class='trigger error'><p>{$message}</p></div>";
}
