<?php
session_start();
include "../admin/backend/koneksi.php";

$err = "";
$username = "";
$ingataku = "";

if (isset($_COOKIE['cookie_username'])) {
    $cookie_username = $_COOKIE['cookie_username'];
    $cookie_password = $_COOKIE['cookie_password'];

    $sql1 = "select * from tbllogin where username = '$cookie_username'";
    $q1 = mysqli_query($con, $sql1);
    $r1 = mysqli_fetch_array($q1);
    if ($r1['password'] == $cookie_password) {
        $_SESSION['session_username'] = $cookie_username;
        $_SESSION['session_password'] = $cookie_password;
    }
}

if (isset($_SESSION['session_username'])) {
    header("location:../frontend/index.php");
    exit();
}

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $ingataku = $_POST['ingataku'];

    if ($username == '' or $password == '') {
        $err .= "<li>Silakan masukkan username dan juga password.</li>";
    } else {
        $sql1 = "select * from tbllogin where username = '$username'";
        $q1 = mysqli_query($con, $sql1);
        $r1 = mysqli_fetch_array($q1);

        if ($r1['username'] == '') {
            $err .= "<li>Username <b>$username</b> tidak tersedia.</li>";
        } elseif ($r1['password'] != md5($password)) {
            $err .= "<li>Password yang dimasukkan tidak sesuai.</li>";
        }

        if (empty($err)) {
            $_SESSION['session_username'] = $username; //server
            $_SESSION['session_password'] = md5($password);

            if ($ingataku == 1) {
                $cookie_name = "cookie_username";
                $cookie_value = $username;
                $cookie_time = time() + (60 * 60 * 24 * 30);
                setcookie($cookie_name, $cookie_value, $cookie_time, "/");

                $cookie_name = "cookie_password";
                $cookie_value = md5($password);
                $cookie_time = time() + (60 * 60 * 24 * 30);
                setcookie($cookie_name, $cookie_value, $cookie_time, "/");
            }
            header("location:../frontend/index.php");
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Hailoka</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-200 flex items-center justify-center min-h-screen">
    <div class="bg-white rounded-lg shadow-lg p-8 w-96">
        <h2 class="text-2xl font-bold mb-6 text-center">
            <span class="text-amber-500">Hai</span><span class="text-green-800">loka</span>
        </h2>
        <?php if ($err) { ?>
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6" role="alert">
                <ul><?php echo $err ?></ul>
            </div>
        <?php } ?>
        <form action="" method="post" role="form">
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="username">
                    Username
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" name="username" value="<?php echo $username ?>" placeholder="Enter your username">
            </div>
            <div class="mb-6">
                <label class="block text-gray-700 font-bold mb-2" for="password">
                    Password
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" name="password" placeholder="Enter your password">
            </div>
            <div class="flex items-center mb-6">
                <input class="mr-2" type="checkbox" name="ingataku" value="1" <?php if ($ingataku == '1') echo "checked" ?> id="remember">
                <label for="remember" class="text-gray-700 font-bold">Remember Me</label>
            </div>
            <div class="flex items-center justify-between mb-4">
                <button class="bg-green-800 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit" name="login">
                    Sign In
                </button>
            </div>
            <div class="text-center">
                <a class="inline-block font-bold text-sm text-green-800 hover:text-green-700" href="#">
                    Don't have an account? Register
                </a>
            </div>
        </form>
    </div>
</body>

</html>