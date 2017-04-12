<?php

    $pdo = new PDO('mysql:dbname=users;host=localhost', 'root', '20012001');

    $val = $pdo->exec('insert into user(name, mail, password) values("'.$_POST["name"].'","'.$_POST["mail"].'","'.$_POST["password"].'")');