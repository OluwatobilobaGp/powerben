<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{('./images/logo.png')}}" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,500&display=swap" rel="stylesheet">
    <title> Profile | The Believers Life House Media</title>
</head>

<body onload="" class="bg-gradient-to-r from-red-600 to-pink-600 min-h-screen pt-10 md:pt-20 pb-6 px-2 md:px-10">

    <main class="bg-white rounded-3xl shadow-2xl p-5">


        <!-- header  -->
        <section class="flex items-center justify-between">
            <img class="h-10 w-10" src="{{('./images/logo.png')}}" alt="" class="mx-auto" srcset="">

            <!-- left menu -->
            <nav class="hidden items-center space-x-10 text-sm  lg:flex">
                <a href="dashboard" class="text-black font-bold hover:text-pink-600 transition duration-500"> Home
                </a>
                <a href="withdrawal_details" class="text-black font-bold hover:text-pink-600 transition duration-500"> Withdrawal Details </a>
                <a href="account_settings" class="text-black font-bold hover:text-pink-600 transition duration-500"> Account Setting</a>
                <a href="profile" class="text-black font-bold hover:text-pink-600 transition duration-500"> Profile</a>
                <a href="logout"><img src="{{('./images/logout.png')}}" class="w-8 h-8" alt="logout icon" srcset=""></a>
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
                    <a href="dashboard" class="text-black font-bold py-3 text-center w-full hover:text-pink-600 transition duration-500"> Dashboard</a>
                    <a href="withdrawal_details" class="text-black font-bold py-3 text-center w-full hover:text-pink-600 transition duration-500"> Withdrawal Details</a>
                    <a href="account_settings" class="text-black font-bold py-3 text-center w-full hover:text-pink-600 transition duration-500"> Account Setting</a>
                    <a href="profile" class="text-black font-bold py-3 text-center w-full hover:text-pink-600 transition duration-500"> Profile</a>
                    <a href="logout" name="logout" class="border-t-2 w-full text-center text-white bg-pink-600 px-4 py-1 rounded-full">Log Out</a>
                </div>
            </div>
        </section>

        <!-- Subscription Container -->
        <section class="lg:pb-10">
            <fieldset class="border-2 border-pink-600 w-full mx-auto md:w-1/2 pb-4 rounded-2xl px-5 ">
                <legend class="font-bold text-xl text-center px-5 py-2">Profile</legend>
                <form action="{{route('update-profile')}}" method="post" class="flex flex-col mx-auto w-full ">
                    @if(Session::has('success'))
                    <div class="text-green-600 py-4 px-2 border-1 border-green bg-green-100">{{Session::get('success')}}</div>
                    @endif
                    @if(Session::has('fail'))
                    <div class="text-red-600 py-4 px-2 border-1 border-red bg-red-100">{{Session::get('fail')}}</div>
                    @endif
                    @csrf
                    <div class="flex flex-col w-full px-5 mx-auto lg:flex-row lg:px-2 lg:space-x-5 md:justify-between">
                        <div class="mb-2 pt-3 rounded-r-2xl w-full">

                            <p class="flex space-x-2 font-bold"><label for=" " class="block mb-2 ml-3 font-bold">Email Address </label><label for="hash" class="text-red-600"> *</label></p>
                            <input type="text" id="myEmail" name="email" placeholder="Enter" readonly value="{{$data->email}}" class="bg-gray-100 w-full rounded-r-2xl p-3 focus:outline-none border-b-4 border-gray focus:border-pink-600 transition duration-500">
                            <span class="text-red-600">@error (' ') {{$message}} @enderror</span>


                        </div>
                        <div class="mb-2 pt-3 rounded-r-2xl w-full">

                            <p class="flex space-x-2 font-bold"><label for="Title" class="block mb-2 ml-3 font-bold">Title </label><label for="hash" class="text-red-600"> *</label></p>
                            <input type="text" id="title" name="title" placeholder="Enter BVN" value="{{old('title')}}" class="bg-gray-100 w-full rounded-r-2xl p-3 focus:outline-none border-b-4 border-gray focus:border-pink-600 transition duration-500">
                            <span class="text-red-600">@error ('title') {{$message}} @enderror</span>


                        </div>
                    </div>

                    <div class="flex flex-col w-full px-5 mx-auto lg:flex-row lg:px-2 lg:space-x-5 md:justify-between">
                        <div class="mb-2 pt-3 rounded-r-2xl w-full">
                            <p class="flex space-x-2 font-bold"><label for="Full Name" class="block mb-2 ml-3 font-bold">Full Name </label><label for="hash" class="text-red-600"> *</label></p>
                            <input type="number" id="full-name" name="full-name" placeholder="Enter Full Name" value="{{old('full-name')}}" class="bg-gray-100 w-full rounded-r-2xl p-3 focus:outline-none border-b-4 border-gray focus:border-pink-600 transition duration-500">
                            <span class="text-red-600">@error ('full-name') {{$message}} @enderror</span>
                        </div>
                        <div class="mb-2 pt-3 rounded-r-2xl w-full">
                            <p class="flex space-x-2 font-bold"><label for="dob" class="block mb-2 ml-3 font-bold">Date of Birth </label><label for="hash" class="text-red-600"> *</label></p>
                            <input type="text" id="dob" name="dob" placeholder="DD/MM/YYYY" value="{{old('dob')}}" class="bg-gray-100 w-full rounded-r-2xl p-3 focus:outline-none border-b-4 border-gray focus:border-pink-600 transition duration-500">
                            <span class="text-red-600">@error ('dob') {{$message}} @enderror</span>
                        </div>
                    </div>

                    <div class="flex flex-col w-full px-5 mx-auto lg:flex-row lg:px-2 lg:space-x-5 md:justify-between">
                        <div class="mb-2 pt-3 rounded-r-2xl w-full">
                            <p class="flex space-x-2 font-bold"><label for="Notionality" class="block mb-2 ml-3 font-bold"> Nationality </label><label for="hash" class="text-red-600"> *</label></p>
                            <input type="text" id="Nationality" name="nationality" placeholder="e.g Nigerian " value="{{old('bank_name')}}" class="bg-gray-100 w-full rounded-r-2xl p-3 focus:outline-none border-b-4 border-gray focus:border-pink-600 transition duration-500">
                            <span class="text-red-600">@error ('nationality') {{$message}} @enderror</span>
                        </div>
                        <div class="mb-2 pt-3 rounded-r-2xl w-full">
                            <p class="flex space-x-2 font-bold"><label for=" " class="block mb-2 ml-3 font-bold">State of Origin </label><label for="hash" class="text-red-600"> *</label></p>
                            <input type="text" id=" " name=" " placeholder="Enter  " value="{{old('')}}" class="bg-gray-100 w-full rounded-r-2xl p-3 focus:outline-none border-b-4 border-gray focus:border-pink-600 transition duration-500">
                            <span class="text-red-600">@error (' ') {{$message}} @enderror</span>
                        </div>
                    </div>

                    <div class="flex flex-col w-full px-5 mx-auto lg:flex-row lg:px-2 lg:space-x-5 md:justify-between">
                        <div class="mb-2 pt-3 rounded-r-2xl w-full">
                            <p class="flex space-x-2 font-bold"><label for=" " class="block mb-2 ml-3 font-bold">Occupation </label><label for="hash" class="text-red-600"> *</label></p>
                            <input type="text" id=" " name=" " placeholder="Enter  " value="{{old('')}}" class="bg-gray-100 w-full rounded-r-2xl p-3 focus:outline-none border-b-4 border-gray focus:border-pink-600 transition duration-500">
                            <span class="text-red-600">@error (' ') {{$message}} @enderror</span>
                        </div>
                        <div class="mb-2 pt-3 rounded-r-2xl w-full">
                            <p class="flex space-x-2 font-bold"><label for=" " class="block mb-2 ml-3 font-bold">Residential Address </label><label for="hash" class="text-red-600"> *</label></p>
                            <input type="text" id=" " name=" " placeholder="Enter  " value="" class="bg-gray-100 w-full rounded-r-2xl p-3 focus:outline-none border-b-4 border-gray focus:border-pink-600 transition duration-500">
                            <span class="text-red-600">@error (' ') {{$message}} @enderror</span>
                        </div>
                    </div>

                    <div class="flex flex-col w-full items-center px-5 mx-auto lg:flex-row lg:px-2 lg:space-x-5 md:justify-between">

                        <div class="mb-2 pt-3 rounded-r-2xl w-full">
                            <p class="flex space-x-2 font-bold"><label for=" Contact Number" class="block mb-2 ml-3 font-bold">Contact Number </label><label for="hash" class="text-red-600"> *</label></p>
                            <input type="number" id=" " name=" " placeholder="Enter  " value="{{old('')}}" class="bg-gray-100 w-full rounded-r-2xl p-3 focus:outline-none border-b-4 border-gray focus:border-pink-600 transition duration-500">
                            <span class="text-red-600">@error (' ') {{$message}} @enderror</span>
                        </div>


                        <div class="mb-2 pt-3 rounded-r-2xl w-full">
                            <button class="bg-gradient-to-l from-pink-600 to-red-600 w-full mx-auto text-white font-bold py-3 rounded shadow-lg hover:shadow-xl transition duration-200" type="submit"> Update Now
                            </button>
                        </div>

                    </div>

                </form>
            </fieldset>
        </section>
        <!-- End Subscription -->


    </main>

</body>

</html>
<script src="{{asset('./js/script.js')}}"></script>
