<?php
session_start();
$nh = "";
$gh = "";
$lh = "";
$dh = "";

if (isset($_GET['nh'])) {
    $nh = $_GET['nh'];
}

if (isset($_GET['gh'])) {
    $gh = $_GET['gh'];
}

if (isset($_GET['lh'])) {
    $lh = $_GET['lh'];
}

if (isset($_GET['dh'])) {
    $dh = $_GET['dh'];
}

include "../admin/backend/koneksi.php";

$query = "SELECT * FROM tblroom";
$hotel1 = mysqli_query($con, $query);

$row = mysqli_fetch_assoc($hotel1);
$row2 = mysqli_fetch_assoc($hotel1);
$row3 = mysqli_fetch_assoc($hotel1);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/akar-icons-fonts"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>Document</title>
</head>

<body class="scroll-behavior">
<header id="navbar" class="bg-green-800 text-white px-4 md:px-32 py-5 flex items-center justify-between fixed top-0 w-full z-10">
  <a href="../frontend/index.php" class="text-2xl md:text-4xl font-bold mr-4 md:mr-10">
    <p class="text-[#FFB000]">Hai<span class="text-[#F5F5DC]">loka</span></p>
  </a>
  <nav class="text-white sm:flex md:items-center md:justify-center hidden" id="nav-menu">
    <ul class="sm:flex md:space-x-4 mr-0 md:mr-24 flex items-center sm:flex-row">
      <li class="mb-2 md:mb-0">
        <a href="#Description" class="hover:text-green-500 hover:bg-green-700 rounded-full p-1.5 duration-200 transition-all">Description</a>
      </li>
      <li class="mb-2 md:mb-0">
        <a href="#room" class="hover:text-green-500 hover:bg-green-700 rounded-full p-1.5 duration-200 transition-all">Rooms</a>
      </li>
      <li class="mb-2 md:mb-0">
        <a href="#booking" class="hover:text-green-500 hover:bg-green-700 rounded-full p-1.5 duration-200 transition-all">Booking</a>
      </li>
    </ul>
  </nav>
  <button class="md:hidden" id="hamburger-btn">
    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
    </svg>
  </button>
