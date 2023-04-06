<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body class="antialiased">

    <main class="bg-white rounded-3xl shadow-2xl p-5">


        <!-- header  -->
        <section class="flex items-center justify-between">
            <img src="{{('./auth/images/logo.png')}}" class="w-10 h-10" alt="Believers Life House Media logo" srcset="">

            <!-- left menu -->
            <nav class="hidden items-center space-x-10 text-sm  lg:flex">
                <a href="dashboard.html" class="text-black font-bold hover:text-pink-600 transition duration-500"> Home
                </a>
                <a href="withdrawal-details.html" class="text-black font-bold hover:text-pink-600 transition duration-500"> Withdrawal Details </a>
                <a href="account-settings.html" class="text-black font-bold hover:text-pink-600 transition duration-500"> Account Setting</a>
                <a href="withdrawal-details.html" class="text-black font-bold hover:text-pink-600 transition duration-500"> Profile</a>
                <a href="index.html"><img src="./images/logout.png" class="w-8 h-8" alt="Believers Life House Media logo" srcset=""></a>



            </nav>

            <!--Hamburger Button -->
            <button id="menu-btn" class="block p-5 rounded hamburger lg:hidden focus:outline-none" type="button">

                <span class="hamburger-top"></span>
                <span class="hamburger-middle"></span>
                <span class="hamburger-bottom"></span>
            </button>

            <!-- Hamburger Menu -->
            <div id="menu" class="absolute hidden flex p-6  px-30 rounded-lg  bg-white text-black right-6 top-20 z-100 shadow-2xl lg:hidden">
                <div class="flex flex-col items-center justify font-bold text-black rounded-sm">
                    <a href="dashboard.html" class="text-black font-bold py-3 text-center w-full hover:text-pink-600 transition duration-500">
                        Dashboard</a>
                    <a href="withdrawal-details.html" class="text-black font-bold py-3 text-center w-full hover:text-pink-600 transition duration-500"> Withdrawal Details</a>
                    <a href="account-settings.html" class="text-black font-bold py-3 text-center w-full hover:text-pink-600 transition duration-500"> Account Setting</a>
                    <a href="withdrawal-details.html" class="text-black font-bold py-3 text-center w-full hover:text-pink-600 transition duration-500"> Profile</a>
                    <a href="index.html" class="border-t-2 w-full text-center text-white bg-pink-600 px-4 py-1 rounded-full">Log Out</a>
                </div>
            </div>
        </section>

        <!-- Subscription Container -->
        <section>
            <p class="text-3xl">Asaolu Oluwatobiloba Joseph</p>
        </section>


    </main>


</body>

</html>