<?php

$conn = new mysqli('localhost', 'root', '', 'phpcrud_bedural_marian');

if ($conn->connect_error)  {
    die("Connection failed: " . $conn->connect_error);
}
?>