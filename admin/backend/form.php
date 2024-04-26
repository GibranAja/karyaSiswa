<?php
include "./koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil nilai dari formulir
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $room_type = $_POST['room_type'];
    $checkin = $_POST['checkin'];
    $checkout = $_POST['checkout'];

    $sql = "INSERT INTO tbluser (nama, phone, tipe_room, checkin, checkout)
    VALUES ('$name', '$phone', '$room_type', '$checkin', '$checkout')";

    if ($con->query($sql) === TRUE) {
        header("Location: ../../frontend/hotel.html");
        exit();
    } else {
        echo "Error: " . $sql . "<br>";
    }
}

// Menutup koneksi
$con->close();
?>
