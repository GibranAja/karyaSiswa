<?php

include "./koneksi.php";

if (isset($_POST['submit_room'])) {
    $tipe_room = $_POST['tipe_room'];
    $bed_tipe = $_POST['bed_type'];
    $harga = $_POST['harga'];
    $gambarHotel = $_POST['gambar_hotel'];

    $insert_sql = "INSERT INTO tblroom (tipe_room, bed_tipe, harga_permalam, gambar_hotel)
    VALUES ('$tipe_room', '$bed_tipe', '$harga', '$gambarHotel')";
    mysqli_query($con, $insert_sql);

    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['userId'])) {
    $roomId = $_POST['userId'];

    $sql = "DELETE FROM tblroom WHERE id = $roomId";

    if ($con->query($sql) === TRUE) {
        header("Location: roomAdmin.php");
        exit();
    } else {
        echo "Error deleting user: " . $con->error;
    }

    $con->close();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
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

    <main class="ml-64 p-10">
        <h1 class="text-2xl font-bold mb-5">Rooms</h1>

        <button onclick="openModal('addUserModal')" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded mb-5">Add Room</button>

        <table class="w-full bg-white shadow-md rounded my-6">
            <thead>
                <tr class="border-b">
                    <th class="text-left p-3 px-5">ID</th>
                    <th class="text-left p-3 px-5">Tipe Kamar</th>
                    <th class="text-left p-3 px-5">Bed Type</th>
                    <th class="text-left p-3 px-5">Harga per Malam</th>
                    <th class="text-left p-3 px-5">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "./koneksi.php";

                $results_per_page = 5;
                $sql = "SELECT * FROM tblroom";
                $result = $con->query($sql);
                $number_of_results = mysqli_num_rows($result);
                $number_of_pages = ceil($number_of_results / $results_per_page);

                if (!isset($_GET['page'])) {
                    $page = 1;
                } else {
                    $page = $_GET['page'];
                }

                $this_page_first_result = ($page - 1) * $results_per_page;

                $sql = "SELECT * FROM tblroom LIMIT " . $this_page_first_result . ',' .  $results_per_page;
                $result = $con->query($sql);
                $id = 1 + $this_page_first_result;

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td class='p-3 px-5'>" . $id++ . "</td>";
                        echo "<td class='p-3 px-5'>" . $row['tipe_room'] . "</td>";
                        echo "<td class='p-3 px-5'>" . $row['bed_tipe'] . "</td>";
                        echo "<td class='p-3 px-5'>" . $row['harga_permalam'] . "</td>";
                        echo "<td class='p-3 px-5'>";
                        echo "<button onclick=\"openEditModal('" . $row['id'] . "', '" . $row['tipe_room'] . "', '" . $row['bed_tipe'] . "', '" . $row['harga_permalam'] . "')\" class='bg-blue-500 hover:bg-blue-600 text-white font-bold py-1 px-3 rounded mr-2'>Edit</button>";
                        echo "<button onclick=\"openDeleteModal('" . $row['id'] . "', '" . $row['tipe_room'] . "', '" . $row['bed_tipe'] . "', '" . $row['harga_permalam'] . "')\" class='bg-red-500 hover:bg-red-600 text-white font-bold py-1 px-3 rounded'>Delete</button>";
                        echo "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='7' class='p-3 px-5 text-center'>No users found.</td></tr>";
                }

                $con->close();
                ?>
            </tbody>
        </table>

        <!-- Pagination -->
        <div class="flex justify-center mt-5">
            <?php
            if ($page > 1) {
                echo '<a href="roomAdmin.php?page=' . ($page - 1) . '" class="mx-1 px-3 py-2 bg-gray-300 text-gray-700 hover:bg-gray-400 rounded-md">Prev</a>';
            }

            for ($i = max(1, $page - 2); $i <= min($number_of_pages, $page + 2); $i++) {
                $activeClass = ($i == $page) ? 'bg-blue-500 text-white' : 'bg-gray-300 text-gray-700 hover:bg-gray-400';
                echo '<a href="roomAdmin.php?page=' . $i . '" class="mx-1 px-3 py-2 ' . $activeClass . ' rounded-md">' . $i . '</a>';
            }

            if ($page < $number_of_pages) {
                echo '<a href="roomAdmin.php?page=' . ($page + 1) . '" class="mx-1 px-3 py-2 bg-gray-300 text-gray-700 hover:bg-gray-400 rounded-md">Next</a>';
            }
            ?>
        </div>
    </main>

    <!-- Modal for adding new user -->
    <div id="addUserModal" class="modal hidden fixed z-10 inset-0 overflow-y-auto">
        <div class="flex items-center justify-center min-h-screen">
            <div class="modal-content bg-white p-8 w-96 mx-auto rounded shadow-lg">
                <div class="flex justify-between items-center mb-4">
                    <h1 class="text-2xl font-bold">Add User</h1>
                    <button onclick="closeModal('addUserModal')" class="text-gray-500 hover:text-gray-700">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
                <form action="" method="post">
                    <!-- <label for="name" class="block mb-2">Type Room</label>
                    <input type="text" name="type_room" id="name" class="w-full border border-gray-300 rounded-md mb-4" required> -->

                    <label for="room_type" class="block text-sm font-medium text-gray-700"><i class="fa-solid fa-city mr-2.5"></i>Room Type:</label>
                    <select id="room_type" name="tipe_room" class="w-full border border-gray-300 rounded-md mb-4">
                        <option value="" disabled selected>Select a room type</option>
                        <option value="Regular">Regular Room</option>
                        <option value="Deluxe">Deluxe Room</option>
                        <option value="Special">Special Room</option>
                    </select>

                    <label for="room_type" class="block text-sm font-medium text-gray-700"><i class="fa-solid fa-city mr-2.5"></i>Room Type:</label>
                    <select id="room_type" name="bed_type" class="w-full border border-gray-300 rounded-md mb-4">
                        <option value="" disabled selected>Select a bed type</option>
                        <option value="Single">Single</option>
                        <option value="Double">Double</option>
                        <option value="King">King</option>
                    </select>

                    <!-- <label for="phone" class="block mb-2">Bed Type</label>
                    <input type="tel" name="bed_room" id="phone" class="w-full border border-gray-300 rounded-md mb-4" required> -->

                    <label for="phone" class="block mb-2">Harga per Malam</label>
                    <input type="tel" name="harga" id="phone" class="w-full border border-gray-300 rounded-md mb-4" required>


                    <!-- <label for="checkin" class="block text-sm font-medium text-gray-700"><i class="fa-solid fa-calendar mr-5"></i>Check-in</label>
                    <input type='date' id='checkin' name='checkin' class='w-full border border-gray-300 rounded-md mb-4'>

                    <label for='checkout' class='block text-sm font-medium text-gray-700'><i class="fa-solid fa-calendar mr-5"></i>Check-out</label>
                    <input type='date' id='checkout' name='checkout' class='w-full border border-gray-300 rounded-md mb-4'> -->

                    <button type="submit" name="submit_room" class="w-full bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded">Add User</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Delete Confirmation Modal -->
    <div id="deleteUserModal" class="modal hidden fixed z-10 inset-0 overflow-y-auto">
        <div class="flex items-center justify-center min-h-screen">
            <div class="modal-content bg-white p-8 w-96 mx-auto rounded shadow-lg">
                <h1 class="text-2xl font-bold mb-4">Delete User</h1>
                <p class="mb-4">Are you sure you want to delete user <span id="deleteUserName"></span>?</p>
                <form action="" method="post">
                    <input type="hidden" name="userId" id="deleteUserId">
                    <div class="flex justify-end">
                        <button type="button" onclick="closeModal('deleteUserModal')" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded mr-2">Cancel</button>
                        <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded">Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

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

    <!-- Javascript start -->
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

        function openEditModal(id, name, phone) {
            // Logic to open edit modal
        }

        function openDeleteModal(id, name) {
            document.getElementById('deleteUserName').innerText = name;
            document.getElementById('deleteUserId').value = id;
            openModal('deleteUserModal');
        }
    </script>

</body>

</html>