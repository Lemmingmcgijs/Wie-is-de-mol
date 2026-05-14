<?php
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'wie_is_de_mol';

    $conn = new mysqli($host, $user, $pass, $db);

    if ($conn->connect_error) {
        die("Connectie mislukt: " . $conn->connect_error);
    }

    function get_column($result, $index) {
        $result->data_seek(0);
        return array_column($result->fetch_all(MYSQLI_NUM), $index);
    }

    function get_row($result, $index) {
        $result->data_seek($index);
        return $result->fetch_assoc();
    }
?>