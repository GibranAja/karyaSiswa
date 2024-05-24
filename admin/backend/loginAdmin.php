<?php
session_start();
include "./koneksi.php";

if (!isset($_POST['name'], $_POST['password'])) {
    $error = 'Silahkan isi username dan password lebih dahulu!';
} else {
    if ($stmt = $con->prepare('SELECT id, password FROM tbladmin WHERE nama=?')) {
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
                $error = 'Password salah!';
            }
        } else {
            $error = 'Username tidak ditemukan!';
        }
        $stmt->close();
    } else {
        $error = 'Terjadi kesalahan dalam persiapan pernyataan SQL.';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="flex items-center justify-center min-h-screen">
        <div class="bg-white p-8 rounded-lg shadow-md">
            <h2 class="text-2xl font-bold mb-6">Login Admin</h2>
            <?php if (isset($error)): ?>
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6" role="alert">
                    <p><?php echo $error; ?></p>
                </div>
            <?php elseif (isset($_GET['error'])): ?>
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6" role="alert">
                    <p>Terjadi kesalahan: <?php echo $_GET['error']; ?></p>
                </div>
            <?php endif; ?>
            <!-- Formulir login di sini -->
        </div>
    </div>
</body>
</html>