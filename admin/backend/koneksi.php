<?php
$con=mysqli_connect("localhost","root","","dbhotel");

if (mysqli_connect_errno()) {
    // jika ada error connection, stop the script dan tampilkan errornya.
    exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
?>