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

        <title> Claim </title>
    </head>

    <body>

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
                    <h1 class="w-[90%] text-center text-xl font-poppins font-semibold"> Klaim Barangmu </h1>

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

                            <!-- Profile User -->
                            <div class="w-10 h-10 mr-3 rounded-full overflow-hidden">
                                <img class="w-full h-full" src="/img/tim.png" alt="Profile Dummy">
                            </div>
        
                            <!-- Nama User -->
                            <p class="text-lg font-montserrat font-semibold"> {{ auth()->user()->username }} </p>

                            <!-- Dropdown Menu -->
                            <div id="dropdown-menu" class="hidden opacity-0 w-[90%] py-2 border border-[#395EB4] bg-white shadow-dropdown rounded-3xl absolute -bottom-[135px] left-[60%] -translate-x-1/2 z-10  transition-all ease-linear duration-200">

                                <ul class="flex flex-col justify-center items-center gap-[6px] w-full text-center font-poppins">
                                    <li class="w-[80%] py-[6px] rounded-xl hover:bg-[#8D9EFF] hover:text-white hover:font-semibold transition-all ease-in-out duration-150 cursor-pointer"> <a class="w-full inline-block" href="/profile"> Profile </a> </li>

                                    <li class="w-[80%] py-[6px] rounded-xl hover:bg-[#8D9EFF] hover:text-white hover:font-semibold transition-all ease-in-out duration-150 cursor-pointer"> <a class="w-full inline-block" href="/History"> History </a> </li>
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


        <!-- Section Form Claim -->
        <section class="pt-[75px] lg:pt-36 relative overflow-hidden xl:pt-44">
            <div class="container">

                <!-- Form Container -->
                <div class="w-full mx-auto py-5 border-2 border-[#8D9EFF] rounded-2xl bg-white shadow-claim min-[480px]:w-[75%] md:w-[60%] lg:w-[40%] xl:w-[33%] relative">

                    <!-- Judul Form -->
                    <div class="w-full mb-6 text-center text-lg text-[#244CA5] font-montserratAlt font-bold md:text-xl lg:text-2xl">
                        <h1> Data Diri </h1>
                        <h1> Penerima Barang </h1>
                    </div>

                    <!-- Form Claim -->
                    <form class="w-[80%] mx-auto" action="/History" method="post">
                        @csrf
                        <!-- Nama -->
                        <div class="w-full mb-4">
                            <label class="mb-1 inline-block text-xs font-semibold sm:text-sm md:text-base" for="nama"> Nama Penerima </label>

                            <input class="w-full p-3 border border-[#8D9EFF] rounded-xl" type="text" id="nama" name="nama_penerima">
                        </div>

                        <!-- Nama Barang -->
                        <div class="w-full mb-4">
                            <label class="mb-1 inline-block text-xs font-semibold sm:text-sm md:text-base" for="nama-barang"> Nama Barang </label>

                            <input class="w-full p-3 border border-[#8D9EFF] rounded-xl" type="text" id="nama-barang" name="nama_barang">
                        </div>

                        {{-- Slug --}}
                        <input type="hidden" value="{{ $slug }}" class="form-control" id="slug" name="slug" autofocus>

                        <!-- NIM -->
                        <div class="w-full mb-4">
                            <label class="mb-1 inline-block text-xs font-semibold sm:text-sm md:text-base" for="nim"> NIM Penerima </label>

                            <input class="w-full p-3 border border-[#8D9EFF] rounded-xl" type="text" id="nim" name="nim">
                        </div>

                        <!-- Jurusan -->
                        <div class="w-full mb-8">
                            <label class="mb-1 inline-block text-xs font-semibold sm:text-sm md:text-base" for="jurusan"> Jurusan Penerima </label>

                            <input class="w-full p-3 border border-[#8D9EFF] rounded-xl" type="text" id="jurusan" name="jurusan">
                        </div>

                        <!-- Button -->
                        <div class="w-full mx-auto">
                            <button class="w-full py-4 text-sm text-white font-montserrat font-bold bg-[#8D72E1] rounded-2xl shadow-btn lg:text-base"> Masukkan Data </button>
                        </div>

                    </form>
                </div>

                
            </div>

            <!-- Sticker Background -->
            <div class="w-[100%] -z-[1] absolute bottom-6 left-1/2 -translate-x-1/2 hidden lg:block xl:w-[75%]">
                <img class="w-full" src="/img/stikerDesktop.png" alt="Sticker Desktop">
            </div>

        </section>
        <!-- Section Form Claim End -->


        <!-- Aside Section -->
        <section class="w-[90%] h-[60vh] mx-auto mt-44 mb-10 hidden lg:block relative">

            <!-- Container Cari Sekarang -->
            <div class="flex justify-around w-[70%] py-10 bg-gradient-to-r from-[#4870C0] to-[#a7b3fa] rounded-3xl absolute -top-7 left-1/2 -translate-x-1/2 -translate-y-1/2">

                <!-- Headline -->
                <div class="text-3xl text-white font-jost font-semibold">
                    <p> Kamu Kehilangan Barang ? </p>

                    <p> Coba Cari Di Foundit. </p>
                </div>

                <!-- Button -->
                <div class="self-center">
                    <a href="/baranghilang" class="px-10 py-4 text-lg text-white bg-[#395EB4] rounded-[52px]"> Cari Sekarang! </a >
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
                                <a href="/"> Home </a>
                                <a href="/Laporan"> Laporan </a>
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


        <!-- Sticker Mobile -->
        <div class="w-full absolute bottom-0 left-1/2 -translate-x-1/2 -z-[1] md:w-[85%] lg:hidden">
            <img class="w-full" src="/img/stikerMobile.png" alt="Sticker Mobile">
        </div>

        <script>
            // Code Viewport
            const viewportWidth = Math.max(document.documentElement.clientWidth || 0, window.innerWidth || 0);

            const nama = document.querySelector('#nama-barang')
            const slug = document.querySelector('#slug')

            nama.addEventListener('change', function(){
            fetch('/Laporan/create/checkSlug?nama=' + nama.value)
                .then(response => response.json())
                .then(data =>slug.value = data.slug)
            });


            if(viewportWidth >= 1024){

                // Logic Dropdown Profile (Desktop)
                const dropdown_trigger = document.getElementById("dropdown-trigger");
                const dropdown_menu = document.getElementById("dropdown-menu");
                
                dropdown_trigger.addEventListener("mouseover", () => {
                    dropdown_menu.classList.remove("hidden")
                    
                    setTimeout(() => {  
                        dropdown_menu.classList.remove("opacity-0")
                    }, 0);
                });
                
                dropdown_trigger.addEventListener("mouseout", () => {
                    dropdown_menu.classList.add("hidden")
                    
                    setTimeout(() => {  
                        dropdown_menu.classList.add("opacity-0")
                    }, 0);
                });

            } 
        </script>

    </body>
</html>