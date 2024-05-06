<?php 
session_start();
$nh="";
if (isset($_GET['nh'])) {
    $nh = $_GET['nh'];
}
echo $nh;
include "../admin/backend/koneksi.php";
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
    <header id="navbar" class="bg-green-800 text-white px-32 py-5 flex items-center justify-between fixed top-0 w-full z-10">
        <a href="index.php" class="text-4xl font-bold mr-1"><span class="text-[#FFB000]">Hai</span><span class="text-[#F5F5DC]">loka</span></a>
        <nav class="text-white md:flex md:items-center md:justify-center hidden">
            <ul class="md:flex md:space-x-4 mr-24">
                <li><a href="#Description" class="hover:text-green-500 hover:bg-green-700 rounded-full p-1.5 duration-200 transition-all">Description</a></li>
                <li><a href="#room" class="hover:text-green-500 hover:bg-green-700 rounded-full p-1.5 duration-200 transition-all">Rooms</a></li>
                <li><a href="#booking" class="hover:text-green-500 hover:bg-green-700 rounded-full p-1.5 duration-200 transition-all">Booking</a></li>
            </ul>
        </nav>
        <button class="md:hidden">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </button>
    </header>
<!-- <div style="background-color: #166534; height: 394.031px; width: 730px; top: 62%; left: 68%; border-radius: 30px; position: absolute; transform: translate(-50%, -50%); z-index: -1;"></div> -->
<section id="Description">
    <main class="gap-2" style="box-sizing: border-box;">
        <h2 class="col-span-3 ml-20 text-2xl text-700 mb-10 font-bold mt-28">Description <span class="text-[#FF902A]">Hotel</span></h2>
        <div class="flex col-span-2" style="align-items: flex-start;">
            <img src="./asset/Hotel-1.png" alt="" class="rounded-3xl ml-20 w-[450px]">
            <article class="relative inline-block flex-grow text-white" style="display: flex;">
                <div class="ml-10 p-10 bg-[#166534] rounded-3xl">
                    <h2 class="mb-5 text-2xl font-bold"><?php echo $nh; ?></h2>
                    <h3 class="font-semibold mb-3">Location : Jalan xxx - </h3>
                    <p class="w-6/" style="box-sizing: border-box;"> Hotel ini adalah sebuah tempat yang luar biasa untuk menginap. Dengan fasilitas yang lengkap dan pelayanan yang memuaskan, hotel ini menjadi pilihan utama bagi para wisatawan.</p>
                </div>
                <div class="absolute left-[2%] top-[100%] p-10 ml-6 mr-32 bg-green-800 rounded-3xl inline-block text-white mt-3 col-span-1">
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
          <img class="w-full" src="./asset/Kamar.png" alt="Sunset in the mountains">
          <div class="px-6 py-4">
            <div class="flex justify-between items-end">
              <div class="font-bold text-lg mb-2">Regular Room</div>
              <span class="text-[#374B43] font-bold text-md block mb-2.5">Rp.500.000</span>
            </div>
            <p>Bed Type : Single</p>
          </div>
        </div>
        <div class="max-w-sm rounded-lg overflow-hidden shadow-lg m-2 bg-white">
          <img class="w-full" src="./asset/Kamar.png" alt="Sunset in the mountains">
          <div class="px-6 py-4">
            <div class="flex justify-between items-end">
              <div class="font-bold text-lg mb-2">Deluxe Room</div>
              <span class="text-[#374B43] font-bold text-md block mb-2.5">Rp.550.000</span>
            </div>
            <p>Bed Type : Double</p>
          </div>
        </div>
        <div class="max-w-sm rounded-lg overflow-hidden shadow-lg m-2 bg-white">
          <img class="w-full" src="./asset/Kamar.png" alt="Sunset in the mountains">
          <div class="px-6 py-4">
            <div class="flex justify-between items-end">
              <div class="font-bold text-lg mb-2">Special Room</div>
              <span class="text-[#374B43] font-bold text-md block mb-2.5">Rp.600.000</span>
            </div>
            <p>Bed Type : King</p>
          </div>
        </div>
    </div>
</section>

<section id="booking">
    <form action="../admin/backend/form.php" method="post">
        <div class="bg-white p-10">
            <h1 class="font-bold text-2xl ml-96 mb-10"><i class="fa-solid fa-ticket mr-5"></i>Booking</h1>
            <div class="bg-white p-12 rounded-2xl shadow-2xl max-w-md mx-auto">
                <h2 class="text-[#88AD6A] font-bold text-lg mb-10"><i class="fa-solid fa-eye mr-2.5"></i>Recently Viewed Hotels</h2>

                <label class="block text-sm font-medium text-gray-700">Name :</label>
                <input type="text" name="name" class="mt-1 p-2 w-full border rounded mb-4">

                <label class="block text-sm font-medium text-gray-700">Hotel :</label>
                <input type="text" name="namahotel" class="mt-1 p-2 w-full border rounded mb-4">
                
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
      targetSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
    }
  });
});
</script>

</body>

</html>