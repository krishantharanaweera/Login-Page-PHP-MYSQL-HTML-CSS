<?php

    $hostname='localhost';
    $un = 'root';
    $pw = '';
    $dbname = 'yts_login1';

    $con = mysqli_connect($hostname,$un,$pw,$dbname) or die("Failed to connect with database");