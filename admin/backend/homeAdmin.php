<?php

session_start();
include "./koneksi.php";
include "./sidebar.php";

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