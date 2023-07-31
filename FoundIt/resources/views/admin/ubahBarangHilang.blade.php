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

    <title>Ubah Barang Hilang</title>
</head>
<body>
    <!-- Header -->
    <header class="bg-[#19376D] w-full fixed z-10 top-0 ">

            <div class="mx-10 flex justify-between">
                <!-- Kiri -->
                <div class="flex justify-between items-center">
                    <img src="/img/logoLain.png" alt="logo" class="w-1/4 scale-75">
                    <h1 class="text-lg text-white font-montserrat font-bold uppercase"> ID Barang : {{ $data -> id }} </h1>
                </div>

                <div id="icon-profile" class="w-1/3 flex items-center justify-end">
                        <div class=" w-36 h-8 flex items-center  bg-white  rounded-2xl cursor-pointer">
                            <div class="flex mx-auto ">
                                <img src="/img/profileDummy.png" alt="" class="w-5 rounded-full items-center">
                                <p class="ml-3 text-xs font-pop">Admin Foundit.</p>
                            </div>
                        </div>
                    </div>
    
                    <div id="modal-dropdown" class="w-[200px] absolute right-3 top-[65px] bg-white rounded-sm shadow-2xl transition-all ease-in-out duration-300 hidden">
                            <div id="close-btn" class="relative">
                                <img src="/img/close-btn.png" alt="closeBtn" class="w-6 absolute right-0 top-0 cursor-pointer">
                            </div>
                            <ul class="flex flex-col p-3">
                                <li class="w-full mb-1 px-2 py-1 rounded-md hover:bg-purple hover:bg-opacity-30"><a href="/admin/home" class="text-mons text-sm font-semibold cursor-pointer">Home</a></li>
                                 
                                 <li class="w-full mb-1 px-2 py-1 rounded-md hover:bg-purple hover:bg-opacity-30"><a href="/admin/datauser" class="text-mons text-sm font-semibold cursor-pointer
                                    ">Data User</a></li>

                                <li class="w-full mb-1 px-2 py-1 rounded-md hover:bg-purple hover:bg-opacity-30"><a href="/admin/barangtemu" class="text-mons text-sm font-semibold cursor-pointer
                                        ">Data Barang Temu</a></li>

                                <li class="w-full mb-1 px-2 py-1 rounded-md hover:bg-purple hover:bg-opacity-30"><a href="/admin/baranghilang" class="text-mons text-sm font-semibold cursor-pointer
                                            ">Data Barang Hilang</a></li>

                                <li class="w-full mb-1 px-2 py-1 rounded-md hover:bg-purple hover:bg-opacity-30"><a href="/admin/login" class="text-mons text-sm font-semibold cursor-pointer">Logout</a></li>
                        
                            </ul>
                    </div>
            </div>
    </header>

    
        <!-- Section Ubah -->
    <section class="bg-white px-4 py-8">
        <div class="mt-20 container">
            <div class="flex flex-wrap">
                <form action="/admin/barang-hilang/{{$data->id}}" method="POST">
                    @csrf
                    @method('put')
                    <div  class="flex w-full bg-slate-100 rounded-2xl shadow-2xl">
                        <!-- Sisi kiri -->
                        <div class="w-1/2 py-4 px-4">
                            <!-- Nama Barang -->
                            <label class="text-xs text-[#244CA5] font-pop font-medium" for="namabarang"> Nama Barang </label>

                            <input name="namabarang" class="w-full p-3 border border-[#88C6F8] rounded-xl shadow-sm" type="text" id="namabarang" value="{{ $data->nama }}" >

                            <div class="w-full h-[80%]">
                                <!-- Input Image -->
                                <label class="mb-1 pt-2 text-xs text-[#244CA5] font-pop font-medium block">Upload Foto Barang</label>
                                    <label for="upload-foto" class=" flex flex-col items-center justify-center w-[90%] h-[90%] border rounded-xl shadow-shadow-sm cursor-pointer bg-gray-50 border-[#88C6F8] ">
                                        <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                            <svg width="43" height="43" viewBox="0 0 43 43" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.375 14.3332C5.375 15.3186 6.18125 16.1248 7.16667 16.1248C8.15208 16.1248 8.95833 15.3186 8.95833 14.3332V10.7498H12.5417C13.5271 10.7498 14.3333 9.94359 14.3333 8.95817C14.3333 7.97275 13.5271 7.1665 12.5417 7.1665H8.95833V3.58317C8.95833 2.59775 8.15208 1.7915 7.16667 1.7915C6.18125 1.7915 5.375 2.59775 5.375 3.58317V7.1665H1.79167C0.80625 7.1665 0 7.97275 0 8.95817C0 9.94359 0.80625 10.7498 1.79167 10.7498H5.375V14.3332Z" fill="#6C4AB6"/>
                                                <path d="M23.2917 30.4585C26.2603 30.4585 28.6667 28.052 28.6667 25.0835C28.6667 22.115 26.2603 19.7085 23.2917 19.7085C20.3232 19.7085 17.9167 22.115 17.9167 25.0835C17.9167 28.052 20.3232 30.4585 23.2917 30.4585Z" fill="#6C4AB6"/>
                                                <path d="M37.625 10.7498H31.9454L29.7237 8.33109C29.3899 7.9645 28.9832 7.67159 28.5297 7.47106C28.0762 7.27054 27.5858 7.16681 27.09 7.1665H15.6233C15.9279 7.704 16.125 8.29525 16.125 8.95817C16.125 10.929 14.5125 12.5415 12.5417 12.5415H10.75V14.3332C10.75 16.304 9.1375 17.9165 7.16667 17.9165C6.50375 17.9165 5.9125 17.7194 5.375 17.4148V35.8332C5.375 37.804 6.9875 39.4165 8.95833 39.4165H37.625C39.5958 39.4165 41.2083 37.804 41.2083 35.8332V14.3332C41.2083 12.3623 39.5958 10.7498 37.625 10.7498ZM23.2917 34.0415C18.3467 34.0415 14.3333 30.0282 14.3333 25.0832C14.3333 20.1382 18.3467 16.1248 23.2917 16.1248C28.2367 16.1248 32.25 20.1382 32.25 25.0832C32.25 30.0282 28.2367 34.0415 23.2917 34.0415Z" fill="#6C4AB6"/>
                                            </svg>                                    
                                        </div>
                                        <input id="upload-foto" type="file" class="hidden" />
                                </label>
                            </div>
                        </div>

                        <!-- Sisi Kanan -->
                        <div class="w-1/2 py-4 px-4">
                            <!-- Kategori Barang -->
                            <label class="text-xs text-[#244CA5] font-pop font-medium" for="kategori"> Ketegori Barang </label>

                            <input name="kategori" class="w-full p-3 border border-[#88C6F8] rounded-xl shadow-sm" type="text" id="kategori" value="{{ $data -> category_id}}">

                            <!-- Deskripsi Barang -->
                            <label class="text-xs text-[#244CA5] font-pop font-medium" for="deskripsi"> Deskripsi Barang </label>

                            <textarea name="deskripsi" id="deskripsi"  rows="5" class="w-full p-3 border border-[#88C6F8] rounded-xl shadow-md" value={!! $data -> deskripsi !!}>

                            </textarea>

                            <!-- Kronologi Hilang -->
                            <label class="text-xs text-[#244CA5] font-pop font-medium" for="kronologi"> Kronologi Kehilangan </label>

                            <textarea name="kronologi" id="kronologi"  rows="5" class="w-full p-3 border border-[#88C6F8] rounded-xl shadow-md" value={!! $data -> kronologi !!}>

                            </textarea>
                        </div>
                    </div>

                    <div class="py-4 mx-auto flex justify-end">
                        <button class="px-4 py-2 text-white font-pop rounded-xl shadow-2xl bg-[#19376D]">Ubah Data</button>
                    </div>
                </form>
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