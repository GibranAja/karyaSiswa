<?php 

session_start();

?>

<!DOCTYPE html>
<html lang="en" style="margin: 0; padding: 0;">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>


<body class="bg-gray-100">

<aside class="bg-green-800 text-white h-screen w-[15%] fixed top-0 left-0 z-10">
        <div class="p-5">
                <h1 class="text-2xl font-bold flex">Admin&nbsp;<span class="text-[#ffb500]">Hai</span><span class="">Loka</span></h1>
            <ul class="mt-5">
                <li class="mb-3">
                    <a href="homeAdmin.php" class="block py-2 px-4 hover:bg-green-700">Home</a>
                </li>
                <li class="mb-3">
                    <a href="userAdmin.php" class="block py-2 px-4 hover:bg-green-700">Users</a>
                </li>
                <li class="mb-3">
                    <a href="roomAdmin.php" class="block py-2 px-4 hover:bg-green-700">Rooms</a>
                </li>
                <li class="mb-3">
                    <a href="bookingUser.php" class="block py-2 px-4 hover:bg-green-700">Bookings</a>
                </li>
            </ul>
        </div>
    </aside>

    <main>
        <div class="flex justify-center items-center h-[670px] p-5 ">
            <p class="font-semibold text-xl bg-green-800 text-white p-2 rounded">Selamat datang di Dashboard Admin, <?= $_SESSION['name'] ?></p>
        </div>
    </main>
</body>
</html>