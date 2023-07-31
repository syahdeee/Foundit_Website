<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="/css/style.css" rel="stylesheet">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Jost:wght@100;200;300;400;500;600;700;800&family=Montserrat+Alternates:wght@100;200;300;400;500;600;700;800;900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Open+Sans:wght@300;400;500;600;700;800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        @vite('resources/css/app.css')
        
        <title>Laporan Barang</title>
    </head>

    <body class="bg-gray-200">

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

                    <a class="text-sm font-montserrat font-extrabold xl:text-base transition-all ease-in-out duration-150 hover:scale-90" href="/Laporan"> Laporan </a>

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

                            <!-- Profile User -->
                            <div class="w-10 h-10 mr-3 rounded-full overflow-hidden">
                                <img class="w-full h-full" src="/img/tim.png" alt="Profile Dummy">
                            </div>
        
                            <!-- Nama User -->
                            <p class="text-lg font-montserrat font-semibold"> Rafli Fakhreza </p>

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

        
        <!-- Header Mobile -->
        <header class="w-full fixed top-0 bg-white z-10 lg:hidden">
            <div class="container">

                <!-- Icon Panah, Search Bar & Filter -->
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
                    <h1 class="w-[90%] text-center text-lg font-poppins font-semibold"> Pelaporan Barang </h1>

                </div>

                <!-- Navigasi Barang Temuan & Barang Hilang -->
                <div class="w-full pt-8 ">

                    <!-- Judul Navigasi -->
                    <div class="flex w-full mb-1">

                        <!-- Judul Temuan -->
                        <div class="nav-temu w-1/2 text-[#BDC1C2] cursor-pointer">
                            <h2 class="py-1 text-base text-center font-montserrat font-semibold tracking-wide">Barang Temuan</h2>
                        </div>

                        <div class="nav-hilang w-1/2 text-[#8D9EFF] pointer-events-none cursor-pointer">
                            <h2 class="py-1 text-base text-center font-montserrat font-semibold tracking-wide">Barang Hilang</h2>
                        </div>

                    </div>

                    <!-- Span Garis Ungu -->
                    <div class="w-full">
                        <span class="slide-span w-1/2 h-[3px] bg-[#8D9EFF] rounded-2xl block translate-x-full transition-all ease-in-out duration-300"></span>
                    </div>

                </div>

            </div>
        </header>


        <!-- Upload Laporan Opening Section (Desktop) -->
        <section class="pt-36 hidden lg:block">
            <div class="container">

                <div class="w-full h-[45vh] mx-auto rounded-[40px] bg-no-repeat bg-left-bottom bg-cover relative" style="background-image: url(/img/bgAllitem.png);">

                    <!-- All Item Opening -->
                    <div class="flex flex-col justify-center items-center w-full h-full">

                        <!-- Tagline -->
                        <p class="mb-5 text-5xl text-white font-jost font-semibold"> Kehilangan Atau Menemukan Barang ? </p>
                        <p class="text-5xl text-white font-jost font-semibold"> Coba Buat Laporan Mu Di Sini ! </p>

                    </div>

                    <!-- Switch Laporan -->
                    <div class="flex justify-center items-center w-[350px] h-[70px] px-3 bg-white rounded-3xl absolute -bottom-18 left-1/2 -translate-x-1/2 -translate-y-1/2 z-[1]">

                        <!-- Hilang & Temu -->
                        <div class="flex items-center w-full h-full text-center relative z-[1]">

                            <!-- Hilang -->
                            <div class="switch-hilang w-1/2 text-white relative z-[3] transition-all duration-75 ease-in pointer-events-none cursor-pointer">
                                <p class="text-base  font-montserratAlt font-bold"> Barang Hilang </p>
                            </div>

                            <!-- Temu -->
                            <div class="switch-temu w-1/2 text-[#BDC1C2] relative z-[3] transition-all duration-75 ease-in cursor-pointer">
                                <p class="text-base font-montserratAlt font-bold"> Barang Temuan </p>
                            </div>

                            <!-- Switcher -->
                            <div class="switcher w-[50%] h-[55px] bg-[#8D9EFF] text-center rounded-2xl absolute transition-all ease-in-out duration-700 z-[2]"></div>

                        </div>

                    </div>

                </div>
            </div>
        </section>
        <!-- Upload Laporan Opening Section End -->


        <!-- Form Barang Hilang & Ketemu (Mobile - Tablet) -->
        <section id="form-hilang-temu" class="px-3 pt-40 transition-all ease-in-out duration-700 lg:hidden">
            <div class="container pb-5 bg-white rounded-t-[35px]">

                <!-- Judul Form -->
                <h1 class="judul-hilang py-4 text-2xl font-montserrat font-bold sm:text-center sm:text-3xl">Data Barang Hilang</h1>
                <h1 class="judul-temu py-4 text-2xl font-montserrat font-bold hidden sm:text-center sm:text-3xl">Data Barang Temuan</h1>

                <!-- Form -->
                <form class="w-full">
                    <!-- Nama Barang -->
                    <div class="w-full py-2">
                        <label class="text-sm text-[#244CA5] font-montserrat font-medium sm:text-base" for="nama-barang"> Nama Barang </label>

                        <input class="w-full p-3 border border-[#88C6F8] rounded-xl shadow-md sm:mt-3" type="text" id="nama-barang" name="nama">
                    </div>
                    
                    <!-- Deskripsi Barang  -->
                    <div class="w-full py-2">
                        <label class="text-sm text-[#244CA5] font-montserrat font-medium sm:text-base" for="desc-barang"> Deskripsi Barang </label>

                        <textarea class="w-full p-3 border border-[#88C6F8] rounded-xl shadow-md sm:mt-3" type="text" id="desc-barang" rows="5" name="deskripsi"></textarea>
                    </div>

                    <!-- Kronologi -->
                    <div class="w-full py-2">
                        <label class="text-sm text-[#244CA5] font-montserrat font-medium sm:text-base" for="kronologi-barang"> Kronologi Kehilangan </label>

                        <textarea class="w-full p-3 border border-[#88C6F8] rounded-xl shadow-md sm:mt-3" type="text" id="kronologi-barang" rows="5" name="kronologi"></textarea>
                    </div>

                    <!-- Upload Foto -->
                    <div class="w-full py-3">

                        <label class="w-full mb-3 text-sm text-[#244CA5] font-montserrat font-medium sm:text-base block">Upload Foto Barang</label>
                        
                        <!-- Pembagian Kanan dan Kiri -->
                        <div class="flex justify-between w-full sm:mt-3">
                            
                            <!-- Kiri -->
                            <div class="w-[40%]">

                                <!-- Image Show -->
                                <div class="w-full mb-2 h-[120px] bg-white rounded-lg shadow-input-gambar relative md:h-[180px]">

                                    <label id="logo-placeholder-mobile" class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2" for="input-gambar-mobile">
                                        <svg class="w-12 h-12 text-[#6C4AB6]"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <circle cx="12" cy="13" r="3" />  <path d="M5 7h1a2 2 0 0 0 2 -2a1 1 0 0 1 1 -1h2m9 7v7a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-9a2 2 0 0 1 2 -2" />  <line x1="15" y1="6" x2="21" y2="6" />  <line x1="18" y1="3" x2="18" y2="9" /></svg>
                                    </label>

                                    <img id="target-image-mobile" class="w-full h-full rounded-lg" >
                                </div>

                                <input id="input-gambar-mobile" class="w-full font-montserrat font-medium" type="file" required> 

                            </div>

    
                            <!-- Rewards / Location -->
                            <div class="w-[55%]">

                                <!-- Reward -->
                                <div class="rewards-hilang w-full">
                        
                                    <p class="mb-3 text-sm text-[#244CA5] font-montserrat font-medium sm:text-base"> Apakah kamu ingin memberi rewards ? </p>
            
                                    <div class="flex flex-col gap-4 w-full sm:mt-3">
                                        <div class="flex items-center gap-3 w-[80%] px-2 py-[5px] border border-[#244CA5] rounded-lg">
                                            <input class="" type="radio" id="radio-ya" name="is_hadiah" value="1">
                                            <label id="ya-label" class="text-xs font-montserrat font-medium rounded-lg sm:text-sm" for="radio-ya">Yup, Dapet Nih !</label>
                                        </div>
                
                                        <div class="flex items-center gap-3 w-[80%] px-2 py-[5px] border border-[#244CA5] rounded-lg">
                                            <input class="" type="radio" id="radio-tidak" name="is_hadiah" value="0">
                                            <label id="tidak-label" class="text-xs font-montserrat font-medium sm:text-sm" for="radio-tidak">Maaf, Gak Dapet :&lpar; </label>
                                        </div>
                                    </div>
            
                                </div>

                                <!-- Location -->
                                <div class="lokasi-temu w-full h-full hidden">
                                    <label class="text-sm text-[#244CA5] font-montserrat font-medium sm:text-base" for="lokasi-barang"> Lokasi Ditemukan</label>
            
                                    <input class="w-full p-2 border border-[#88C6F8] rounded-xl shadow-md sm:mt-3" type="text" id="lokasi-barang" rows="5" name="lokasi">
                                </div>
                            </div>

                        </div>


                    </div>

                    <!-- Tombol Upload -->
                    <div class="mt-5 text-center bg-[#8D72E1] rounded-xl shadow-xl">
                        <button type="submit" class="py-3 text-white font-montserrat font-semibold ">Unggah Laporan</button>
                    </div>

                    <!-- Radio Hilang / Temu -->
                    <div class="scale-0">

                        <!-- Hilang -->
                        <input type="radio" id="barang-hilang" name="is_hilang" value="1" checked>
                        <label for="barang-hilang"> Barang Hilang </label>

                        <!-- Temu -->
                        <input type="radio" id="barang-temu" name="is_hilang" value="0">
                        <label for="barang-temu"> Barang Temu </label>

                    </div>

                </form>
            </div>
        </section>
        <!-- Form Barang Hilang & Ketemu End -->


        <!-- Form Barang Hilang & Ketemu (Desktop) -->
        <section id="form-hilang-temu-desktop" class="pt-24 hidden lg:block transition-all ease-in-out duration-700">
            <div class="container">

                <!-- Container Form -->
                <div class="w-full p-5 bg-white rounded-3xl shadow-form-desktop xl:p-7">

                    <!-- Judul Form -->
                    <h1 id="judul-hilang-desktop" class="text-2xl font-poppins font-semibold xl:text-3xl"> Laporan Barang Hilang </h1>
                    <h1 id="judul-temu-desktop" class="text-2xl font-poppins font-semibold xl:text-3xl hidden"> Laporan Barang Temuan </h1>

                    <!-- The Real Form -->
                    <form class="flex w-full mt-4 xl:mt-5">

                        <!-- Form Kiri -->
                        <div class="w-1/2">

                            <!-- Nama Barang -->
                            <div class="w-full mb-5">
                                <label class="mb-2 inline-block text-base text-[#244CA5] font-montserrat font-medium xl:text-lg" for="nama-desktop"> Nama Barang </label>

                                <input class="w-full p-3 border border-[#88C6F8] rounded-xl" type="text" id="nama-desktop">
                            </div>
                            
                            <!-- Deskripsi Barang  -->
                            <div class="w-full mb-5">
                                <label class="mb-2 inline-block text-base text-[#244CA5] font-montserrat font-medium xl:text-lg" for="deskripsi-desktop"> Deskripsi Barang </label>

                                <textarea class="w-full p-3 border border-[#88C6F8] rounded-xl" type="text" id="deskripsi-desktop" rows="5"></textarea>
                            </div>

                            <!-- Kronologi -->
                            <div class="w-full">
                                <label class="mb-2 inline-block text-base text-[#244CA5] font-montserrat font-medium xl:text-lg" for="kornologi-desktop"> Kronologi Kehilangan </label>

                                <textarea class="w-full p-3 border border-[#88C6F8] rounded-xl" type="text" id="kornologi-desktop" rows="5"></textarea>
                            </div>

                        </div>

                        <!-- Form Kanan -->
                        <div class="w-1/2 px-5 pt-8">

                            <!-- Image Show -->
                            <div class="w-full mb-4 h-[250px] bg-white rounded-lg shadow-input-gambar relative xl:h-[300px]">

                                <label id="logo-placeholder-desktop" class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2" for="input-gambar-desktop">
                                    <svg class="w-12 h-12 text-[#6C4AB6]"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <circle cx="12" cy="13" r="3" />  <path d="M5 7h1a2 2 0 0 0 2 -2a1 1 0 0 1 1 -1h2m9 7v7a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-9a2 2 0 0 1 2 -2" />  <line x1="15" y1="6" x2="21" y2="6" />  <line x1="18" y1="3" x2="18" y2="9" /></svg>
                                </label>

                                <img id="target-image-desktop" class="w-full h-full rounded-lg" >
                            </div>

                            <!-- Container Tag Input -->
                            <div class="flex w-full mb-5">
                                <input id="input-gambar-desktop" class="w-[60%] m-auto font-montserrat font-medium" type="file" required> 
                            </div>

                            <!-- Reward -->
                            <div id="reward-hilang-desktop" class="w-full">
                    
                                <p class="mb-3 text-base text-[#244CA5] font-montserrat font-medium xl:text-lg"> Apakah kamu ingin memberi rewards ? </p>
        
                                <div class="flex gap-4 w-full mt-3">
                                    <div class="flex items-center gap-3 w-1/2 px-2 py-[5px] border border-[#244CA5] rounded-lg lg:px-4 xl:w-[40%] xl:px-5">
                                        <input type="radio" id="radio-yes-desktop" name="rewards-yes-no-desktop" value="yes">
                                        <label id="label-yes-desktop" class="text-sm font-montserrat font-medium rounded-lg" for="radio-yes-desktop">Yup, Dapet Nih !</label>
                                    </div>
            
                                    <div class="flex items-center gap-3 w-1/2 px-2 py-[5px] border border-[#244CA5] rounded-lg lg:px-4 xl:w-[40%] xl:px-5">
                                        <input type="radio" id="radio-no-desktop" name="rewards-yes-no-desktop" value="no">
                                        <label id="label-no-desktop" class="text-sm font-montserrat font-medium" for="radio-no-desktop">Maaf, Gak Dapet :&lpar; </label>
                                    </div>
                                </div>
        
                            </div>

                            <!-- Location -->
                            <div id="lokasi-temu-desktop" class="w-full h-full hidden">
                                <label class="mb-2 inline-block text-base text-[#244CA5] font-montserrat font-medium xl:text-lg" for="lokasi-desktop"> Lokasi Ditemukan</label>
        
                                <input class="w-full p-2 border border-[#88C6F8] rounded-xl shadow-md" type="text" id="lokasi-desktop" rows="5">
                            </div>

                            <!-- Radio Hilang / Temu -->
                            <div class="scale-0">

                                <!-- Hilang -->
                                <input type="radio" id="barang-hilang-desktop" name="hilang-ketemu-desktop" value="barang-hilang-desktop" checked>
                                <label for="barang-hilang-desktop"> Barang Hilang </label>

                                <!-- Temu -->
                                <input type="radio" id="barang-temu-desktop" name="hilang-ketemu-desktop" value="barang-temu-desktop">
                                <label for="barang-temu-desktop"> Barang Temu </label>

                            </div>

                        </div>

                    </form>

                </div>

            </div>
        </section>
        <!-- Form Barang Hilang & Ketemu End -->


        <!-- Aside Section -->
        <section class="w-[90%] h-[60vh] mx-auto mt-48 mb-10 hidden lg:block relative">

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
                                <a href="/Laporan/create"> Laporan </a>
                                <a href="/baranghilang"> Barang Hilang </a>
                                <a href="/barangtemu"> Barang Temuan </a>
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

        <script src="/js/uploadBarang.js"></script>

    </body>

</html>