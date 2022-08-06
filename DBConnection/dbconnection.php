<?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $db = 'vishalvegetables';

    $connection= mysqli_connect($server, $user, $password, $db);
    var_dump('hello db connected')
?>