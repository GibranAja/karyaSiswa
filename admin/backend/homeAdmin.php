<?php

session_start();
include "./koneksi.php";

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
                    <a href="bookingAdmin.php" class="block py-2 px-4 hover:bg-green-700">Bookings</a>
                </li>
            </ul>
            <a href="#" onclick="openModal('logoutModal')" class="bg-red-500 hover:bg-red-600 text-white font-bold rounded-2xl py-4 px-2 w-[12%] top-[560px] text-center fixed">Logout</a>
        </div>
    </aside>

    <main>
        <div class="flex justify-center items-center h-[670px] p-5">
            <p class="font-semibold text-xl bg-green-800 text-white p-2 rounded shadow-lg transform hover:scale-110 transition-transform duration-500 ease-in-out">
                Selamat datang di Dashboard Admin, <?= $_SESSION['name'] ?>
            </p>
        </div>
    </main>

    <!-- Logout Modal -->
    <div id="logoutModal" class="modal hidden fixed z-10 inset-0 overflow-y-auto">
        <div class="flex items-center justify-center min-h-screen">
            <div class="modal-content bg-white p-8 w-96 mx-auto rounded shadow-lg">
                <h1 class="text-2xl font-bold mb-4">Logout</h1>
                <p class="mb-4">Are you sure you want to logout?</p>
                <div class="flex justify-end">
                    <button type="button" onclick="closeModal('logoutModal')" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded mr-2">Cancel</button>
                    <a href="logout.php" class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <script>
        function openModal(id) {
            document.getElementById(id).classList.remove('hidden');
            document.body.classList.add('overflow-hidden');
            document.getElementById(modalId).classList.remove('hidden');
        }

        function closeModal(id) {
            document.getElementById(id).classList.add('hidden');
            document.body.classList.remove('overflow-hidden');
            document.getElementById(modalId).classList.add('hidden');
        }
    </script>

</body>

</html>