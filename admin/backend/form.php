<?php
include "./koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil nilai dari formulir
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $hotel = $_POST['namahotel'];
    $room_type = $_POST['room_type'];
    $checkin = $_POST['checkin'];
    $checkout = $_POST['checkout'];

    $sql = "INSERT INTO tbluser (nama, phone, namahotel, tipe_room, checkin, checkout)
    VALUES ('$name', '$phone', '$hotel', '$room_type', '$checkin', '$checkout')";

    if ($con->query($sql) === TRUE) {
        header("Location: ./bookingSucces.html");
        exit();
    } else {
        echo "Error: " . $sql . "<br>";
    }
}

// Menutup koneksi
$con->close();
?>
