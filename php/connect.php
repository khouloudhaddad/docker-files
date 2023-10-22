<?php
const DBHOST='db';
const DBUSER = 'test';
const DBPASS = 'pass';
const DBNAME = 'demo';

$dsn = 'mysql:host='. DBHOST . ';dbname='. DBNAME;

try{
    $db = new PDO($dsn, DBUSER, DBPASS);
    //echo "Connected";
}catch(PDOException $exception){
    echo "Un error has occured: ".$exception->getMessage();
    die;
}