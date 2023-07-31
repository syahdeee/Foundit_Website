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

        <title> Login </title>
    </head>

    <body class="bg-[#B9E0FF]">

    @if(session()->has('loginError'))
        <script>
            var msg = '{{Session::get('loginError')}}'
            alert(msg);
        </script>
    @endif

    @if(session()->has('noRegist'))
        <script>
            var msg = '{{Session::get('noRegist')}}'
            alert(msg);
        </script>
    @endif

    @if(session()->has('belumVerif'))
        <script>
            var msg = '{{Session::get('belumVerif')}}'
            alert(msg);
        </script>
    @endif

    @if(session()->has('tolakLogin'))
        <script>
            var msg = '{{Session::get('tolakLogin')}}'
            alert(msg);
        </script>
    @endif

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

                            <!-- Login Welcome text -->
                            <div class="hidden sm:block">                            
                                <p class="mb-2 text-2xl text-center font-montserrat font-extrabold md:text-3xl"> Hello Again ! </p>
        
                                <!-- Caption -->
                                <p class="hidden mt-3 font-poppins font-bold text-base text-center text-[#8D9EFF] sm:block"> Kehilangan barang atau nemu barang nih !? </p>
                            </div>
    
                            <!-- Image -->
                            <div class="w-[70%] mx-auto md:w-[55%]">
                                <img class="w-full" src="/img/loginSticker.png" alt="Image Login">
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
                        <div class="w-full mx-auto sm:w-[80%] sm:p-5 sm:bg-white sm:rounded-2xl md:w-[65%] lg:w-[95%] lg:rounded-none lg:bg-transparent">

                            <!-- Judul Login -->
                            <h1 class="mb-2 text-3xl font-montserrat font-extrabold sm:text-center lg:hidden"> Login </h1>
                            <h1 class="mb-3 text-4xl font-montserratAlt font-bold hidden lg:block xl:text-5xl"> Log in. </h1>

                            <!-- Caption Login -->
                            <div class="hidden mb-8 font-poppins font-light text-[14px] text-center sm:block lg:text-left lg:text-base xl:text-xl xl:mb-10">
                                <p> Hai, selamat datang kembali di Foundit !  </p>

                                <p > Mau cari barang yang hilang ya ? </p>
                            </div>

                            <!-- Form -->
                            <form action="/login"method="post" class="w-full">
                                @csrf
                                <!-- Email / No Telepon -->
                                <div class="w-full mb-3 sm:mb-6">
                                    <label class="text-xs font-semibold sm:text-sm md:text-base" for="email"> Email </label>

                                    <input class="w-full p-3 border border-[#8D9EFF] rounded-xl" type="text" id="email" name="email">
                                </div>

                                <!-- Password -->
                                <div class="w-full">
                                    <label class="text-xs font-semibold sm:text-sm md:text-base" for="password"> Kata Sandi </label>

                                    <input class="w-full p-3 border border-[#8D9EFF] rounded-xl" type="password" id="password" name="password">

                                    <p class="mt-2 font-poppins font-semibold text-[10px] text-right text-[#8D9EFF] sm:text-xs md:text-sm"> Lupa Password ? </p>
                                </div>

                                <button class="w-full mt-6 py-[14px] font-poppins font-semibold bg-[#8D72E1] rounded-xl block md:text-lg"> MASUK </button>
                    
                                <p class="mt-5 font-poppins font-bold text-[11px] text-center sm:text-xs md:text-sm "> Belum punya akun ? <a href="/register" class="text-[#8D72E1] cursor-pointer"> Daftar Sekarang </a> </p>

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