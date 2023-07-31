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
    <title>Data Barang Hilang</title>
</head>

<body class="bg-background">
    @if(session()->has('barangHapus'))
    <script>
        var msg = '{{Session::get('barangHapus')}}';
        alert(msg);
    </script>
    @endif

    <!-- Header -->
    <header class="bg-[#19376D] w-full fixed z-10 top-0 ">
        <div class="mx-10 flex justify-between">
            <!-- Kiri -->
            <div class="w-1/3 flex justify-between items-center">
                <img src="/img/logoLain.png" alt="logo" class="w-1/4 scale-75">
            </div>
    
            <div class="w-2/3 flex justify-between">
                <!-- Search Bar -->
                <div class="flex items-center w-2/3">
                    <form action="" class="w-[90%] mr-3 relative">            
                        <input id="search" name="search" class="w-full px-5 py-2 text-sm placeholder-black font-poppins font-extralight bg-white rounded-lg" type="text" placeholder="Cari barang hilang" value="{{ request('search') }}">

                        <button type="submit" for="search" class="p-1 bg-blue-400 rounded-lg absolute top-1/2 right-3 -translate-y-1/2">
                            <svg class="w-4 h-4 text-white"  width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <circle cx="10" cy="10" r="7" />  <line x1="21" y1="21" x2="15" y2="15" /></svg>
                        </button>
                    </form>
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
                        <li class="w-full mb-1 px-2 py-1 rounded-md">
                            <a href="/admin/home" class="text-mons text-sm font-semibold hover:bg-gray-200 block cursor-pointer">Home</a>
                        </li>
                                 
                        <li class="w-full mb-1 px-2 py-1 rounded-md">
                            <a href="/admin/datauser" class="text-mons text-sm font-semibold hover:bg-gray-200 block  cursor-pointer">Data User</a>
                        </li>

                        <li class="w-full mb-1 px-2 py-1 rounded-md">
                            <a href="/admin/barangtemu" class="text-mons text-sm font-semibold hover:bg-gray-200 block cursor-pointer">Data Barang Temu</a>
                        </li>

                        <li class="w-full mb-1 px-2 py-1 rounded-md">
                            <a href="/admin/baranghilang" class="text-mons text-sm font-semibold hover:bg-gray-200 block  cursor-pointer">Data Barang Hilang</a>
                        </li>

                        <li class="w-full mb-1 px-2 py-1 rounded-md">
                            <form action="/admin/logout" method="post">
                                @csrf
                                <button type="submit" class="text-mons text-sm font-semibold hover:bg-gray-200 block w-full text-left cursor-pointer outline-none">Logout</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <!-- Tabel Data Barang Hilang -->
    <section class=" w-full px-5 bg-white ">
        <div class="container mt-24 py-2">
            <div>
                <!-- Caption -->
                <div class="mx-5">
                    <h1 class="mt-2 font-pop font-bold text-lg">Data Barang Hilang</h1>
                    <p class="font-pop text-xs">Data barang hilang yang dilaporkan oleh user</p>
                </div>

                <!-- Tabel -->
                <table class="w-full mt-2">
                    <thead class="w-full font-pop text-xs bg-[#D4D4D4]">
                        <tr class="h-8">
                            <th class="border">ID Barang Hilang</th>
                            <th class="w-[10%] border">Nama Barang</th>
                            <th class="w-[10%] border">Gambar Barang</th>
                            <th class="w-[10%] border">Kategori Barang</th>
                            <th class="w-[25%] border">Deskripsi Barang</th>
                            <th class="w-[25%] border">Kronologi Kehilangan</th>
                            <th class="w-[10%] border">Aksi</th>
                        </tr>
                    </thead>

                    <tbody class="text-xs font-pop">
                        @foreach ($barangs as $barang)
                            @if ($barang->is_hilang)
                                @if($barang-> is_verif)
                                <tr>
                                    <td class="border text-center">
                                        {{ $barang -> id }}</td>
                                    <td class="border text-center relative">
                                        <p class="w-full px-1 text-center text-white text-xs font-poppins bg-green-600 absolute top-0 left-0">Postingan Disetujui</p>
                                        {{ $barang -> nama }}</td>
                                    <td class="border">
                                        <img src="{{ asset('storage/'.$barang->image) }}" alt="Barang Hilang" width="300" class="py-4 px-2 mx-auto
                                        ">
                                    </td>
                                    <td class="border text-center"> {{ $barang -> category -> nama  }}
                                    </td>
                                    <td class="border p-2 text-center">
                                        <p>{!! $barang -> deskripsi !!}</p>
                                    </td>
                                    <td class="border p-2 text-center">
                                        <p>{!! $barang -> kronologi !!}</p>
                                    </td>

                                    <td class="border py-2">
                                    <form action="/admin/baranghilang/{{$barang->id}}/hapus" method="post">
                                            @csrf
                                            @method('delete')
                                            <button class="block mx-auto my-1 px-3 py-1  text-white bg-blue-700 rounded-md shadow-lg hover:opacity-60 transition-all ease-in-out duration-500">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                                @elseif ($barang-> is_tolak)
                                <tr>
                                    <td class="border text-center">
                                        {{ $barang -> id }}</td>
                                    <td class="border text-center relative">
                                        <p class="w-full px-1 text-center text-white text-xs font-poppins bg-red-600 absolute top-0 left-0">Postingan Tidak Disetujui</p>
                                        {{ $barang -> nama }}</td>
                                    <td class="border">
                                        <img src="{{ asset('storage/'.$barang->image) }}" alt="Barang Hilang" width="300" class="py-4 px-2 mx-auto
                                        ">
                                    </td>
                                    <td class="border text-center">  {{ $barang -> category -> nama  }}
                                    </td>
                                    <td class="border p-2 text-center">
                                        <p>{!! $barang -> deskripsi !!}</p>
                                    </td>
                                    <td class="border p-2 text-center">
                                        <p>{!! $barang -> kronologi !!}</p>
                                    </td>

                                    <td class="border py-2">
                                        <button class="block mx-auto px-3 py-1 text-white bg-gray-500 rounded-lg shadow-md ">Terima</button>
                                        <button class="block mx-auto my-1 px-4 py-1  text-white bg-gray-500 rounded-lg shadow-md">Tolak</button>
                                    </td>
                                </tr>
                                @else
                                <tr>
                                    <td class="border text-center">{{ $barang -> id }}</td>
                                    <td class="border text-center">{{ $barang -> nama }}</td>
                                    <td class="border">
                                        <img src="{{ asset('storage/'.$barang->image) }}" alt="Barang Hilang" width="300" class="py-4 px-2 mx-auto
                                        ">
                                    </td>
                                    <td class="border text-center">  {{ $barang -> category -> nama  }}
                                    </td>
                                    <td class="border p-2 text-center">
                                        <p>{!! $barang -> deskripsi !!}</p>
                                    </td>
                                    <td class="border p-2 text-center">
                                        <p>{!! $barang -> kronologi !!}</p>
                                    </td>

                                    <td class="border py-2">
                                        
                                        <form action="/admin/baranghilang/{{$barang -> id}}/terima" method="post">
                                            @csrf
                                            <button class="block mx-auto my-1 px-3 py-1  text-white bg-green-500 rounded-md shadow-lg hover:opacity-60 transition-all ease-in-out duration-500">Disetujui</button>
                                        </form>

                                        <form action="/admin/baranghilang/{{$barang -> id}}/tolak" method="post">
                                            @csrf
                                            <button class="block mx-auto my-1 px-5 py-1  text-white bg-red-500 rounded-md shadow-lg hover:opacity-60 transition-all ease-in-out duration-500">Tolak</button>
                                        </form>
                                    </td>
                                </tr>
                                @endif
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <script>
        let iconProfile = document.getElementById('icon-profile')
        let modalMenu = document.getElementById('modal-dropdown')
        let closeBtn = document.getElementById('close-btn')

        iconProfile.addEventListener('click', function () {
            modalMenu.classList.remove('hidden')
        })

        closeBtn.addEventListener('click', function () {
            modalMenu.classList.add('hidden')
        })
    </script>
</body>

</html>