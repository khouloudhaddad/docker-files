<?php
    require_once 'connect.php';
    $sql = 'SELECT * FROM `clients`';
    $query = $db->query($sql);

    var_dump($query->fetchAll());