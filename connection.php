<?php
    $server = '127.0.0.1:3307';
    $username = 'root';
    $password = '';
    $database = 'store';
    $con = new mysqli($server,$username, $password,$database);
    if (!$con) 
    {
        die('Could not connect:');
        
    }
