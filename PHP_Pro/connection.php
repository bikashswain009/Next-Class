<?php
$HOSTNAME = "127.0.0.1:8888";
$USERNAME = "root";
$PASSWORD = "";
$DBNAME = "data_5";
try {
    $conn = new mysqli($HOSTNAME, $USERNAME, $PASSWORD, $DBNAME);
    if ($conn->connect_error) {
        echo "Connection Error" . $conn->connect_error;
    }
} catch (Exception $e) {
    echo "Check Credentials<br>";
    echo $e->getMessage() . " at line " . $e->getLine();
}
?>