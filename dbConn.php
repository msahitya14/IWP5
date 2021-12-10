<?php
$db = mysqli_connect('localhost', 'root', '', 'iwp5');
if (!$db) {
    echo "There was a error in connecting to the database" .mysqli_connect_error();
}
?>