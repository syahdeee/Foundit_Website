<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link href="/dist/output.css" rel="stylesheet">
    <!-- Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,700;0,800;1,300&family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,700;0,800;1,300&family=Poppins:wght@500&display=swap" rel="stylesheet">
    <title>Home Admin</title>
</head>

<body class="bg-background">
        <!-- Header -->

        <header class="bg-[#19376D] w-full fixed z-10 top-0 ">
            <div class="mx-10 flex justify-between">
                <!-- Kiri -->
                <div class="w-1/3 flex items-center">
                    <img src="/img/logoLain.png" alt="logo" class="w-1/4 scale-75">
                    <h1 class="text-white text-xl font-bold font-montserrat uppercase">Selamat Datang Admin</h1>
                </div>

                <!-- Kanan -->
                <div id="icon-profile" class="w-1/3 flex items-center justify-end">
                        <div class=" w-36 h-8 flex items-center  bg-white  rounded-2xl cursor-pointer">
                            <div class="flex mx-auto ">
                                <img src="/img/profileDummy.png" alt="" class="w-5 rounded-full items-center">
                                <p class="ml-3 text-xs font-pop">Admin Foundit.</p>
                            </div>
                        </div>
                    </div>


                    <!-- Modal Dropdown -->
                    <div id="modal-dropdown" class="w-[200px] absolute right-3 top-[65px] bg-white rounded-sm shadow-2xl transition-all ease-in-out duration-300 hidden">
                            <div id="close-btn" class="relative">
                                <img src="/img/close-btn.png" alt="closeBtn" class="w-6 absolute right-1 top-1 cursor-pointer">
                            </div>
                            
                            <ul class="flex flex-col p-3">
                                <li class="w-full mb-1 px-2 py-1 rounded-md"><a href="/admin/home" class="text-mons text-sm font-semibold cursor-pointer hover:bg-gray-200 block">Home</a></li>
                                 
                                 <li class="w-full mb-1 px-2 py-1 rounded-md"><a href="/admin/datauser" class="text-mons text-sm font-semibold cursor-pointer hover:bg-gray-200 block
                                    ">Data User</a></li>

                                <li class="w-full mb-1 px-2 py-1 rounded-md"><a href="/admin/barangtemu" class="text-mons text-sm font-semibold cursor-pointer hover:bg-gray-200 block
                                        ">Data Barang Temu</a></li>

                                <li class="w-full mb-1 px-2 py-1 rounded-md"><a href="/admin/baranghilang" class="text-mons text-sm font-semibold cursor-pointer hover:bg-gray-200 block
                                            ">Data Barang Hilang</a></li>

                                <li class="w-full mb-1 px-2 py-1 rounded-md hover:bg-purple hover:bg-opacity-30">
                                    <form action="/admin/logout" method="post">
                                        @csrf
                                        <button type="submit" class="text-mons text-sm font-semibold hover:bg-gray-200 block w-full text-left cursor-pointer outline-none">Logout</button>
                                    </form>
                                </li>
                        
                            </ul>
                    </div>
            </div>
        </header>

        <!-- Tabel Data Registrasi User -->
    <section class=" w-full mt-28 px-5 py-4 bg-white ">
        <div class="container">
            <div>
                <!-- Caption -->
                <div class="w-full flex mx-5  justify-between">
                    <h1 class="mt-2 py-2 font-pop font-bold text-lg">Data Registrasi User</h1>

                    <!-- Search Bar -->
                    <div class="flex items-center justify-end w-[60%]">
                        <form action="" class="w-[50%] mr-3 relative ">
                        
                            <input id="search" name="search" class="w-full px-5 py-2 text-sm placeholder-black font-poppins font-extralight bg-white rounded-lg border border-blue-500" type="text" placeholder="Cari username" value="{{ request('search') }}">

                            <button type="submit" for="search" class="p-1 bg-blue-400 rounded-lg absolute top-1/2 right-3 -translate-y-1/2">
                                <svg class="w-4 h-4 text-white"  width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <circle cx="10" cy="10" r="7" />  <line x1="21" y1="21" x2="15" y2="15" /></svg>
                            </button>
                        </form>
                    </div>
                </div>

                <!-- Tabel -->
                <table class="w-full mt-2">
                    <thead class="w-full font-pop text-xs bg-[#D4D4D4]">
                        <tr class="h-8">
                            <th class="w-11 border">ID User</th>
                            <th class="border">Username</th>
                            <th class="border">NIM</th>
                            <th class="border">Email - No. Telepon</th>
                            <th class="border">KTM</th>
                            <th class="border">Foto Profile</th>
                            <th class="border">Aksi</th>
                        </tr>
                    </thead>

                    <tbody class="text-xs font-pop">
                        @foreach ($users as $user)
                            @if (!$user->is_admin)
                                @if (!$user -> is_verif && !$user -> is_tolak)
                                <tr>
                                    <td class="border text-center">{{ $user -> id }}</td>
                                    <td class="border text-center">{{ $user -> username }}</td>
                                    <td class="border text-center">{{ $user -> nim }}</td>
                                    <td class="border text-center">{{ $user -> email }} - {{ $user -> nomor }}</td>
                                    <td class="border">
                                            <img src="{{ asset('storage/'.$user->ktm) }}" alt="KTM" width="120" class="py-4 mx-auto
                                            ">
                                    </td>

                                    <td class="border">
                                        <img src="{{ asset('storage/'.$user->profil) }}" alt="Profile" width="120" class="py-4 mx-auto
                                        ">
                                    </td>

                                    <td class="border py-2">
                                        <form action="/admin/verif/{{ $user-> id }}" method="post">
                                            @csrf
                                            <button class="block mx-auto px-3 py-1 text-white bg-[#1D4ED8] rounded-lg shadow-md hover:opacity-80 transition-all ease-in-out duration-500">Terima</button>
                                        </form>

                                        <form action="/admin/tolak/{{ $user-> id }}" method="post">
                                            @csrf
                                            <button class="block mx-auto my-1 px-4 py-1  text-white bg-[#ff0000] rounded-md shadow-lg hover:opacity-60 transition-all ease-in-out duration-500">Tolak</button>
                                        </form>
                                    </td>
                                </tr>
                                @elseif ($user -> is_verif)
                                <tr>
                                    <td class="border text-center">{{ $user -> id }}</td>
                                    <td class="border text-center relative">{{ $user -> username }}
                                        <p class="w-[80%] px-1 text-center text-white text-xs font-poppins bg-green-600 absolute top-0 left-0"> Disetujui</p>
                                    </td>
                                    <td class="border text-center">{{ $user -> nim }}</td>
                                    <td class="border text-center">{{ $user -> email }} - {{ $user -> nomor }}</td>
                                    <td class="border">
                                            <img src="{{ asset('storage/'.$user->ktm) }}" alt="KTM" width="120" class="py-4 mx-auto
                                            ">
                                    </td>

                                    <td class="border">
                                        <img src="{{ asset('storage/'.$user->profil) }}" alt="Profile" width="120" class="py-4 mx-auto
                                        ">
                                    </td>

                                    <td class="border py-2 relative">
                                        <button class="block mx-auto px-3 py-1 text-white bg-gray-500 rounded-lg shadow-md ">Terima</button>
                                        
                                        <button class="block mx-auto my-1 px-4 py-1  text-white bg-gray-500 rounded-lg shadow-md">Tolak</button>
                                    </td>
                                </tr>
                                @else
                                <tr> 

                                    <td class="border text-center">{{ $user -> id }}</td>
                                    <td class="border text-center relative">{{ $user -> username }}
                                        <p class="w-[80%] px-1 text-center text-white text-xs font-poppins bg-red-600 absolute top-0 left-0">Tidak Disetujui</p>
                                    </td>
                                    <td class="border text-center">{{ $user -> nim }}</td>
                                    <td class="border text-center">{{ $user -> email }} - {{ $user -> nomor }}</td>
                                    <td class="border">
                                            <img src="{{ asset('storage/'.$user->ktm) }}" alt="KTM" width="120" class="py-4 mx-auto
                                            ">
                                    </td>

                                    <td class="border">
                                        <img src="{{ asset('storage/'.$user->profil) }}" alt="Profile" width="120" class="py-4 mx-auto
                                        ">
                                    </td>

                                    <td class="border py-2">

                                        <button class="block mx-auto px-3 py-1 text-white bg-gray-500 rounded-lg shadow-md ">Terima</button>
                                        
                                        <button class="block mx-auto my-1 px-4 py-1  text-white bg-gray-500 rounded-lg shadow-md">Tolak</button>
                                    </td>
                                </tr>
                                @endif
                            @endif
                        @endforeach
                    </tbody>
                </table>

               <!-- <div class="flex">
                    <div class="mx-auto py-8 font-pop text-sm">
                        <a href="" class="text-lg text-[#D4D4D4]">&laquo;</a>
                        <a href="" class="border border-[#D4D4D4] rounded-md px-2 py-1">1</a>
                        <a href="" class="text-white border border-[#D4D4D4] bg-[#1D4ED8] rounded-md px-2 py-1">2</a>
                        <a href="" class="border border-[#D4D4D4] rounded-md  px-2 py-1">3</a>
                        <a href="" class="border border-[#D4D4D4] rounded-md  px-2 py-1">4</a>
                        <a href="" class="border border-[#D4D4D4] rounded-md  px-2 py-1">5</a>
                        <a href="" class="text-lg text-[#D4D4D4]">&raquo;</a>
                    </div>
               </div> -->
            </div>
        </div>
    </section>

    <script>
        let iconProfile = document.getElementById('icon-profile')
        let modalMenu = document.getElementById('modal-dropdown')
        let closeBtn = document.getElementById('close-btn')

        console.log(modalMenu)

        iconProfile.addEventListener('click', function () {
            modalMenu.classList.remove('hidden')
        })

        closeBtn.addEventListener('click', function () {
            modalMenu.classList.add('hidden')
        })


    </script>

</body>

</html>