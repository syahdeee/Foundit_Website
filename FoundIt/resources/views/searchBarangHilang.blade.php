<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Jost:wght@100;200;300;400;500;600;700;800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Open+Sans:wght@300;400;500;600;700;800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" 
        crossorigin="anonymous">
        <link rel="stylesheet" href="./css/style.css">
        @vite('resources/css/app.css')
        
        <title>Search Barang Hilang</title>
    </head>

    <body>

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

                    <a class="text-sm font-montserrat font-extrabold xl:text-base transition-all ease-in-out duration-150 hover:scale-90" href="/baranghilang"> Barang Hilang </a>

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

    
        <!-- Header Mobile -->
        <header class="w-full fixed top-0 bg-white z-10 lg:hidden">
            <div class="container">

                <!-- Icon Panah, Search Bar & Filter -->
                <div class="flex items-center justify-between w-full pt-3">

                    <!-- Icon Panah -->
                    <div class="w-fit">
                        <a href="/">
                            <svg class="w-9 h-9" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                            </svg>                                            
                        </a>
                    </div>

                    <!-- Search Bar -->
                    <form class="w-[75%] mx-auto relative">
        
                        <input id="search" name="search" class="w-full px-5 py-3 text-sm placeholder-black font-poppins font-extralight bg-white rounded-lg shadow-3xl" type="text" placeholder="All item">

                        <label for="search" class="p-1 bg-[#8D9EFF] rounded-lg absolute top-1/2 right-3 -translate-y-1/2">
                            <svg class="w-5 h-5 text-white"  width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <circle cx="10" cy="10" r="7" />  <line x1="21" y1="21" x2="15" y2="15" /></svg>
                        </label>
                    </form>

                </div>

                <!-- Navigasi Barang Temuan & Barang Hilang -->
                <div class="flex justify-around w-full mt-3">

                    <!-- Barang Temuan -->
                    <div class="w-1/2">
                        <a href="/barangtemu">
                            <h2 class="py-1 text-base text-center text-[#BDC1C2] font-montserrat font-semibold tracking-wide">Barang Temuan</h2>
                        </a>

                        <!-- Garis Bawah -->
                        <div class="w-full">
                            <span class="w-full h-[2px] bg-[#BDC1C2] block"></span>
                        </div>
                    </div>

                    <!-- Barang Hilang -->
                    <div class="w-1/2">
                        <a href="/baranghilang">
                            <h2 class="py-1 text-base text-center text-[#8D72E1] font-montserrat font-semibold tracking-wide">Barang Hilang</h2>
                        </a>

                        <!-- Garis Bawah -->
                        <div class="w-full">
                            <span class="w-full h-[2px] bg-[#8D72E1] block"></span>
                        </div>
                    </div>

                </div>

            </div>
        </header>


        <!-- All Item Opening Section  -->
        <section class="pt-36 hidden lg:block">
            <div class="container">
                <div class="w-[96%] h-[60vh] mx-auto rounded-[40px] bg-no-repeat bg-left-bottom bg-cover relative" style="background-image: url(img/bgAllitem.png);">

                    <!-- All Item Opening -->
                    <div class="flex justify-center items-center w-full h-full">
                
                        <!-- Container Tagline, Search Bar, dan Dropdown -->
                        <div class="w-full">

                            <!-- Tagline -->
                            <p class="mb-4 text-5xl text-white text-center font-jost font-semibold"> Barang Kamu Hilang ? </p>
                            <p class="mb-10 text-5xl text-white text-center font-jost font-semibold"> Coba Cari Di Sini ! </p>

                            <!-- Search Bar & Dropdown -->
                            <div class="flex items-center">

                                <!-- Search Bar -->
                                <form class="w-[40%] mx-auto relative">
                    
                                    <input id="search" name="search" class="w-full px-5 py-3 text-sm placeholder-black font-poppins font-extralight bg-white rounded-lg shadow-3xl xl:text-base" type="text" placeholder="All item">
    
                                    <button type="submit" for="search" class="p-1 bg-[#8D9EFF] rounded-lg absolute top-1/2 right-3 -translate-y-1/2">
                                        <svg class="w-5 h-5 text-white"  width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <circle cx="10" cy="10" r="7" />  <line x1="21" y1="21" x2="15" y2="15" /></svg>
                                    </button>
                                </form>
                                
                                <!-- Dropdown -->
                                <!-- <div class="w-[35%] relative">

                                    <select name="jenis-barang" id="jenis-barang" class="w-full pl-2 py-3 rounded-xl text-sm text-white font-poppins font-medium bg-[#8D9EFF] focus:outline-none appearance-none cursor-pointer">

                                        <option class="text-sm text-black font-poppins font-medium bg-white" value="lostItem"> <a href="/baranghilang"> Barang Hilang </a> </option>

                                        <option class="text-sm text-black font-poppins font-medium bg-white" value="foundItem"> <a href="SearchBarangTemu.html"> Barang Temu </a> </option>


                                    </select>

                                    <span class="pointer-events-none absolute top-1/2 right-3 -translate-y-1/2">
                                        <svg class="w-6 h-6 text-[#244CA5]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                          </svg>                                          
                                    </span>

                                </div> -->

                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </section>
        <!-- All Item Opening Section End -->


        <!-- Barang Hilang Section -->
        <section class="pt-32 pb-28 relative xl:pt-20">
            <div class="container">
                <form action="">
                    @csrf
                <div class="flex flex-wrap ">
                    
                    <!-- Dropdown Filter Barang (viewport desktop) -->
                    <div class="justify-between w-full mb-10 px-3 hidden lg:flex">
                    
                        
                        <!-- Status, Jenis, dan Tanggal -->
                        <div class="flex justify-between w-[60%]">

                            <!-- Dropdown Jenis -->
                            <div class="w-[30%] relative mx-3">

                                <select name="jenis" id="jenis" class="w-full px-3 py-[7px] rounded-xl text-sm text-black font-poppins font-medium border border-[#8D72E1] focus:outline-none appearance-none cursor-pointer">

                                    <option disabled selected value="">Jenis Barang</option>

                                    @foreach ($categories as $category)
                                        @if (old('category_id') == $category->id)
                                            
                                        <option class="text-sm text-black font-poppins font-medium bg-white" value="{{ $category->id }}" selected>{{ $category->nama }}</option>
                                        @else
                                        <option class="text-sm text-black font-poppins font-medium bg-white" value="{{ $category->id }}">{{ $category->nama }}</option>
                                        
                                        @endif
                                    @endforeach
                                </select>

                                <span class="pointer-events-none absolute top-1/2 right-3 -translate-y-1/2">
                                    <svg class="w-6 h-6 text-black" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                        </svg>                                          
                                </span>

                            </div>

                            <!-- Dropdown Tanggal -->
                            <div class="w-[30%] relative mx-3">

                                <input type="date" name="tanggal" class="w-full px-3 py-[7px] rounded-xl text-sm text-black font-poppins font-medium border border-[#8D72E1] cursor-pointer">

                            </div>

                            <!-- Sort By -->
                            <div class="w-[30%] relative mx-3">

                                <select name="sort" id="sort" class="w-full px-3 py-[7px] rounded-xl text-sm text-black font-poppins font-medium border border-[#8D72E1] focus:outline-none appearance-none cursor-pointer">

                                    <option disabled selected value="">Sort By</option>

                                    <option class="text-sm text-black font-poppins font-medium bg-white" value="latest">  Latest </option>

                                    <option class="text-sm text-black font-poppins font-medium bg-white" value="oldest"> Oldest </option>


                                </select>

                                <span class="pointer-events-none absolute top-1/2 right-3 -translate-y-1/2">
                                    <svg class="w-6 h-6 text-black" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                        </svg>                                          
                                </span>
                                
                            </div>

                        </div>

                        <!-- Sort by -->
                        <div class="flex justify-end items-center w-[40%]">

                            
                            <button class="w-[20%] relative mx-2 px-3 py-[7px] rounded-xl text-sm text-white font-poppins font-medium border border-[#060214] bg-[#8D9EFF] focus:outline-none appearance-none cursor-pointer" type="submit">
                                apply
                            </button>
                        </div>
                        
                    </form>

                    </div>

                    <!-- Item Card Container -->
                    <div class="grid grid-cols-2 w-full md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5">
                        @foreach ($barangs as $barang)
                        
                        
                        <!-- Card -->
                        <div class="justify-self-center w-[95%] mb-8 bg-white rounded-xl shadow-barang relative overflow-hidden sm:w-[80%] md:w-[90%] xl:w-[90%]">
                            
                            <!-- Image Container -->
                            <div class="w-full h-[130px] relative">  
                                @if ($barang->image)
                                <img class="w-full h-full" src="{{ asset('storage/'.$barang->image) }}" alt="Gambar Barang">
                                @else
                                <img class="w-full h-full" src="img/dompetHitam.png" alt="Gambar Barang">
                                @endif 
                            </div>

                            <!-- Label -->
                            <div class="px-5 bg-[#6C4AB6] absolute top-3 right-3">
                                <p class="text-white text-sm text-center font-light font-poppins">Hilang</p>
                            </div>

                            <!-- Deskripsi Kehilangan -->
                            <div class="w-full px-2 py-3">

                                <!-- Nama Barang -->
                                <h1 class="mb-2 text-base font-poppins font-semibold xl:text-lg 2xl:text-xl"> {{ $barang->nama }} </h1>

                                <!-- Tanggal Barang -->
                                <div class="flex items-center w-full mb-3">
                                    <span class="mr-[5px]">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-[15px] h-[15px]">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                                        </svg>  
                                    </span>

                                    <p class="text-xs font-poppins font-normal xl:text-sm 2xl:text-base"> {{ $barang->created_at }} </p>
                                </div>

                                <a href="/baranghilang/{{ $barang->slug }}">Detail barang</a>

                                <!-- Reward / No Reward -->
                                <div class="flex justify-end items-center w-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 11.25v8.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5v-8.25M12 4.875A2.625 2.625 0 109.375 7.5H12m0-2.625V7.5m0-2.625A2.625 2.625 0 1114.625 7.5H12m0 0V21m-8.625-9.75h18c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125h-18c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
                                    </svg>  
                                </div>

                            </div>
                        </div>
                        
                        @endforeach

                    </div>

                    <!-- Pagination -->
                    <div class="flex items-center justify-center gap-2 w-full mt-4 text-sm font-poppins font-bold lg:mt-16">

                        {{-- <!-- Arrow Kiri -->
                        <a href="" class="text-lg">
                            <svg class="w-3 h-3 text-[#1D2A30]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                            </svg>                              
                        </a>

                        <a href="" class="px-3 py-[4px] border rounded-lg text-white bg-[#8D9EFF]"> 1 </a>
                        <a href="" class="px-3 py-[4px] border rounded-lg"> 2 </a>
                        <a href="" class="px-3 py-[4px] border rounded-lg"> 3 </a>
                        <div class="d-flex justify-content-end"> --}}

                            {{ $barangs->links() }}

                        {{-- </div> --}}

                        <!-- Arrow Kanan -->
                        {{-- <a href="" class="text-lg">
                            <svg class="w-3 h-3 text-[#1D2A30]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                              </svg>                              
                        </a> --}}

                    </div>
                    

                </div>
            </div>
        </section>
        <!-- Barang Hilang Section End -->


        <!-- Aside Section -->
        <section class="w-[90%] h-[60vh] mx-auto mt-36 mb-10 hidden lg:block relative">

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
                            <img class="w-full" src="img/logoLain.png" alt="Logo Foundit">
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


        <!-- Bottom Navigation -->
        <header class="bottom-nav w-[88%] py-[14px] bg-[#8D72E1] rounded-2xl fixed -bottom-5 left-1/2 -translate-x-1/2 -translate-y-1/2 transition-all ease-in-out duration-500 lg:hidden">
            <div class="w-full flex justify-between relative">

                <!-- Botom Navigasi Kiri -->
                <div class="flex w-[45%] justify-evenly">

                    <!-- Home -->
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-white">
                            <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                        </svg>
                    </a>
        
                    <!-- History -->
                    <a href="#">
                        <svg class="w-6 h-6 text-white"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <polyline points="12 8 12 12 14 14" />  <path d="M3.05 11a9 9 0 1 1 .5 4m-.5 5v-5h5" /></svg>
                    </a>

                </div>

                <!-- Laporan -->
                <div class="flex justify-center items-center p-2 bg-[#B9E0FF] rounded-2xl shadow-3xl absolute -top-3 left-1/2 -translate-x-1/2 -translate-y-1/2">
                    <a href="#">
                        <svg class="h-9 w-9 text-white"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                        </svg>                          
                    </a>
                </div>

                <!-- Bottom Navigasi Kanan -->
                <div class="flex w-[45%] justify-evenly">

                    <!-- All Items -->
                    <a href="#">
                        <svg class="w-6 h-6 text-white"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <polyline points="3 7 9 4 15 7 21 4 21 17 15 20 9 17 3 20 3 7" />  <line x1="9" y1="4" x2="9" y2="17" />  <line x1="15" y1="7" x2="15" y2="20" /></svg>
                    </a>
        
                    <!-- Belum Login (Logo Login) -->
                    <a href="#">
                        <svg class="w-6 h-6 text-white"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2" />  <path d="M20 12h-13l3 -3m0 6l-3 -3" /></svg>
                    </a>

                    <!-- Udah Login (Logout) -->
                    <a href="#">
                        <svg class="w-6 h-6 text-white"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2" />  <path d="M7 12h14l-3 -3m0 6l3 -3" /></svg>
                    </a>

                </div>

            </div>
        </header>


        <script>
            document.addEventListener("DOMContentLoaded", () => {

                // Code Viewport
                const viewportWidth = Math.max(document.documentElement.clientWidth || 0, window.innerWidth || 0);

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

            })
        </script>
        
    </body>
</html>

  