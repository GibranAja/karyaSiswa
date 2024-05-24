<?php
include "./koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil nilai dari formulir
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $hotel = $_POST['namahotel'];
    $lokasi = $_POST['lokasi'];
    $room_type = $_POST['room_type'];
    $checkin = $_POST['checkin'];
    $checkout = $_POST['checkout'];

    // Menghilangkan angka 0 di awal dari nomor telepon
    $phone = ltrim($phone, '0');

    // Menambahkan "+62" pada nilai phone
    $phone_code = "+62";
    $phone_number = (int) $phone;

    $sql = "INSERT INTO tbluser (nama, phone, phone_code, namahotel, lokasi, tipe_room, checkin, checkout)
    VALUES ('$name', '$phone_number', '$phone_code', '$hotel', '$lokasi', '$room_type', '$checkin', '$checkout')";

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
