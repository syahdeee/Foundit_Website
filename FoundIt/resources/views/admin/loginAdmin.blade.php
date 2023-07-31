<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Nunito+Sans:wght@200;300;400;600;700;800&family=Nunito:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">

        <script src="https://cdn.tailwindcss.com"></script>

        <title> Admin Login </title>
    </head>

    <body>  
    @if(session()->has('logoutSuccess'))
        <script>
            var msg = '{{Session::get('logoutSuccess')}}'
            alert(msg);
        </script>
    @endif

    @if(session()->has('loginError'))
        <script>
            var msg = '{{Session::get('loginError')}}'
            alert(msg);
        </script>
    @endif

    <div class="w-screen h-screen flex justify-center items-center bg-background ">
        <form action ="/admin/login" method="post" class="p-10 bg-white rounded flex justify-center items-center flex-col shadow-lg rounded-b-3xl relative">
                @csrf
                <div class="w-full absolute bg-[#19376D] top-0 rounded-t-3xl">
                    <p class="py-3 text-sm text-center font-bold font-mons text-white uppercase">Admin Login</p>
                </div>

                <div class="scale-75 mb-3">
                    <img src="/img/logoLain.png" alt="Logo">
                </div>

                <input type="email" name="email" id="email" class="mb-5 p-3 w-80 rounded border-2 outline-none " placeholder="Email" required autofocus>

                <input type="password" name="password" id="password" class="mb-5 p-3 w-80 focus:border-green-primary rounded border-2 outline-none" placeholder="Password" required>

                <button class="w-full py-1 bg-[#19376D] font-semibold text-white text-center rounded-lg" type="submit">Login</button>
        </form>
    </div>


    </body>
</html>