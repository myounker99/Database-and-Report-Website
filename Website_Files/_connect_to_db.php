<?php
$con = mysqli_connect("localhost", "s_myounker",
    "Younker0899", "s_myounker");

if( mysqli_connect_errno() )
{
    echo "Failed to connect to MySQL";
    echo mysqli_connect_error();
    die();
}
?>