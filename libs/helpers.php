<?php

function diePage(string $msg = null):void
{
    echo "<strong>{$msg}</strong>";
    die();
}