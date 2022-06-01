<?php
$conn = mysqli_connect('localhost', 'root', '', 'login');
if (!$conn) {
    echo 'connection error: ' . mysqli_connect_error();
}
