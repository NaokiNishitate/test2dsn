<?php
    function conexion(){

    $host = "host=dpg-cvmps51r0fns73akhfag-a.oregon-postgres.render.com";
    $port = "port=5432";
    $dbname = "dbname=test_cz2d";
    $user = "user=nishitate";
    $password = "password=ccTdJZ3ZEANS82YdfsCXG6eLDbGUNm7S";

    $db = pg_connect("$host $port $dbname $user $password");

    return $db;
    }
?>
