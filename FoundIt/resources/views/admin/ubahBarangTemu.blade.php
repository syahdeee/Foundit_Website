<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="/dist/output.css" rel="stylesheet">
    <!-- Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,700;0,800;1,300&family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,700;0,800;1,300&family=Poppins:wght@500&display=swap" rel="stylesheet">

    <title>Ubah Barang Temu</title>
</head>
<body>
    <!-- Header -->
    <header class="bg-white">
        <div class="mx-10 flex justify-between">
            <!-- Kiri -->
            <div class="w-1/3 flex justify-between items-center">
                <img src="../img/LogoFoundIT.png" alt="logo" class="w-1/4 py-3 ">
            </div>

            <!-- Tengah -->
            <div class="flex justify-center items-center w-2/3">
                <h1 class="text-lg text-[#8D9EFF] font-mons font-bold uppercase ">Ubah Data Barang Temu</h1>
            </div>

            <!-- Kanan -->
            <div class="w-1/3 flex items-center justify-end">
                <div class=" w-36 h-8 flex items-center border border-purple rounded-2xl">
                    <div class="flex mx-auto ">
                        <img src="../img/profile.jpeg" alt="" class="w-5 rounded-full items-center">
                        <p class="ml-3 text-xs font-pop">Admin Foundit.</p>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Section Ubah -->
    <section class="bg-[#F5F5F5] px-4 py-8">
        <div class="container">
            <div class="border border-[#6C4AB6] rounded-2xl shadow-2xl">
                <form class="flex w-full">
                    <!-- Sisi kiri -->
                    <div class="w-1/2 py-4 px-4">
                        <!-- Nama Barang -->
                        <label class="text-xs text-[#244CA5] font-pop font-medium" for="nama-barang"> Nama Barang </label>

                        <input class="w-full p-3 border border-[#88C6F8] rounded-xl shadow-md" type="text" id="nama-barang">

                        <div class="w-full h-[80%]">
                            <!-- Input Image -->
                            <label class="mb-1 pt-2 text-xs text-[#244CA5] font-pop font-medium block">Upload Foto Barang</label>
                                <label for="upload-foto" class=" flex flex-col items-center justify-center w-[90%] h-[90%] border border-gray-100 rounded-xl shadow-3xl cursor-pointer bg-gray-50 ">
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

                        <input class="w-full p-3 border border-[#88C6F8] rounded-xl shadow-md" type="text" id="kategori">

                        <!-- Deskripsi Barang -->
                        <label class="text-xs text-[#244CA5] font-pop font-medium" for="deskripsi"> Deskripsi Barang </label>

                        <textarea name="deskripsi" id="deskripsi"  rows="5" class="w-full p-3 border border-[#88C6F8] rounded-xl shadow-md">

                        </textarea>

                        <!-- Kronologi Hilang -->
                        <label class="text-xs text-[#244CA5] font-pop font-medium" for="kronologi"> Lokasi Ditemukan </label>

                        <textarea name="deskripsi" id="deskripsi"  rows="5" class="w-full p-3 border border-[#88C6F8] rounded-xl shadow-md">

                        </textarea>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Tombol Update -->
    <form class="py-8 px-4">
        <div class="container">
            <div class="flex justify-center">
                <button class="px-4 py-2 text-white font-pop rounded-xl shadow-2xl bg-[#8D9EFF]">Ubah Data</button>
            </div>
        </div>
    </form>
</body>
</html>