</header>

    <section id="Description" class="px-4 py-8 md:px-8 lg:px-16">
        <main class="gap-2">
            <h2 class="col-span-3 ml-5 md:ml-10 lg:ml-20 text-2xl text-700 mb-10 font-bold mt-8 md:mt-14 lg:mt-28">Description <span class="text-[#FF902A]">Hotel</span></h2>
            <div class="flex flex-col md:flex-row md:items-start">
            <img src="<?php echo $gh; ?>" alt="" class="rounded-3xl mx-auto md:ml-5 lg:ml-20 mb-6 md:mb-0 w-full md:w-[384px] h-auto md:h-[336px]">
            <article class="relative inline-block flex-grow text-white md:ml-6 lg:ml-10">
                <div class="p-5 md:p-10 bg-[#166534] rounded-3xl">
                <h2 class="mb-5 text-xl md:text-2xl font-bold"><?php echo $nh; ?></h2>
                <h3 class="font-semibold mb-3">Location : <?php echo $lh ?></h3>
                <p class="w-full md:w-6/7"><?php echo $dh ?></p>
                </div>
                <div class="p-5 md:p-10 ml-2 md:ml-6 mr-2 md:mr-32 bg-green-800 rounded-3xl inline-block text-white mt-3 col-span-1 md:absolute md:-left-5">
                <h2 class="mb-2 text-xl font-bold">Facilities</h2>
                <ul>
                    <li><i class="ai-air mr-2"></i>AC</li>
                    <li><i class="ai-utensils mr-2"></i>Restaurant</li>
                    <li><i class="fa-sharp fa-solid fa-person-swimming mr-2"></i>Swimming pool</li>
                    <li><i class="ai-wifi mr-2"></i>Wifi</li>
                    <li><i class="fa-sharp fa-solid fa-p mr-2"></i>Parking</li>
                    <li><i class="fa-sharp fa-solid fa-elevator mr-2"></i>Elevator</li>
                </ul>
                </div>
            </article>
            </div>
        </main>
    </section>

    <section id="room" class="mt-[300px]">
        <h2 class="text-center text-2xl text-700 mb-10 font-bold"><span class="text-[#FF902A]">Recomended</span> for you</h2>
        <div id="cardContainer" class="flex flex-wrap justify-around m-5">
            <div class="max-w-sm rounded-lg overflow-hidden shadow-lg m-2 bg-white">
                <img class="w-full" src="<?php echo $row['gambar_kamar'] ?>" alt="Sunset in the mountains">
                <div class="px-6 py-4">
                    <div class="flex justify-between items-end">
                        <div class="font-bold text-lg mb-2"><?php echo $row['tipe_room'] ?></div>
                        <span class="text-[#374B43] font-bold text-md block mb-2.5"><?php echo $row['harga_permalam'] ?></span>
                    </div>
                    <p>Bed Type : <?php echo $row['bed_tipe'] ?></p>
                </div>
            </div>
            <div class="max-w-sm rounded-lg overflow-hidden shadow-lg m-2 bg-white">
                <img class="w-[270px] h-[148px]" src="<?php echo $row2['gambar_kamar'] ?>" alt="Sunset in the mountains">
                <div class="px-6 py-4">
                    <div class="flex justify-between items-end">
                        <div class="font-bold text-lg mb-2"><?php echo $row2['tipe_room'] ?></div>
                        <span class="text-[#374B43] font-bold text-md block mb-2.5"><?php echo $row2['harga_permalam'] ?></span>
                    </div>
                    <p>Bed Type : <?php echo $row2['bed_tipe'] ?></p>
                </div>
            </div>
            <div class="max-w-sm rounded-lg overflow-hidden shadow-lg m-2 bg-white">
                <img class="w-[270px] h-[148px]" src="<?php echo $row3['gambar_kamar'] ?>" alt="Sunset in the mountains">
                <div class="px-6 py-4">
                    <div class="flex justify-between items-end">
                        <div class="font-bold text-lg mb-2"><?php echo $row3['tipe_room'] ?></div>
                        <span class="text-[#374B43] font-bold text-md block mb-2.5"><?php echo $row3['harga_permalam'] ?></span>
                    </div>
                    <p>Bed Type : <?php echo $row3['bed_tipe'] ?></p>
                </div>
            </div>
        </div>
    </section>

    <section id="booking">
        <form action="../admin/backend/form.php" method="post">
            <div class="bg-white p-10">
                <h1 class="font-bold text-2xl text-center md:text-center md:flex md:justify-center md:items-center mb-10 flex items-center"><i class="fa-solid fa-ticket mr-5"></i>Booking</h1>
                <div class="bg-white p-12 rounded-2xl shadow-2xl max-w-md mx-auto">
                    <h2 class="text-[#88AD6A] font-bold text-lg mb-10"><i class="fa-solid fa-eye mr-2.5"></i>Recently Viewed Hotels</h2>

                    <label class="block text-sm font-medium text-gray-700">Name :</label>
                    <input type="text" name="name" class="mt-1 p-2 w-full border rounded mb-4">

                    <label class="block text-sm font-medium text-gray-700">Hotel :</label>
                    <input type="text" name="namahotel" value="<?php echo $nh; ?>" class="mt-1 p-2 w-full border rounded mb-4" readonly>

                    <label class="block text-sm font-medium text-gray-700">Phone Number :</label>
                    <input type="number" name="phone" class="mt-1 p-2 w-full border rounded mb-4">

                    <label for="room_type" class="block text-sm font-medium text-gray-700"><i class="fa-solid fa-city mr-2.5"></i>Room Type:</label>
                    <select id="room_type" name="room_type" class="mt-1 p-2 w-full border rounded mb-4">
                        <option value="" disabled selected>Select a room type</option>
                        <option value="Regular">Regular Room</option>
                        <option value="Deluxe">Deluxe Room</option>
                        <option value="Special">Special Room</option>
                    </select>

                    <div class="grid grid-cols-2 gap-x-4 mb-4">
                        <div>
                            <label for="checkin" class="block text-sm font-medium text-gray-700"><i class="fa-solid fa-calendar mr-5"></i>Check-in</label>
                            <input type='date' id='checkin' name='checkin' class='mt-1 p-2 w-full border rounded'>
                        </div>

                        <div>
                            <label for='checkout' class='block text-sm font-medium text-gray-700'><i class="fa-solid fa-calendar mr-5"></i>Check-out</label>
                            <input type='date' id='checkout' name='checkout' class='mt-1 p-2 w-full border rounded'>
                        </div>
                    </div>

                    <button type="submit" class="bg-[#416657] mt-3 px-5 py-2 rounded focus:outline-none focus:border-blue hover:bg-[#12372A] text-white duration-200 transition-all">Booking Now</button>

                </div>
            </div>
        </form>
    </section>

    <footer class="bg-gray-800 text-white p-4 mt-10">
    <div class="container mx-auto flex flex-wrap justify-between items-center">
      <div class="w-full md:w-1/4 mb-8 md:mb-0">
        <h2 class="text-4xl font-bold mx-auto text-center md:mx-0 md:text-center"><span class="text-[#FFB000]">Hai</span><span class="text-[#F5F5DC]">loka</span></h2>
      </div>
      <div class="w-full md:w-1/4 mb-8 md:mb-0 flex flex-col md:flex-row justify-center items-center">
        <h3 class="text-xl font-bold mb-4 md:mb-0 md:mr-12">Hubungi Kami</h3>
        <ul class="text-sm flex flex-col md:flex-row">
          <li><a href="#" class="hover:underline flex items-center mb-2 md:mb-0 md:mr-4"><i class="fa-solid fa-envelope mr-2"></i>Email</a></li>
          <li><a href="#" class="hover:underline flex items-center mb-2 md:mb-0 md:mr-4"><i class="fa-solid fa-phone mr-2"></i>Telepon</a></li>
        </ul>
      </div>
      <div class="w-full md:w-1/4 mb-8 md:mb-0">
        <h3 class="text-xl font-bold text-[#FF920A] text-center mb-2">PROMO!!!</h3>
        <p class="text-sm mb-4">Dapatkan berita terbaru dan promo menarik dari kami dengan mendaftar newsletter.</p>
        <form>
          <input type="email" class="bg-gray-700 text-white p-2 rounded w-full mb-2" placeholder="Masukkan email Anda">
          <button type="submit" class="bg-blue-600 text-white p-2 rounded w-full">Daftar</button>
        </form>
      </div>
    </div>
    <div class="mt-8 text-center text-sm">
      <p>© 2024 | Punya Gibran.</p>
    </div>
  </footer>

    <script>
        // Ini Buat Checkin
        var today = new Date();
        var dd = String(today.getDate()).padStart(2, '0');
        var mm = String(today.getMonth() + 1).padStart(2, '0'); //Januari itu 0
        var yyyy = today.getFullYear();

        today = yyyy + '-' + mm + '-' + dd;

        // Ini Buat Checkout
        var tomorrow = new Date();
        tomorrow.setDate(tomorrow.getDate() + 1);
        var dd = String(tomorrow.getDate()).padStart(2, '0');
        var mm = String(tomorrow.getMonth() + 1).padStart(2, '0'); //Januari itu 0
        var yyyy = tomorrow.getFullYear();

        tomorrow = yyyy + '-' + mm + '-' + dd;

        // Pemanggilan
        document.getElementById('checkin').value = today;
        document.getElementById('checkout').value = tomorrow;

        function scrollSpy() {
            const sections = document.querySelectorAll('section[id]');
            const navbarLinks = document.querySelectorAll('#navbar a');

            sections.forEach(section => {
                const sectionTop = section.offsetTop - 100;
                const sectionHeight = section.clientHeight;
                const id = section.getAttribute('id');

                if (window.pageYOffset >= sectionTop && window.pageYOffset < sectionTop + sectionHeight) {
                    navbarLinks.forEach(link => {
                        link.classList.remove('text-[#FFB000]');
                    });

                    document.querySelector(`#navbar a[href="#${id}"]`).classList.add('text-[#FFB000]');
                }
            });
        }

        window.addEventListener('scroll', scrollSpy);

        document.querySelectorAll('#navbar a').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();

                const targetId = this.getAttribute('href').substring(1);
                const targetSection = document.getElementById(targetId);

                if (targetSection) {
                    targetSection.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        
        document.addEventListener('DOMContentLoaded', function() {
  var hamburgerBtn = document.getElementById('hamburger-btn');
  var navMenu = document.getElementById('nav-menu');

  hamburgerBtn.addEventListener('click', function() {
    // Toggle class 'open' on hamburger button
    hamburgerBtn.classList.toggle('open');

    // Check if 'open' class is present, then change SVG to 'X' or hamburger menu
    if (hamburgerBtn.classList.contains('open')) {
      hamburgerBtn.innerHTML = `
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
        </svg>`;
    } else {
      hamburgerBtn.innerHTML = `
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
        </svg>`;
    }

    // Toggle display of navigation menu
    navMenu.classList.toggle('hidden');
  });
});
    </script>

</body>

</html>