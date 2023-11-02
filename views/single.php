<?php


function getProduct($slug ='appeltaart'){
    $mysqli =  new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    if ($mysqli->connect_error) {

        die('failed to connect'. $mysqli->connect_error);
    }


    $sql = 'SELECT * FROM taarten WHERE slug=? ORDER BY taarten.title';

    $stmt = $mysqli->prepare($sql);

    $stmt->bind_param('s', $slug);

    $stmt->execute();

    $result = $stmt->get_result();

    return $result->fetch_assoc();
}