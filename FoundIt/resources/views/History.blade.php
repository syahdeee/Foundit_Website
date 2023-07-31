<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="./css/style.css" rel="stylesheet">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Jost:wght@100;200;300;400;500;600;700;800&family=Montserrat+Alternates:wght@100;200;300;400;500;600;700;800;900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Open+Sans:wght@300;400;500;600;700;800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

        <title> History </title>

        @vite('resources/css/app.css')

    </head>

    <body class="bg-gray-100">

        <!-- Header Mobile -->
        <header class="w-full fixed top-0 bg-white z-10 lg:hidden">
            <div class="container">

                <!-- Icon Panah & Judul Halaman -->
                <div class="flex items-center w-full pt-4">

                    <!-- Icon Panah -->
                    <div class="w-fit">
                        <a href="Home.html">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                                </svg>                                                                       
                        </a>
                    </div>

                    <!-- Judul Halaman -->
                    <h1 class="w-[90%] text-center text-xl font-poppins font-semibold"> History Laporan </h1>

                </div>

                <!-- Post Switcher (Mobile) -->
                <div class="w-full h-[50px] mt-5 px-3 rounded-[10px] shadow-post z-[1] sm:w-[95%] sm:mx-auto lg:hidden">

                    <!-- Container Lost & Found -->
                    <div class="flex items-center justify-between w-full h-full relative">

                        <!-- Lost Post -->
                        <div id="lost-post" class="w-1/2 z-[3] text-white pointer-events-none transition-all ease-in-out duration-700">
                            <p class="text-lg text-center font-poppins font-bold"> Lost Post </p>
                        </div>

                        <!-- Found Post -->
                        <div id="found-post" class="w-1/2 z-[3] text-[#BDC1C2] transition-all ease-in-out duration-700">
                            <p class="text-lg text-center font-poppins font-bold"> Found Post </p>
                        </div>

                        <!-- Switcher -->
                        <div id="switcher-post" class="w-1/2 h-[32px] bg-[#8D72E1] rounded-[9px] absolute z-[2] transition-all ease-in-out duration-700"></div>

                    </div>

                </div>

            </div>
        </header>
        <!-- Header Mobile End -->


        <!-- Desktop Navigation Bar -->
        <header class="w-full py-2 fixed bg-white shadow-kategori rounded-lg hidden lg:block z-10">
            <div class="container flex justify-between w-full">

                <!-- Logo (Kiri) -->
                <div class="w-[8%]">
                    <img class="w-full" src="/img/logoLain.png" alt="Logo Foundit">
                </div>

                <!-- Navigasi Halaman (Kanan) -->
                <div class="flex justify-around items-center w-[70%]">
                    <a class="text-sm font-montserrat font-semibold xl:text-base transition-all ease-in-out duration-150 hover:scale-90" href="/"> Home </a>

                    <a class="text-sm font-montserrat font-semibold xl:text-base transition-all ease-in-out duration-150 hover:scale-90" href="/Laporan"> Laporan </a>

                    <a class="text-sm font-montserrat font-semibold xl:text-base transition-all ease-in-out duration-150 hover:scale-90" href="/baranghilang"> Barang Hilang </a>

                    <a class="text-sm font-montserrat font-semibold xl:text-base transition-all ease-in-out duration-150 hover:scale-90" href="/barangtemu"> Barang Temuan </a>

                    <form class="w-[35%] relative xl:w-[30%]">
                        <input id="search" name="search" class="w-full pl-12 py-2 text-xs font-poppins font-medium placeholder-[#244CA5] bg-white border border-[#244CA5] rounded-lg xl:text-sm" type="text" placeholder="Cari Barangmu Yang Hilang !">

                        <button type="submit" for="search" class="absolute top-1/2 left-2 -translate-y-1/2">
                            <svg class="w-1 h-1 text-[#244CA5] md:w-7 md:h-7" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <circle cx="10" cy="10" r="7" />  <line x1="21" y1="21" x2="15" y2="15" /></svg>
                        </button>
                    </form>
                </div>

                <!-- Profile and Dropdown -->
                <div class="flex justify-center items-center w-[20%]">

                    
                    @auth
                    <!-- Udah Login -->
                        <div id="dropdown-trigger" class="group flex justify-center items-center cursor-pointer relative transition-all ease-in-out duration-150">

                            @if(auth()->user()->profil)
                            <!-- Profile User -->
                            <div class="w-10 h-10 mr-3 rounded-full overflow-hidden">
                                <img class="w-full h-full" src="{{ asset('storage/'.auth()->user()->profil) }}" alt="Profile Dummy">
                            </div>
                            @else
                            <!-- Profile User -->
                            <div class="w-10 h-10 mr-3 rounded-full overflow-hidden">
                                <img class="w-full h-full" src="/img/tim.png" alt="Profile Dummy">
                            </div>
                            @endif
        
                            <!-- Nama User -->
                            <p class="text-lg font-montserrat font-semibold"> {{ auth()->user()->username }} </p>

                            <!-- Dropdown Menu -->
                            <div id="dropdown-menu" class="hidden opacity-0 w-[90%] py-2 border border-[#395EB4] bg-white shadow-dropdown rounded-3xl absolute -bottom-[135px] left-[60%] -translate-x-1/2 z-10  transition-all ease-linear duration-200">

                                <ul class="flex flex-col justify-center items-center gap-[6px] w-full text-center font-poppins">
                                    <li class="w-[80%] py-[6px] rounded-xl hover:bg-[#8D9EFF] hover:text-white hover:font-semibold transition-all ease-in-out duration-150 cursor-pointer"> <a class="w-full inline-block" href="/profile"> Profile </a> </li>

                                    <li class="w-[80%] py-[6px] rounded-xl hover:bg-[#8D9EFF] hover:text-white hover:font-semibold transition-all ease-in-out duration-150 cursor-pointer"> <a class="w-full inline-block" href="History.html"> History </a> </li>
                                    <li class="w-[80%] py-[6px] rounded-xl hover:bg-[#8D9EFF] hover:text-white hover:font-semibold transition-all ease-in-out duration-150 cursor-pointer">
                                    <form action="/logout" method="post">
                                        @csrf
                                        <button type="submit" class="w-full inline-block" href="/logout"> Logout </button> 
                                    </form>
                                 </li>
                                </ul>

                        </div>
    
                        
                        
                        
                    @else
                        <!-- Belum Login -->
                        <div class="flex justify-center items-center">

                        <!-- Profile User -->
                            <div class="w-10 h-10 mr-3 rounded-full overflow-hidden">
                                <img class="w-full h-full" src="/img/profileDummy.png" alt="Profile Dummy">
                            </div>
        
                            <!-- Nama User -->
                            <a class="text-lg font-montserrat font-semibold" href="/login"> Login </a>

                        </div>
                    @endauth

                </div>


                </div>

            </div>
        </header>


        <!-- Section History Opening -->
        <section class="mb-10 pt-32 hidden lg:block">
            <div class="container">

                <div class="w-full h-[40vh] mx-auto rounded-[40px] bg-no-repeat bg-left-bottom bg-cover relative xl:h-[60vh]" style="background-image: url(/img/bgProfile.png);">

                    <!-- Tagline History -->
                    <div class="flex flex-col justify-center items-center w-full h-full">

                        <!-- Tagline -->
                        <h1 class="mb-1 text-4xl text-white font-jost font-semibold xl:text-5xl"> Di Sini Kamu Bisa Lihat List Barang </h1>
                        <h1 class="text-4xl text-white font-jost font-semibold xl:text-5xl"> Yang Sudah Kamu Temukan atau Kembalikan </h1>

                    </div>

                    <!-- Switch Post -->
                    <div class="flex justify-center items-center w-[350px] h-[70px] px-3 bg-white rounded-3xl shadow-switch-post absolute -bottom-18 left-1/2 -translate-x-1/2 -translate-y-1/2 z-[1]">

                        <!-- Lost Post & Found Post -->
                        <div class="flex items-center w-full h-full text-center relative z-[1]">

                            <!-- Lost Post -->
                            <div id="lost-post-desktop" class="w-1/2 text-white relative z-[3] transition-all duration-75 ease-in pointer-events-none cursor-pointer">
                                <p class="text-base  font-montserratAlt font-bold"> Lost Post </p>
                            </div>

                            <!-- Found Post -->
                            <div id="found-post-desktop" class="w-1/2 text-[#BDC1C2] relative z-[3] transition-all duration-75 ease-in cursor-pointer">
                                <p class="text-base font-montserratAlt font-bold"> Found Post </p>
                            </div>

                            <!-- Switcher Post -->
                            <div id="switcher-post-desktop" class="w-[50%] h-[55px] bg-[#8D72E1] text-center rounded-2xl absolute transition-all ease-in-out duration-700 z-[2]"></div>

                        </div>

                    </div>

                </div>
            </div>
        </section>
        <!-- Section History Opening End -->


        <!-- Section History Laporan -->
        <section class="pt-36 pb-5 lg:pt-28">
            <div class="container">

                <!-- Judul History -->
                <div class="w-full mb-5 px-3 hidden lg:block">

                    <!-- Judul -->
                    <p class="w-[50%] mb-5 text-3xl text-[#244CA5] font-montserratAlt font-bold"> History Laporan </p>

                    <!-- Garis -->
                    <span class="block w-full h-[2px] bg-[#BDC1C2]"></span>
                    
                </div>
                
                <!-- History Whole Card Container -->
                <div id="container-history" class="w-full transition-all ease-in-out duration-1000">

                    <!-- Container History Lost -->
                    <div id="lost-barang-history" class="flex flex-col gap-3 w-full h-[90vh] px-3 pb-3 overflow-auto xl:gap-7">

                        <!-- Card Lost -->
                        <div class="flex flex-shrink-0 items-center w-full h-fit p-3 bg-white rounded-xl shadow-history">

                            <!-- Kiri -->
                            <div class="w-[30%] md:w-[32%] lg:w-[30%] xl:w-[25%]">

                                <!-- Image Container -->
                                <div class="w-full h-[100px] rounded-md overflow-hidden sm:h-[120px] md:h-[160px] lg:h-[210px]">
                                    <img class="w-full h-full" src="/img/claimedLogo.png" alt="Gambar Barang">
                                </div>

                            </div>

                            <!-- Kanan -->
                            <div class="w-[70%] pl-2 md:w-[68%]">

                                <!-- Nama Barang & Claimed Logo -->
                                <div class="flex justify-between items-center w-full">

                                    <!-- Nama Barang -->
                                    <p class="text-md font-poppins font-semibold sm:text-lg md:text-xl lg:text-3xl"> Dompet Cokelat </p>

                                    <div class="flex justify-center items-center w-[65px] h-[20px] bg-[#B9E0FF] rounded-md sm:w-[100px] sm:h-[25px] lg:w-[130px] lg:h-[28px]">
                                        <p class="text-[10px] text-[#8D72E1] font-poppins font-semibold sm:text-xs md:text-sm lg:text-[15px]"> Claimed </p>
                                    </div>

                                </div>

                                <!-- Garis Pembatas -->
                                <span class="block w-full my-2 h-[2px] bg-[#395EB4] opacity-60"></span>

                                <!-- Informasi Claim Barang -->
                                <div class="flex justify-between items-center w-full">

                                    <!-- Keterangan Waktu & Tanggal -->
                                    <div class="w-1/2 text-[#244CA5] font-normal">

                                        <!-- Waktu & Tanggal -->
                                        <p class="mb-1 text-xs sm:text-sm md:text-base xl:text-lg"> 28.12.2023, 11:47 PM </p>

                                        <!-- Rewards -->
                                        <div class="flex items-center gap-1">
                                            <span>
                                                <svg class="w-4 h-4 sm:w-5 sm:h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 11.25v8.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5v-8.25M12 4.875A2.625 2.625 0 109.375 7.5H12m0-2.625V7.5m0-2.625A2.625 2.625 0 1114.625 7.5H12m0 0V21m-8.625-9.75h18c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125h-18c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
                                                </svg>
                                                  
                                            </span>

                                            <p class="text-xs sm:text-sm md:text-base"> Rewards </p>
                                        </div>

                                    </div>

                                    <!-- Profile User Claim -->
                                    <div class="flex justify-end w-1/2">

                                        <!-- Informasi User Claim -->
                                        <div class="text-center">
                                            <p class="text-xs text-[#244CA5] font-poppins font-base sm:text-sm md:text-base"> Claimed by : </p>
    
                                            <p class="mb-2 text-xs font-poppins font-semibold sm:text-sm md:text-base xl:text-lg"> Reza Juandri </p>

                                            <p class="mb-1 text-xs font-poppins sm:text-sm md:text-base"> 1301202285 </p>

                                            <p class="text-xs font-poppins sm:text-sm md:text-base"> S1 Informatika </p>
                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <!-- Card Lost -->
                        <div class="flex flex-shrink-0 items-center w-full h-fit p-3 bg-white rounded-xl shadow-history">

                            <!-- Kiri -->
                            <div class="w-[30%] md:w-[32%] lg:w-[30%] xl:w-[25%]">

                                <!-- Image Container -->
                                <div class="w-full h-[100px] rounded-md overflow-hidden sm:h-[120px] md:h-[160px] lg:h-[210px]">
                                    <img class="w-full h-full" src="/img/dompetHitam.png" alt="Gambar Barang">
                                </div>

                            </div>

                            <!-- Kanan -->
                            <div class="w-[70%] pl-2 md:w-[68%]">

                                <!-- Nama Barang & Claimed Logo -->
                                <div class="flex justify-between items-center w-full">

                                    <!-- Nama Barang -->
                                    <p class="text-md font-poppins font-semibold sm:text-lg md:text-xl lg:text-3xl"> Dompet Cokelat </p>

                                    <div class="flex justify-center items-center w-[65px] h-[20px] bg-[#B9E0FF] rounded-md sm:w-[100px] sm:h-[25px] lg:w-[130px] lg:h-[28px]">
                                        <p class="text-[10px] text-[#8D72E1] font-poppins font-semibold sm:text-xs md:text-sm lg:text-[15px]"> Claimed </p>
                                    </div>

                                </div>

                                <!-- Garis Pembatas -->
                                <span class="block w-full my-2 h-[2px] bg-[#395EB4] opacity-60"></span>

                                <!-- Informasi Claim Barang -->
                                <div class="flex justify-between items-center w-full">

                                    <!-- Keterangan Waktu & Tanggal -->
                                    <div class="w-1/2 text-[#244CA5] font-normal">

                                        <!-- Waktu & Tanggal -->
                                        <p class="mb-1 text-xs sm:text-sm md:text-base xl:text-lg"> 28.12.2023, 11:47 PM </p>

                                        <!-- Rewards -->
                                        <div class="flex items-center gap-1">
                                            <span>
                                                <svg class="w-4 h-4 sm:w-5 sm:h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 11.25v8.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5v-8.25M12 4.875A2.625 2.625 0 109.375 7.5H12m0-2.625V7.5m0-2.625A2.625 2.625 0 1114.625 7.5H12m0 0V21m-8.625-9.75h18c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125h-18c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
                                                </svg>
                                                  
                                            </span>

                                            <p class="text-xs sm:text-sm md:text-base"> Rewards </p>
                                        </div>

                                    </div>

                                    <!-- Profile User Claim -->
                                    <div class="flex justify-end w-1/2">

                                        <!-- Informasi User Claim -->
                                        <div class="text-center">
                                            <p class="text-xs text-[#244CA5] font-poppins font-base sm:text-sm md:text-base"> Claimed by : </p>
    
                                            <p class="text-xs font-poppins font-semibold sm:text-sm md:text-base xl:text-lg"> Reza Juandri </p>
                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <!-- Card Lost -->
                        <div class="flex flex-shrink-0 items-center w-full h-fit p-3 bg-white rounded-xl shadow-history">

                            <!-- Kiri -->
                            <div class="w-[30%] md:w-[32%] lg:w-[30%] xl:w-[25%]">

                                <!-- Image Container -->
                                <div class="w-full h-[100px] rounded-md overflow-hidden sm:h-[120px] md:h-[160px] lg:h-[210px]">
                                    <img class="w-full h-full" src="/img/dompetHitam.png" alt="Gambar Barang">
                                </div>

                            </div>

                            <!-- Kanan -->
                            <div class="w-[70%] pl-2 md:w-[68%]">

                                <!-- Nama Barang & Claimed Logo -->
                                <div class="flex justify-between items-center w-full">

                                    <!-- Nama Barang -->
                                    <p class="text-md font-poppins font-semibold sm:text-lg md:text-xl lg:text-3xl"> Dompet Cokelat </p>

                                    <div class="flex justify-center items-center w-[65px] h-[20px] bg-[#B9E0FF] rounded-md sm:w-[100px] sm:h-[25px] lg:w-[130px] lg:h-[28px]">
                                        <p class="text-[10px] text-[#8D72E1] font-poppins font-semibold sm:text-xs md:text-sm lg:text-[15px]"> Claimed </p>
                                    </div>

                                </div>

                                <!-- Garis Pembatas -->
                                <span class="block w-full my-2 h-[2px] bg-[#395EB4] opacity-60"></span>

                                <!-- Informasi Claim Barang -->
                                <div class="flex justify-between items-center w-full">

                                    <!-- Keterangan Waktu & Tanggal -->
                                    <div class="w-1/2 text-[#244CA5] font-normal">

                                        <!-- Waktu & Tanggal -->
                                        <p class="mb-1 text-xs sm:text-sm md:text-base xl:text-lg"> 28.12.2023, 11:47 PM </p>

                                        <!-- Rewards -->
                                        <div class="flex items-center gap-1">
                                            <span>
                                                <svg class="w-4 h-4 sm:w-5 sm:h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 11.25v8.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5v-8.25M12 4.875A2.625 2.625 0 109.375 7.5H12m0-2.625V7.5m0-2.625A2.625 2.625 0 1114.625 7.5H12m0 0V21m-8.625-9.75h18c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125h-18c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
                                                </svg>
                                                  
                                            </span>

                                            <p class="text-xs sm:text-sm md:text-base"> Rewards </p>
                                        </div>

                                    </div>

                                    <!-- Profile User Claim -->
                                    <div class="flex justify-end w-1/2">

                                        <!-- Informasi User Claim -->
                                        <div class="text-center">
                                            <p class="text-xs text-[#244CA5] font-poppins font-base sm:text-sm md:text-base"> Claimed by : </p>
    
                                            <p class="text-xs font-poppins font-semibold sm:text-sm md:text-base xl:text-lg"> Reza Juandri </p>
                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <!-- Container History Found -->
                    <div id="found-barang-history" class="flex-col gap-3 w-full h-[90vh] px-3 pb-3 overflow-auto hidden xl:gap-7">

                        <!-- Card Found -->
                        <div class="flex flex-shrink-0 items-center w-full h-fit p-3 bg-white rounded-xl shadow-history">

                            <!-- Kiri -->
                            <div class="w-[30%] md:w-[32%] lg:w-[30%] xl:w-[25%]">

                                <!-- Image Container -->
                                <div class="w-full h-[100px] rounded-md overflow-hidden sm:h-[120px] md:h-[160px] lg:h-[210px]">
                                    <img class="w-full h-full" src="/img/dompetPutih.png" alt="Gambar Barang">
                                </div>

                            </div>

                            <!-- Kanan -->
                            <div class="w-[70%] pl-2 md:w-[68%]">

                                <!-- Nama Barang & Claimed Logo -->
                                <div class="flex justify-between items-center w-full">

                                    <!-- Nama Barang -->
                                    <p class="text-md font-poppins font-semibold sm:text-lg md:text-xl lg:text-3xl"> Dompet Cokelat </p>

                                    <div class="flex justify-center items-center w-[65px] h-[20px] bg-[#B9E0FF] rounded-md sm:w-[100px] sm:h-[25px] lg:w-[130px] lg:h-[28px]">
                                        <p class="text-[10px] text-[#8D72E1] font-poppins font-semibold sm:text-xs md:text-sm lg:text-[15px]"> Claimed </p>
                                    </div>

                                </div>

                                <!-- Garis Pembatas -->
                                <span class="block w-full my-2 h-[2px] bg-[#395EB4] opacity-60"></span>

                                <!-- Informasi Claim Barang -->
                                <div class="flex justify-between items-center w-full">

                                    <!-- Keterangan Waktu & Tanggal -->
                                    <div class="w-1/2 text-[#244CA5] font-normal">

                                        <!-- Waktu & Tanggal -->
                                        <p class="mb-1 text-xs sm:text-sm md:text-base xl:text-lg"> 28.12.2023, 11:47 PM </p>

                                    </div>

                                    <!-- Profile User Claim -->
                                    <div class="flex justify-end w-1/2">

                                        <!-- Informasi User Claim -->
                                        <div class="text-center">
                                            <p class="text-xs text-[#244CA5] font-poppins font-base sm:text-sm md:text-base"> Claimed by : </p>
    
                                            <p class="text-xs font-poppins font-semibold sm:text-sm md:text-base xl:text-lg"> Reza Juandri </p>
                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>
                        
                        <!-- Card Found -->
                        <div class="flex flex-shrink-0 items-center w-full h-fit p-3 bg-white rounded-xl shadow-history">

                            <!-- Kiri -->
                            <div class="w-[30%] md:w-[32%] lg:w-[30%] xl:w-[25%]">

                                <!-- Image Container -->
                                <div class="w-full h-[100px] rounded-md overflow-hidden sm:h-[120px] md:h-[160px] lg:h-[210px]">
                                    <img class="w-full h-full" src="/img/dompetPutih.png" alt="Gambar Barang">
                                </div>

                            </div>

                            <!-- Kanan -->
                            <div class="w-[70%] pl-2 md:w-[68%]">

                                <!-- Nama Barang & Claimed Logo -->
                                <div class="flex justify-between items-center w-full">

                                    <!-- Nama Barang -->
                                    <p class="text-md font-poppins font-semibold sm:text-lg md:text-xl lg:text-3xl"> Dompet Cokelat </p>

                                    <div class="flex justify-center items-center w-[65px] h-[20px] bg-[#B9E0FF] rounded-md sm:w-[100px] sm:h-[25px] lg:w-[130px] lg:h-[28px]">
                                        <p class="text-[10px] text-[#8D72E1] font-poppins font-semibold sm:text-xs md:text-sm lg:text-[15px]"> Claimed </p>
                                    </div>

                                </div>

                                <!-- Garis Pembatas -->
                                <span class="block w-full my-2 h-[2px] bg-[#395EB4] opacity-60"></span>

                                <!-- Informasi Claim Barang -->
                                <div class="flex justify-between items-center w-full">

                                    <!-- Keterangan Waktu & Tanggal -->
                                    <div class="w-1/2 text-[#244CA5] font-normal">

                                        <!-- Waktu & Tanggal -->
                                        <p class="mb-1 text-xs sm:text-sm md:text-base xl:text-lg"> 28.12.2023, 11:47 PM </p>

                                    </div>

                                    <!-- Profile User Claim -->
                                    <div class="flex justify-end w-1/2">

                                        <!-- Informasi User Claim -->
                                        <div class="text-center">
                                            <p class="text-xs text-[#244CA5] font-poppins font-base sm:text-sm md:text-base"> Claimed by : </p>
    
                                            <p class="text-xs font-poppins font-semibold sm:text-sm md:text-base xl:text-lg"> Reza Juandri </p>
                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>
        </section>
        <!-- Section Histroy Laporan End -->


        <!-- Aside Section -->
        <section class="w-[90%] h-[60vh] mx-auto mt-80 mb-10 hidden lg:block relative">

            <!-- Container Cari Sekarang -->
            <div class="flex justify-around w-[70%] py-10 bg-gradient-to-r from-[#4870C0] to-[#a7b3fa] rounded-3xl absolute -top-7 left-1/2 -translate-x-1/2 -translate-y-1/2">

                <!-- Headline -->
                <div class="text-3xl text-white font-jost font-semibold">
                    <p> Kamu Kehilangan Barang ? </p>

                    <p> Coba Cari Di Foundit. </p>
                </div>

                <!-- Button -->
                <div class="self-center">
                    <button class="px-10 py-4 text-lg text-white bg-[#395EB4] rounded-[52px]"> Cari Sekarang! </button>
                </div>

            </div>
            

            <div class="container h-full bg-[#EEEEEE] rounded-3xl shadow-kategori">
                <div class="flex flex-wrap justify-center items-center h-full">

                    <!-- Kiri -->
                    <div class="w-[40%]">

                        <!-- Logo -->
                        <div class="w-[30%] mb-3">
                            <img class="w-full" src="/img/logoLain.png" alt="Logo Foundit">
                        </div>

                        <!-- Text Aside -->
                        <p class="mb-3 text-base text-justify font-openSans font-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi accusamus iusto, quod distinctio cum officia omnis at exercitationem ut sunt.</p>

                        <!-- Media Sosial -->
                        <div class="flex gap-4 w-full">

                            <!-- Instagram -->
                            <span class="p-[6px] bg-[#231656] rounded-full">
                                <svg class="w-4 h-4 text-white"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <rect x="4" y="4" width="16" height="16" rx="4" />  <circle cx="12" cy="12" r="3" />  <line x1="16.5" y1="7.5" x2="16.5" y2="7.501" /></svg>
                            </span>

                            <!-- Facebook -->
                            <span class="p-[6px] bg-[#231656] rounded-full">
                                <svg class="w-4 h-4 text-white"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z" /></svg>
                            </span>

                            <!-- Twitter -->
                            <span class="p-[6px] bg-[#231656] rounded-full">
                                <svg class="w-4 h-4 text-white"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z" /></svg>
                            </span>

                            <!-- Youtube -->
                            <span class="p-[6px] bg-[#231656] rounded-full">
                                <svg class="w-4 h-4 text-white"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <path d="M22.54 6.42a2.78 2.78 0 0 0-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 0 0-1.94 2A29 29 0 0 0 1 11.75a29 29 0 0 0 .46 5.33A2.78 2.78 0 0 0 3.4 19c1.72.46 8.6.46 8.6.46s6.88 0 8.6-.46a2.78 2.78 0 0 0 1.94-2 29 29 0 0 0 .46-5.25 29 29 0 0 0-.46-5.33z" />  <polygon points="9.75 15.02 15.5 11.75 9.75 8.48 9.75 15.02" /></svg>
                            </span>
                        </div>

                    </div>

                    <!-- Garis tengah -->
                    <span class="w-[1px] h-[65%] mx-5 bg-[#17282F] block"></span>

                    <!-- Kanan -->
                    <div class="w-[40%]">

                        <!-- Menu Navigasi -->
                        <div class="w-full">

                            <!-- Judul Menu -->
                            <p class="mb-3 text-2xl text-[#3D3269] font-montserrat font-semibold"> Menu </p>

                            <!-- Navigasi -->
                            <div class="flex justify-between w-full text-base text-[#244CA5] font-medium">
                                <a href="#"> About us </a>
                                <a href="#"> Laporan </a>
                                <a href="#"> Chatting </a>
                                <a href="#"> Settings </a>
                            </div>

                            <!-- Garis -->
                            <span class="w-full h-[1px] my-10 bg-[#17282F] block"></span>

                            <p class="text-sm text-[#8D72E1] text-center font-poppins font-medium"> © 2022 Foundit. All rights reserved. </p>

                        </div>

                    </div>

                </div>
            </div>

        </section>
        <!-- Aside Section End -->


        <script src="/js/history.js"></script>
    </body>
</html>