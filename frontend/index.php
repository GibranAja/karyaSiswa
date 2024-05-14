<?php
session_start();

include "../admin/backend/koneksi.php";

$query = "SELECT namahotel, gambar_hotel, deskripsihotel, lokasi FROM tblhotel";
$hotel1 = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($hotel1);
$row2 = mysqli_fetch_assoc($hotel1);
$row3 = mysqli_fetch_assoc($hotel1);
$row4 = mysqli_fetch_assoc($hotel1);
$row5 = mysqli_fetch_assoc($hotel1);
$row6 = mysqli_fetch_assoc($hotel1);
$row7 = mysqli_fetch_assoc($hotel1);
$row8 = mysqli_fetch_assoc($hotel1);
$row9 = mysqli_fetch_assoc($hotel1);


mysqli_close($con);
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://unpkg.com/akar-icons-fonts"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <title>Hailoka</title>
  <style>
    .fade-in {
      opacity: 0;
      animation: fadeIn 1s ease-in-out forwards;
    }

    @keyframes fadeIn {
      0% {
        opacity: 0;
      }

      100% {
        opacity: 1;
      }
    }
  </style>

</head>

<body style="scroll-behavior: smooth;" class="bg-[#f0f0f0]">
  <header id="navbar" class="bg-green-800 text-white px-4 md:px-32 py-5 flex items-center justify-between fixed top-0 w-full z-20"> <!-- Menambahkan z-index yang lebih tinggi pada header -->
    <a href="#" class="text-2xl md:text-4xl font-bold mr-4 md:mr-10">
      <p class="text-[#FFB000]">Hai<span class="text-[#F5F5DC]">loka</span></p>
    </a>
    <button class="md:hidden" id="hamburger-btn">
      <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
      </svg>
    </button>
    <nav id="nav-menu" class="text-white md:flex md:items-center md:justify-center hidden">
      <ul class="md:flex md:space-x-4 mr-0 md:mr-24 flex flex-col items-center md:flex-row">
        <li class="mb-2 md:mb-0">
          <a href="#Home" class="hover:text-green-500 hover:bg-green-700 rounded-full p-1.5 duration-200 transition-all">Home</a>
        </li>
        <li class="mb-2 md:mb-0">
          <a href="#hotel" class="hover:text-green-500 hover:bg-green-700 rounded-full p-1.5 duration-200 transition-all">Hotels</a>
        </li>
        <li class="mb-2 md:mb-0">
          <a href="#services" class="hover:text-green-500 hover:bg-green-700 rounded-full p-1.5 duration-200 transition-all">Services</a>
        </li>
      </ul>
    </nav>
  </header>

  <!-- Home Section -->
  <section id="Home" class="pt-24 md:pt-32">
    <main class="container mx-auto px-4 md:px-20">
      <section class="flex flex-col md:flex-row justify-between items-center min-h-screen">
        <div class="absolute top-0 right-0 w-1/2 md:w-96 order-last md:order-none md:-mt-32">
          <img src="./assets/Images/bg-hero.png" alt="" class="w-full">
        </div>
        <div class="bg-green-700 p-6 md:p-10 rounded-3xl md:mb-0 mb-8">
          <div class="w-full md:w-96">
            <h2 class="text-2xl md:text-4xl font-bold text-white mb-4 md:mb-6 leading-snug"> Enjoy your <span class="text-[#FF920A]">travel</span> comfortably </h2>
            <p class="text-white mb-4 md:mb-5"> Tunggu apalagi, mau mencari hotel yang direkomendasikan? Tinggal klik tombol di bawah ini aja!!</p>
            <div class="flex items-center gap-4 flex-wrap">
              <button id="hotel-btn" class="bg-[#939B62] text-white px-6 md:px-8 py-2 rounded-full flex items-center gap-1.5 mb-2 md:mb-0">
                <span> Look Hotels Now </span>
              </button>
            </div>
          </div>
        </div>
        <div class="relative md:order-last order-first">
          <div>
            <div class="w-72 md:w-96 rounded-full h-72 md:h-96 flex justify-center items-center mx-auto">
              <img src="./asset/Hotel-1.png" alt="" class="w-72 md:w-96 h-72 md:h-96 rounded-full">
            </div>
          </div>
          <div class="bg-white/10 w-max p-1.5 rounded-full absolute top-4 md:top-6 left-4 md:left-8 backdrop-blur-xl transition-all duration-300 hover:-translate-y-5">
            <p class="bg-[#939B62] text-white px-6 md:px-8 py-2 w-max rounded-full text-base md:text-xl font-medium">Luxury</p>
          </div>
          <div class="bg-white/10 w-max p-1.5 rounded-full absolute bottom-2 md:bottom-4 left-4 md:left-8 backdrop-blur-xl transition-all duration-300 hover:-translate-y-5">
            <p class="bg-[#939B62] text-white px-6 md:px-8 py-2 w-max rounded-full text-base md:text-xl font-medium">Comfortable</p>
          </div>
          <div class="bg-white/10 w-max p-1.5 rounded-full absolute top-16 md:top-20 -right-2 md:-right-4 backdrop-blur-xl transition-all duration-300 hover:-translate-y-5">
            <p class="bg-[#939B62] text-white px-6 md:px-8 py-2 w-max rounded-full text-base md:text-xl font-medium">
              <i class="fa-solid fa-star" style="color: #ffc82c;"></i>&nbsp;5
            </p>
          </div>
        </div>
      </section>
    </main>
  </section>

  <!-- Hotel Section -->
  <section id="hotel">
    <h2 class="text-center text-2xl text-700 mb-10 font-bold"><span class="text-[#FF902A]">Recomended</span> for you</h2>
    <div id="cardContainer" class="flex flex-wrap justify-around m-5">
      <div class="max-w-sm rounded-lg overflow-hidden shadow-lg m-2 bg-white">
        <img class="w-[384px] h-[336px]" src="<?php echo $row['gambar_hotel']; ?>" alt="Gambar Hotel">
        <div class="px-6 py-4">
          <div class="flex justify-between items-center mb-2">
            <div class="font-bold text-xl -mb-2"><?php echo $row['namahotel'] ?></div>
            <span class="text-[#374B43] font-bold text-lg "><?php echo $row['lokasi'] ?></span>
          </div>
          <div class="mt-4 flex justify-end">
            <button class="bg-[#416657] text-[#E2F0FF] text-sm rounded px-4 py-2 hover:bg-[#12372A] hover:text-white transition-colors duration-300" onclick="window.location.href = 'hotel.php?nh=<?php echo $row['namahotel'] ?>&gh=<?php echo $row['gambar_hotel'] ?>&lh=<?php echo $row['lokasi'] ?>&dh=<?php echo $row['deskripsihotel'] ?>';">Book Now</button>
          </div>
        </div>
      </div>
      <div class="max-w-sm rounded-lg overflow-hidden shadow-lg m-2 bg-white">
        <img class="w-[384px] h-[336px]" src="<?php echo $row2['gambar_hotel'] ?>" alt="Gambar Hotel">
        <div class="px-6 py-4">
          <div class="flex justify-between items-center mb-2">
            <div class="font-bold text-xl -mb-2"><?php echo $row2['namahotel'] ?></div>
            <span class="text-[#374B43] font-bold text-lg "><?php echo $row2['lokasi'] ?></span>
          </div>
          <div class="mt-4 flex justify-end">
            <button class="bg-[#416657] text-[#E2F0FF] text-sm rounded px-4 py-2 hover:bg-[#12372A] hover:text-white transition-colors duration-300" onclick="window.location.href = 'hotel.php?nh=<?php echo $row2['namahotel'] ?>&gh=<?php echo $row2['gambar_hotel'] ?>&lh=<?php echo $row2['lokasi'] ?>&dh=<?php echo $row2['deskripsihotel'] ?>';">Book Now</button>
          </div>
        </div>
      </div>
      <div class="max-w-sm rounded-lg overflow-hidden shadow-lg m-2 bg-white">
        <img class="w-[384px] h-[336px]" src="<?php echo $row3['gambar_hotel'] ?>" alt="Gambar Hotel">
        <div class="px-6 py-4">
          <div class="flex justify-between items-center mb-2">
            <div class="font-bold text-xl -mb-2"><?php echo $row3['namahotel'] ?></div>
            <span class="text-[#374B43] font-bold text-lg "><?php echo $row3['lokasi'] ?></span>
          </div>
          <div class="mt-4 flex justify-end">
            <button class="bg-[#416657] text-[#E2F0FF] text-sm rounded px-4 py-2 hover:bg-[#12372A] hover:text-white transition-colors duration-300" onclick="window.location.href = 'hotel.php?nh=<?php echo $row3['namahotel'] ?>&gh=<?php echo $row3['gambar_hotel'] ?>&lh=<?php echo $row3['lokasi'] ?>&dh=<?php echo $row3['deskripsihotel'] ?>';">Book Now</button>
          </div>
        </div>
      </div>
      <div class="max-w-sm rounded-lg overflow-hidden shadow-lg m-2 bg-white">
        <img class="w-[384px] h-[336px]" src="<?php echo $row4['gambar_hotel'] ?>" alt="Gambar Hotel">
        <div class="px-6 py-4">
          <div class="flex justify-between items-center mb-2">
            <div class="font-bold text-xl -mb-2"><?php echo $row4['namahotel'] ?></div>
            <span class="text-[#374B43] font-bold text-lg "><?php echo $row4['lokasi'] ?></span>
          </div>
          <div class="mt-4 flex justify-end">
            <button class="bg-[#416657] text-[#E2F0FF] text-sm rounded px-4 py-2 hover:bg-[#12372A] hover:text-white transition-colors duration-300" onclick="window.location.href = 'hotel.php?nh=<?php echo $row4['namahotel'] ?>&gh=<?php echo $row4['gambar_hotel'] ?>&lh=<?php echo $row4['lokasi'] ?>&dh=<?php echo $row4['deskripsihotel'] ?>';">Book Now</button>
          </div>
        </div>
      </div>
      <div class="max-w-sm rounded-lg overflow-hidden shadow-lg m-2 bg-white">
        <img class="w-[384px] h-[336px]" src="<?php echo $row5['gambar_hotel'] ?>" alt="Gambar Hotel">
        <div class="px-6 py-4">
          <div class="flex justify-between items-center mb-2">
            <div class="font-bold text-xl -mb-2"><?php echo $row5['namahotel'] ?></div>
            <span class="text-[#374B43] font-bold text-lg "><?php echo $row5['lokasi'] ?></span>
          </div>
          <div class="mt-4 flex justify-end">
            <button class="bg-[#416657] text-[#E2F0FF] text-sm rounded px-4 py-2 hover:bg-[#12372A] hover:text-white transition-colors duration-300" onclick="window.location.href = 'hotel.php?nh=<?php echo $row5['namahotel'] ?>&gh=<?php echo $row5['gambar_hotel'] ?>&lh=<?php echo $row5['lokasi'] ?>&dh=<?php echo $row5['deskripsihotel'] ?>';">Book Now</button>
          </div>
        </div>
      </div>
      <div class="max-w-sm rounded-lg overflow-hidden shadow-lg m-2 bg-white">
        <img class="w-[384px] h-[336px]" src="<?php echo $row6['gambar_hotel'] ?>" alt="Gambar Hotel">
        <div class="px-6 py-4">
          <div class="flex justify-between items-center mb-2">
            <div class="font-bold text-xl -mb-2"><?php echo $row6['namahotel'] ?></div>
            <span class="text-[#374B43] font-bold text-lg "><?php echo $row6['lokasi'] ?></span>
          </div>
          <div class="mt-4 flex justify-end">
            <button class="bg-[#416657] text-[#E2F0FF] text-sm rounded px-4 py-2 hover:bg-[#12372A] hover:text-white transition-colors duration-300" onclick="window.location.href = 'hotel.php?nh=<?php echo $row6['namahotel'] ?>&gh=<?php echo $row6['gambar_hotel'] ?>&lh=<?php echo $row6['lokasi'] ?>&dh=<?php echo $row6['deskripsihotel'] ?>';">Book Now</button>
          </div>
        </div>
      </div>
      <div class="max-w-sm rounded-lg overflow-hidden shadow-lg m-2 bg-white">
        <img class="w-[384px] h-[336px]" src="<?php echo $row7['gambar_hotel'] ?>" alt="Gambar Hotel">
        <div class="px-6 py-4">
          <div class="flex justify-between items-center mb-2">
            <div class="font-bold text-xl -mb-2"><?php echo $row7['namahotel'] ?></div>
            <span class="text-[#374B43] font-bold text-lg "><?php echo $row7['lokasi'] ?></span>
          </div>
          <div class="mt-4 flex justify-end">
            <button class="bg-[#416657] text-[#E2F0FF] text-sm rounded px-4 py-2 hover:bg-[#12372A] hover:text-white transition-colors duration-300" onclick="window.location.href = 'hotel.php?nh=<?php echo $row7['namahotel'] ?>&gh=<?php echo $row7['gambar_hotel'] ?>&lh=<?php echo $row7['lokasi'] ?>&dh=<?php echo $row7['deskripsihotel'] ?>';">Book Now</button>
          </div>
        </div>
      </div>
      <div class="max-w-sm rounded-lg overflow-hidden shadow-lg m-2 bg-white">
        <img class="w-[384px] h-[336px]" src="<?php echo $row8['gambar_hotel'] ?>" alt="Gambar Hotel">
        <div class="px-6 py-4">
          <div class="flex justify-between items-center mb-2">
            <div class="font-bold text-xl -mb-2"><?php echo $row8['namahotel'] ?></div>
            <span class="text-[#374B43] font-bold text-lg "><?php echo $row8['lokasi'] ?></span>
          </div>
          <div class="mt-4 flex justify-end">
            <button class="bg-[#416657] text-[#E2F0FF] text-sm rounded px-4 py-2 hover:bg-[#12372A] hover:text-white transition-colors duration-300" onclick="window.location.href = 'hotel.php?nh=<?php echo $row8['namahotel'] ?>&gh=<?php echo $row8['gambar_hotel'] ?>&lh=<?php echo $row8['lokasi'] ?>&dh=<?php echo $row8['deskripsihotel'] ?>';">Book Now</button>
          </div>
        </div>
      </div>
      <div class="max-w-sm rounded-lg overflow-hidden shadow-lg m-2 bg-white">
        <img class="w-[384px] h-[336px]" src="<?php echo $row9['gambar_hotel'] ?>" alt="Gambar Hotel">
        <div class="px-6 py-4">
          <div class="flex justify-between items-center mb-2">
            <div class="font-bold text-xl -mb-2"><?php echo $row9['namahotel'] ?></div>
            <span class="text-[#374B43] font-bold text-lg "><?php echo $row9['lokasi'] ?></span>
          </div>
          <div class="mt-4 flex justify-end">
            <button class="bg-[#416657] text-[#E2F0FF] text-sm rounded px-4 py-2 hover:bg-[#12372A] hover:text-white transition-colors duration-300" onclick="window.location.href = 'hotel.php?nh=<?php echo $row9['namahotel'] ?>&gh=<?php echo $row9['gambar_hotel'] ?>&lh=<?php echo $row9['lokasi'] ?>&dh=<?php echo $row9['deskripsihotel'] ?>';">Book Now</button>
          </div>
        </div>
      </div>
    </div>
    <div class="flex justify-center items-center">
      <button id="loadMore" class="bg-[#416657] text-[#E2F0FF] text-sm rounded px-4 py-2 hover:bg-[#12372A] hover:text-white transition-colors duration-300">See Less</button>
    </div>
  </section>

  <section class="flex flex-col items-center" id="services">
    <div class="container mx-auto px-4">
      <h1 class="my-10 text-2xl font-bold">Why should you book using <span class="text-orange-500 font-extrabold">Hailoka</span></h1>
      <div class="flex flex-wrap -mx-2">
        <div class="w-full md:w-1/3 px-2">
          <div class="flex flex-col items-center border-0">
            <img src="./asset/MiniHotel.png" class="w-24 h-28 p-3" alt="Kopi 1">
            <div class="text-center">
              <h5 class="text-sm font-bold">Choose your Hotel</h5>
              <p class="text-sm">There are many hotels recommended for you</p>
            </div>
          </div>
        </div>
        <div class="w-full md:w-1/3 px-2">
          <div class="flex flex-col items-center border-0">
            <img src="./asset/Hotel Serve.png" class="w-32 h-40 p-3" alt="Kopi 2">
            <div class="text-center">
              <h5 class="text-sm font-bold">We enjoy it to you</h5>
              <p class="text-sm">Choose delivery service</p>
            </div>
          </div>
        </div>
        <div class="w-full md:w-1/3 px-2">
          <div class="flex flex-col items-center border-0">
            <img src="./asset/Enjoy Journey.png" class="w-52 h-28 p-3" alt="Kopi 3">
            <div class="text-center">
              <h5 class="text-sm font-bold">Enjoy your travel</h5>
              <p class="text-sm">Choose delivery service</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer Section -->
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
          <li><a href="#" class="hover:underline flex items-center mb-2 md:mb-0 md:mr-4"><i class="fa-brands fa-whatsapp mr-2"></i>WhatsApp</a></li>
          <li><a href="#" class="hover:underline flex items-center mb-2 md:mb-0"><i class="fa-brands fa-instagram mr-2"></i>Instagram</a></li>
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
    window.addEventListener('load', function() {
      const elements = document.querySelectorAll('body > *:not(script)');
      elements.forEach(element => {
        element.classList.add('fade-in');
      });
    });

    document.addEventListener("DOMContentLoaded", function() {
      const cards = document.querySelectorAll('.max-w-sm.rounded-lg.overflow-hidden.shadow-lg.m-2.bg-white');
      const loadMoreBtn = document.getElementById('loadMore');
      const seeLessBtn = document.createElement('button');
      seeLessBtn.textContent = 'See More';
      seeLessBtn.classList.add('bg-[#416657]', 'text-[#E2F0FF]', 'text-sm', 'rounded', 'px-4', 'py-2', 'hover:bg-[#12372A]', 'hover:text-white', 'transition-colors', 'duration-300', 'hidden');
      loadMoreBtn.addEventListener('click', function() {
        cards.forEach(function(card, index) {
          if (index > 5) {
            card.classList.toggle('hidden');
          }
        });
        loadMoreBtn.classList.add('hidden');
        seeLessBtn.classList.remove('hidden');
      });

      seeLessBtn.addEventListener('click', function() {
        cards.forEach(function(card, index) {
          if (index > 5) {
            card.classList.toggle('hidden');
          }
        });
        loadMoreBtn.classList.remove('hidden');
        seeLessBtn.classList.add('hidden');
      });

      if (cards.length <= 6) {
        loadMoreBtn.classList.add('hidden');
      } else {
        loadMoreBtn.classList.remove('hidden');
      }

      loadMoreBtn.parentNode.insertBefore(seeLessBtn, loadMoreBtn.nextSibling);
    });

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

    
const hamburgerBtn = document.querySelector('#hamburger-btn');
const navMenu = document.querySelector('#nav-menu');

hamburgerBtn.addEventListener('click', () => {
  navMenu.classList.toggle('hidden');
});

const hotelBtn = document.getElementById('hotel-btn');
  const hotelSection = document.getElementById('hotel');

  hotelBtn.addEventListener('click', () => {
    hotelSection.scrollIntoView({ behavior: 'smooth' });
  });
  </script>
</body>

</html>