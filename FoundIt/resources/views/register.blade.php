<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Jost:wght@100;200;300;400;500;600;700;800&family=Montserrat+Alternates:wght@100;200;300;400;500;600;700;800;900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Open+Sans:wght@300;400;500;600;700;800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="./css/style.css">
        @vite('resources/css/app.css')
        <title> Register </title>
    </head>

    <body class="bg-[#B9E0FF]">

        <!-- Header Mobile -->
        <header class="w-full fixed top-0 z-10 lg:hidden">
            <div class="container">

                <!-- Icon Panah -->
                <div class="w-fit pt-3">
                    <a href="Home.html">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                        </svg>                                                                                                  
                    </a>
                </div>

            </div>
        </header>
        <!-- Header Mobile End -->
        

        <!-- Section Login -->
        <section class="mt-16 pb-5 lg:pb-0 lg:mt-0">
            <div class="container lg:containe lg:flex lg:items-center lg:h-screen">

                <!-- Whole Login Content Wrapper -->
                <div class="flex flex-wrap items-center w-full">

                    <!-- Container Image Login & Welcome Text -->
                    <div class="w-full lg:w-[60%]">

                        <!-- Welcome Text & Image (Mobile) -->
                        <div class="w-full block lg:hidden">

                            <!-- Register Welcome Text -->
                            <div class="hidden mb-2 sm:block lg:hidden">                            
                                <p class="mb-2 font-montserrat font-extrabold text-xl text-center sm:text-3xl md:text-4xl"> Yuk, Buat Akunmu ! </p>
        
                                <p class= "font-poppins font-light text-center text-sm sm:text-base md:text-lg"> Buat akunmu dan coba cari barang <br> kamu disini ! </p>
                            </div>
    
                            <!-- Image -->
                            <div class="w-[85%] mx-auto md:w-[65%]">
                                <img class="w-full" src="/img/registerSticker.png" alt="Image Login">
                            </div>

                        </div>

                        <!-- Welcome Text & Image (Desktop) -->
                        <div class="w-full h-[95vh] hidden lg:block">

                            <!-- Background Ungu -->
                            <div class="w-full h-full bg-[#6C4AB6] rounded-[35px] relative overflow-hidden">

                                <!-- Logo Foundit -->
                                <img class="w-[15%] absolute top-0 right-0" src="/img/logoLain.png" alt="Logo">

                                <!-- Welcome Text -->
                                <div class="w-full pl-8 pt-6 xl:mt-8">
                                    <p class="text-[30px] text-white font-montserratAlt font-semibold xl:text-[40px]"> Welcome To </p>

                                    <p class="text-[55px] text-white font-poppins font-extrabold xl:text-[65px]">Foundit.</p>
                                </div>

                                <img class="w-full absolute bottom-0 xl:w-[85%]" src="/img/stickerHomeLg.png" alt="Sticker Login">

                            </div>

                        </div>

                    </div>

                    <!-- Container Form Login -->
                    <div class="w-full mt-10 lg:w-[40%] lg:mt-0">

                        <!-- Login Form -->
                        <div class="w-full mx-auto sm:w-[90%] sm:p-5 sm:bg-white sm:rounded-2xl md:w-[80%] lg:w-[95%] lg:rounded-none lg:bg-transparent">

                            <!-- Judul Register -->
                            <h1 class="mb-2 text-3xl font-montserrat font-extrabold sm:text-center lg:hidden"> Sign Up </h1>
                            <h1 class="mb-3 text-4xl font-montserratAlt font-bold hidden lg:block xl:text-5xl"> Register. </h1>

                            <!-- Caption Register -->
                            <div class="hidden mb-4 font-poppins font-light text-base text-center sm:block lg:text-left lg:text-base xl:text-xl xl:mb-5">
                                <p> Hai, selamat datang di Foundit !  </p>

                                <p > Barang hilang ? Daftar dulu dong ! </p>
                            </div>
    
                            <!-- Form -->
                            <form action="/register" method="post" class="w-full" enctype="multipart/form-data">

                                @csrf
                                <!-- Container Nama & NIM -->
                                <div class="flex flex-col w-full lg:flex-row lg:gap-3 lg:mb-2">

                                    <!-- Nama Pengguna -->
                                    <div class="w-full mb-3 lg:mb-0">
                                        <label class="text-xs font-semibold sm:text-sm md:text-base" for="username"> Nama Pengguna </label>
    
                                        <input class="w-full p-3 border border-[#8D9EFF] rounded-xl" type="text" id="username" name="username">
                                    </div>
    
                                    <!-- NIM Pengguna -->
                                    <div class="w-full mb-3 lg:mb-0">
                                        <label class="text-xs font-semibold sm:text-sm md:text-base" for="nim"> NIM </label>
    
                                        <input class="w-full p-3 border border-[#8D9EFF] rounded-xl" type="text" id="nim" name="nim">
                                    </div>

                                </div>

                                <!-- Email -->
                                <div class="w-full mb-3 lg:mb-2">
                                    <label class="text-xs font-semibold sm:text-sm md:text-base" for="email"> Email </label>

                                    <input class="w-full p-3 border border-[#8D9EFF] rounded-xl" type="text" id="email" name="email">
                                </div>

                                <!-- No Telepon -->
                                <div class="w-full mb-3 lg:mb-2">
                                    <label class="text-xs font-semibold sm:text-sm md:text-base" for="telepon"> No Telepon </label>

                                    <input class="w-full p-3 border border-[#8D9EFF] rounded-xl" type="text" id="telepon" name="nomor">
                                </div>

                                <!-- Password -->
                                <div class="w-full mb-3 lg:mb-2">
                                    <label class="text-xs font-semibold sm:text-sm md:text-base" for="password"> Kata Sandi </label>

                                    <input class="w-full p-3 border border-[#8D9EFF] rounded-xl" type="password" id="password" name="password">
                                </div>

                                <!-- KTM & Profile -->
                                <div class="flex gap-3 w-full mb-8 lg:mb-4">

                                    <!-- Profile (Kiri) -->
                                    <div class="w-[50%]">
                                        <label class="text-xs font-semibold sm:text-sm md:text-base" for="image-profile"> Foto Profile-Mu </label>

                                        <input name="profil"class="w-full border border-[#8D9EFF] bg-white rounded-lg py-1 px-2" id="image-profile" type="file" required>
                                    </div>

                                    <!-- KTM (Kanan) -->
                                    <div class="w-[50%]">
                                        <label class="text-xs font-semibold sm:text-sm md:text-base" for="image-ktm"> Upload KTM-Mu </label>

                                        <input name="ktm" class="w-full border border-[#8D9EFF] bg-white rounded-lg py-1 px-2" id="image-ktm" type="file" required>
                                    </div>

                                </div>

                                <!-- Button -->
                                <button type="submit" class="w-full py-[14px] font-poppins font-semibold text-black bg-[#8D72E1] rounded-xl block md:text-lg"> DAFTAR </button>

                                <p class="mt-8 px-2 text-[11px] text-center font-poppins font-medium min-[480px]:text-[11px] lg:text-sm">Dengan mendaftar, saya menyetujui <span class="text-[#8D72E1]">Syarat dan Ketentuan</span> serta <span class="text-[#8D72E1]">Kebijakan Privasi</span>.</p>

                            </form>

                        </div>


                    </div>


                </div>

            </div>
        </section>
        <!-- Section Login End -->

    </body>

    <!-- <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br> -->
</html>