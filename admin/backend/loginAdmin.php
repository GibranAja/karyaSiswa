<?php
session_start();
include "./koneksi.php";

if (!isset($_POST['name'], $_POST['password'])) {
    exit('Silahkan isi username dan password lebih dahulu!');
}

if ($stmt = $con->prepare('SELECT id,password FROM tbladmin WHERE nama=?')) {
    $stmt->bind_param('s', $_POST['name']);
    $stmt->execute();
    $stmt->store_result();
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $password);
        $stmt->fetch();
        if (password_verify($_POST['password'], $password)) {
            session_regenerate_id();
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['name'] = $_POST['name'];
            $_SESSION['id'] = $id;
            header('Location: homeAdmin.php');
        } else {
            echo 'Incorrect username and/or password!';
        }
    } else {
    }
}
?>