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
        $column = [];
        while ($waarde = $result->fetch_column($index)) {
            $column[] = $waarde;
        }
        return $column;
    }
?>