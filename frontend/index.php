<?php 
session_start();

include "../admin/backend/koneksi.php";

$query = "SELECT namahotel, gambar_hotel FROM tblhotel";
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
    <header id="navbar" class="bg-green-800 text-white px-32 py-5 flex items-center justify-between fixed top-0 w-full z-10">
        <a href="#" class="text-4xl font-bold mr-10"><span class="text-[#FFB000]">Hai</span><span class="text-[#F5F5DC]">loka</span></a>
        <button class="md:hidden">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
        </button>
        <div class="flex">
            <i class="fa-solid fa-magnifying-glass absolute top-8 text-black" style="left: 25%;"></i>
            <input type="text" name="text"  placeholder="Look for a hotel" class="ml-10 items-center py-1 bg-opacity-35 focus:outline-none focus:ring focus:ring-green-900 text-black pl-8 rounded-full">
        </div>
    <nav class="text-white md:flex md:items-center md:justify-center hidden ml-96">
        <ul class="md:flex md:space-x-4 mr-24">
        <li><a href="#Home" class="hover:text-green-500 hover:bg-green-700 rounded-full p-1.5 duration-200 transition-all">Home</a></li>
        <li><a href="#hotel" class="hover:text-green-500 hover:bg-green-700 rounded-full p-1.5 duration-200 transition-all">Hotels</a></li>
        <li><a href="#booking" class="hover:text-green-500 hover:bg-green-700 rounded-full p-1.5 duration-200 transition-all">Booking</a></li>
        <li><a href="#services" class="hover:text-green-500 hover:bg-green-700 rounded-full p-1.5 duration-200 transition-all">Services</a></li>
        </ul>
    </nav>
    </header>

    <!-- Home Section -->
    <section id="Home" class="">
        <main class="container mx-auto px-20">
            <section class="flex justify-between items-center h-screen">
                <div class="absolute top-0 right-0 w-96">
                    <img src="./assets/Images/bg-hero.png" alt="">
                </div>

                <div class="bg-green-700 p-10 rounded-3xl">
              <div class="w-96">
                <h2 class="text-4xl font-bold text-white mb-6 leading-snug">
                  Enjoy your <span class="text-[#FF920A]">travel</span> comfortably
                </h2>
                <p class="text-white mb-5">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Veritatis qui natus
                </p>
        
                <div  class="flex items-center gap-4">
                    <button class="bg-[#939B62] text-white px-8 py-2 rounded-full flex items-center gap-1.5">
                        <span>
                            Order Now
                        </span>
                        <span class="w-7 h-7 bg-[#ff902a] rounded-full grid place-items-center text-sm">
                            <i class="fa-regular fa-cart-shopping"></i>
                        </span>
                    </button>
                    <button class="px-8 py-2 text-[#ff710a] hover:text-[#ff920a] font-extrabold duration-200 transition-all">More menu</button>
                </div>
              </div>
            </div>
          
              <div class="relative">
              <div>
                <div class="w-96 rounded-full h-96 flex justify-center items-center">
                  <img src="./asset/Hotel-1.png" alt="" class="w-96 h-96 rounded-full ">
                </div>
              </div>
        
              <div class="bg-white/10 w-max p-1.5 rounded-full absolute top-6 left-8 backdrop-blur-xl transition-all duration-300 hover:-translate-y-5">
                <p class="bg-[#939B62] text-white px-8 py-2 w-max rounded-full text-xl font-medium">Luxury</p>
              </div>
        
              <div class="bg-white/10 w-max p-1.5 rounded-full absolute bottom-4 left-8 backdrop-blur-xl transition-all duration-300 hover:-translate-y-5">
                <p class="bg-[#939B62] text-white px-8 py-2 w-max rounded-full text-xl font-medium">Comfortable</p>
              </div>
        
              <div class="bg-white/10 w-max p-1.5 rounded-full absolute top-20 -right-4 backdrop-blur-xl transition-all duration-300 hover:-translate-y-5">
                <p class="bg-[#939B62] text-white px-8 py-2 w-max rounded-full text-xl font-medium"> <i class="fa-solid fa-star" style="color: #ffc82c;"></i>&nbsp;5</p>
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
              <img class="w-full" src="<?php echo $row['gambar_hotel']; ?>" alt="Sunset in the mountains">
              <div class="px-6 py-4">
                <div class="flex justify-between items-end">
                  <div class="font-bold text-xl mb-2"><?php echo $row['namahotel'] ?></div>
                  <span class="text-[#374B43] font-bold text-lg block">Rp.600.000</span>
                </div>
                <div class="mt-4 flex justify-end">
                <button class="bg-[#416657] text-[#E2F0FF] text-sm rounded px-4 py-2 hover:bg-[#12372A] hover:text-white transition-colors duration-300" onclick="window.location.href = 'hotel.php?nh=<?php echo $row9['namahotel'] ?>&gh=<?php echo $row['gambar_hotel'] ?>';">Book Now</button>
                </div>
              </div>
            </div>
            <div class="max-w-sm rounded-lg overflow-hidden shadow-lg m-2 bg-white">
              <img class="w-[384px] h-[336px]" src="<?php echo $row2['gambar_hotel'] ?>" alt="Sunset in the mountains">
              <div class="px-6 py-4">
                <div class="flex justify-between items-end">
                  <div class="font-bold text-xl mb-2"><?php echo $row2['namahotel'] ?></div>
                  <span class="text-[#374B43] font-bold text-lg block">Rp.600.000</span>
                </div>
                <div class="mt-4 flex justify-end">
                <button class="bg-[#416657] text-[#E2F0FF] text-sm rounded px-4 py-2 hover:bg-[#12372A] hover:text-white transition-colors duration-300" onclick="window.location.href = 'hotel.php?nh=<?php echo $row9['namahotel'] ?>&gh=<?php echo $row2['gambar_hotel'] ?>';">Book Now</button>
                </div>
              </div>
            </div>
            <div class="max-w-sm rounded-lg overflow-hidden shadow-lg m-2 bg-white">
              <img class="w-[384px] h-[336px]" src="<?php echo $row3['gambar_hotel'] ?>" alt="Sunset in the mountains">
              <div class="px-6 py-4">
                <div class="flex justify-between items-end">
                  <div class="font-bold text-xl mb-2"><?php echo $row3['namahotel'] ?></div>
                  <span class="text-[#374B43] font-bold text-lg block">Rp.600.000</span>
                </div>
                <div class="mt-4 flex justify-end">
                <button class="bg-[#416657] text-[#E2F0FF] text-sm rounded px-4 py-2 hover:bg-[#12372A] hover:text-white transition-colors duration-300" onclick="window.location.href = 'hotel.php?nh=<?php echo $row9['namahotel'] ?>&gh=<?php echo $row3['gambar_hotel'] ?>';">Book Now</button>
                </div>
              </div>
            </div>
            <div class="max-w-sm rounded-lg overflow-hidden shadow-lg m-2 bg-white">
              <img class="w-[384px] h-[336px]" src="<?php echo $row4['gambar_hotel'] ?>" alt="Sunset in the mountains">
              <div class="px-6 py-4">
                <div class="flex justify-between items-end">
                  <div class="font-bold text-xl mb-2"><?php echo $row4['namahotel'] ?></div>
                  <span class="text-[#374B43] font-bold text-lg block">Rp.600.000</span>
                </div>
                <div class="mt-4 flex justify-end">
                <button class="bg-[#416657] text-[#E2F0FF] text-sm rounded px-4 py-2 hover:bg-[#12372A] hover:text-white transition-colors duration-300" onclick="window.location.href = 'hotel.php?nh=<?php echo $row9['namahotel'] ?>&gh=<?php echo $row4['gambar_hotel'] ?>';">Book Now</button>
                </div>
              </div>
            </div>
            <div class="max-w-sm rounded-lg overflow-hidden shadow-lg m-2 bg-white">
              <img class="w-[384px] h-[336px]" src="<?php echo $row5['gambar_hotel'] ?>" alt="Sunset in the mountains">
              <div class="px-6 py-4">
                <div class="flex justify-between items-end">
                  <div class="font-bold text-xl mb-2"><?php echo $row5['namahotel'] ?></div>
                  <span class="text-[#374B43] font-bold text-lg block">Rp.600.000</span>
                </div>
                <div class="mt-4 flex justify-end">
                <button class="bg-[#416657] text-[#E2F0FF] text-sm rounded px-4 py-2 hover:bg-[#12372A] hover:text-white transition-colors duration-300" onclick="window.location.href = 'hotel.php?nh=<?php echo $row9['namahotel'] ?>&gh=<?php echo $row5['gambar_hotel'] ?>';">Book Now</button>
                </div>
              </div>
            </div>
            <div class="max-w-sm rounded-lg overflow-hidden shadow-lg m-2 bg-white">
              <img class="w-[384px] h-[336px]" src="<?php echo $row6['gambar_hotel'] ?>" alt="Sunset in the mountains">
              <div class="px-6 py-4">
                <div class="flex justify-between items-end">
                  <div class="font-bold text-xl mb-2"><?php echo $row6['namahotel'] ?></div>
                  <span class="text-[#374B43] font-bold text-lg block">Rp.600.000</span>
                </div>
                <div class="mt-4 flex justify-end">
                <button class="bg-[#416657] text-[#E2F0FF] text-sm rounded px-4 py-2 hover:bg-[#12372A] hover:text-white transition-colors duration-300" onclick="window.location.href = 'hotel.php?nh=<?php echo $row9['namahotel'] ?>&gh=<?php echo $row6['gambar_hotel'] ?>';">Book Now</button>
                </div>
              </div>
            </div>
            <div class="max-w-sm rounded-lg overflow-hidden shadow-lg m-2 bg-white">
              <img class="w-[384px] h-[336px]" src="<?php echo $row7['gambar_hotel'] ?>" alt="Sunset in the mountains">
              <div class="px-6 py-4">
                <div class="flex justify-between items-end">
                  <div class="font-bold text-xl mb-2"><?php echo $row7['namahotel'] ?></div>
                  <span class="text-[#374B43] font-bold text-lg block">Rp.600.000</span>
                </div>
                <div class="mt-4 flex justify-end">
                <button class="bg-[#416657] text-[#E2F0FF] text-sm rounded px-4 py-2 hover:bg-[#12372A] hover:text-white transition-colors duration-300" onclick="window.location.href = 'hotel.php?nh=<?php echo $row9['namahotel'] ?>&gh=<?php echo $row7['gambar_hotel'] ?>';">Book Now</button>
                </div>
              </div>
            </div>
            <div class="max-w-sm rounded-lg overflow-hidden shadow-lg m-2 bg-white">
              <img class="w-[384px] h-[336px]" src="<?php echo $row8['gambar_hotel'] ?>" alt="Sunset in the mountains">
              <div class="px-6 py-4">
                <div class="flex justify-between items-end">
                  <div class="font-bold text-xl mb-2"><?php echo $row8['namahotel'] ?></div>
                  <span class="text-[#374B43] font-bold text-lg block">Rp.600.000</span>
                </div>
                <div class="mt-4 flex justify-end">
                <button class="bg-[#416657] text-[#E2F0FF] text-sm rounded px-4 py-2 hover:bg-[#12372A] hover:text-white transition-colors duration-300" onclick="window.location.href = 'hotel.php?nh=<?php echo $row9['namahotel'] ?>&gh=<?php echo $row8['gambar_hotel'] ?>';">Book Now</button>
                </div>
              </div>
            </div>
            <div class="max-w-sm rounded-lg overflow-hidden shadow-lg m-2 bg-white">
              <img class="w-[384px] h-[336px]" src="<?php echo $row9['gambar_hotel'] ?>" alt="Sunset in the mountains">
              <div class="px-6 py-4">
                <div class="flex justify-between items-end">
                  <div class="font-bold text-xl mb-2"><?php echo $row9['namahotel'] ?></div>
                  <span class="text-[#374B43] font-bold text-lg block">Rp.600.000</span>
                </div>
                <div class="mt-4 flex justify-end">
                <button class="bg-[#416657] text-[#E2F0FF] text-sm rounded px-4 py-2 hover:bg-[#12372A] hover:text-white transition-colors duration-300" onclick="window.location.href = 'hotel.php?nh=<?php echo $row9['namahotel'] ?>&gh=<?php echo $row9['gambar_hotel'] ?>';">Book Now</button>
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
                        <img src="./asset/element.png" class="w-24 h-24 p-3" alt="Kopi 1">
                        <div class="text-center">
                            <h5 class="text-sm font-bold">Choose your Hotel</h5> 
                            <p class="text-sm">There are 20+ hotels for you</p>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/3 px-2">
                    <div class="flex flex-col items-center border-0"> 
                        <img src="./asset/element.png" class="w-24 h-24 p-3" alt="Kopi 2">
                        <div class="text-center">
                            <h5 class="text-sm font-bold">We enjoy it to you</h5>
                            <p class="text-sm">Choose delivery service</p>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/3 px-2">
                    <div class="flex flex-col items-center border-0">
                        <img src="./asset/element.png" class="w-24 h-24 p-3" alt="Kopi 3">
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
        <div class="w-full md:w-1/4 mb-4 md:mb-0">
          <h2 class="text-4xl font-bold mx-24"><span class="text-[#FFB000]">Hai</span><span class="text-[#F5F5DC]">loka</span></h2>
        </div>
        <div class="w-full md:w-1/4 mb-4 md:mb-0 justify-center items-center flex">
          <h3 class="text-xl font-bold mr-12">Hubungi Kami</h3>
          <ul class="text-sm ">
            <li><a href="#" class="hover:underline"><i class="fa-solid fa-envelope mr-5"></i>Email</a></li>
            <li><a href="#" class="hover:underline"><i class="fa-solid fa-phone mr-5"></i>Telepon</a></li>
            <li><a href="#" class="hover:underline"><i class="fa-brands fa-whatsapp mr-5"></i>WhatsApp</a></li>
            <li><a href="#" class="hover:underline"><i class="fa-brands fa-instagram mr-5"></i>Instagram</a></li>
          </ul>
        </div>
        <div class="w-full md:w-1/4 mb-4 md:mb-0">
          <h3 class="text-xl font-bold text-[#FF920A] text-center mb-6">PROMO!!!</h3>
          <p class="text-sm">Dapatkan berita terbaru dan promo menarik dari kami dengan mendaftar newsletter.</p>
          <form class="mt-2">
            <input type="email" class="bg-gray-700 text-white p-2 rounded w-full" placeholder="Masukkan email Anda">
            <button type="submit" class="bg-blue-600 text-white p-2 rounded mt-2 w-full">Daftar</button>
          </form>
        </div>
      </div>
      <div class="mt-4 text-center text-sm">
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
      targetSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
    }
  });});

  </script>
</body>
</html>