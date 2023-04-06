<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,500&display=swap" rel="stylesheet">
    <title>Dashboard</title>
</head>

<body class="bg-gradient-to-r from-blue-600 to-blue-900 min-h-screen pt-10 md:pt-20 pb-6 px-2 md:px-10">

    <main class="bg-white rounded-3xl shadow-2xl p-5">


        <!-- header  -->
        <section class="flex items-center justify-between">
            <a href="apir" class="rounded-r-full rounded-tl-full bg-gradient-to-r from-blue-600 to-blue-900 text-white font-bold py-4 px-5 hover:text-cyan-400 hover:shadow-2xl transition duration-500">
                <h1 class="font-bold capitalize ">Master Dashborad</h1>
            </a>

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
            <div id="menu" class="absolute flex hidden p-6  px-30 rounded-lg  bg-white text-black right-6 top-20 z-100 shadow-2xl lg:hidden">
                <div class="flex flex-col items-center justify font-bold text-black rounded-sm">
                    <a href="otukpo" class="text-black font-bold py-3 text-center w-full hover:text-blue-600 transition duration-500"> Otukpo Substation</a>
                    <a href="apir" class="text-black font-bold py-3 text-center w-full hover:text-blue-600 transition duration-500"> Apir Substattion</a>
                    <a href="yendev" class="text-black font-bold py-3 text-center w-full hover:text-blue-600 transition duration-500"> Vandev Substation </a>
                    <a href="logout" name="logout" class="border-t-2 w-full text-center text-white bg-blue-700 px-4 py-1 rounded-full">Log Out</a>
                </div>
            </div>
        </section>


        <section class="justify-center mx-auto my-11">
            <div class="flex justify-center items-center space-x-12">
                <a href="otukpo" class="hover:bg-white hover:text-blue-700 transition duration-200">
                    <div class="flex flex-col justify-center items-center rounded-r-full rounded-tl-full bg-gradient-to-l from-blue-600 to-blue-900 text-white font-bold py-8 px-6 cursor-pointer hover:bg-opacity-30">
                        <h1 class="text-2xl">OTUKPO</h1> <span class="text-blue-500">SUBSTATION</span>
                    </div>
                </a>
                <a href="apir" class="hover:bg-white hover:text-blue-700 transition duration-200">
                    <div class="flex flex-col justify-center items-center rounded-r-full rounded-tl-full bg-gradient-to-l from-blue-600 to-blue-900 text-white font-bold py-8 px-6 cursor-pointer hover:bg-opacity-30">
                        <h1 class="text-2xl">APIR</h1> <span class="text-blue-500">SUBSTATION</span>
                    </div>
                </a>
                <a href="yandev" class="hover:bg-white hover:text-blue-700 transition duration-200">
                    <div class="flex flex-col justify-center items-center rounded-r-full rounded-tl-full bg-gradient-to-l from-blue-600 to-blue-900 text-white font-bold py-8 px-6 cursor-pointer hover:bg-opacity-30">
                        <h1 class="text-2xl">YANDEV</h1> <span class="text-blue-500">SUBSTATION</span>
                    </div>
                </a>
            </div>
        </section>

        <section class="justify-center mx-auto my-11">
            <div class="flex justify-center items-center space-x-2">

                <div id="input-btn" class="flex flex-col justify-center items-center rounded-r-full rounded-tl-full bg-gradient-to-l from-blue-600 to-blue-900 text-white font-bold py-8 px-6 cursor-pointer hover:bg-opacity-30">
                    <span class="text-1xl">Input Reading</span>
                </div>

                <div id="view-input-btn" class="flex flex-col justify-center items-center rounded-r-full rounded-tl-full bg-gradient-to-l from-blue-600 to-blue-900 text-white font-bold py-8 px-6 cursor-pointer hover:bg-opacity-30">
                    <span class="text-1xl">View Reading</span>
                </div>

                <div id="outage-btn" class="flex flex-col justify-center items-center rounded-r-full rounded-tl-full bg-gradient-to-l from-blue-600 to-blue-900 text-white font-bold py-8 px-6 cursor-pointer hover:bg-opacity-30">
                    <span class="text-1xl">Input Outage Reading</span>
                </div>

                <div id="view-outage-btn" class="flex flex-col justify-center items-center rounded-r-full rounded-tl-full bg-gradient-to-l from-blue-600 to-blue-900 text-white font-bold py-8 px-6 cursor-pointer hover:bg-opacity-30">
                    <span class="text-1xl">View Outage Reading</span>
                </div>

            </div>


            <!-- modal Input Reading -->


            <div id="inputRead" class=" flex hidden p-6  px-30 rounded-lg  bg-white text-black right-6 top-20 z-100 shadow-2xl ">
                <section class="lg:pb-10">
                    <fieldset class="border-2 border-blue-600 w-full mx-auto md:w-1/2 pb-4 rounded-2xl px-5 ">
                        <legend class="font-bold text-xl text-center px-5 py-2">Input Reading </legend>
                        <form action="{{route('update-withdrawal-details')}}" method="post" class="flex flex-col mx-auto w-full ">
                            @if(Session::has('success'))
                            <div class="text-green-600 py-4 px-2 border-1 border-green bg-green-100">{{Session::get('success')}}</div>
                            @endif
                            @if(Session::has('fail'))
                            <div class="text-red-600 py-4 px-2 border-1 border-red bg-red-100">{{Session::get('fail')}}</div>
                            @endif
                            @csrf
                            <div class="flex flex-col w-full px-5 mx-auto lg:flex-row lg:px-2 lg:space-x-5 md:justify-between">
                                <div class="mb-2 pt-3 rounded-r-2xl w-full">
                                    <p class="flex space-x-2 font-bold"><label for="Load Date" class="block mb-2 ml-3 font-bold">Load Date</label><label for="hash" class="text-red-600"> *</label></p>
                                    <input type="date" id="load_date" name="load_date" placeholder="Enter Load Reading" value="{{old('load_date')}}" class="bg-gray-100 w-full rounded-r-2xl p-3 focus:outline-none border-b-4 border-gray focus:border-blue-600 transition duration-500">
                                    <span class="text-red-600">@error ('load_date') {{$message}} @enderror</span>
                                </div>
                                <div class="mb-2 pt-3 rounded-r-2xl w-full">
                                    <p class="flex space-x-2 font-bold"><label for="Select Hour" class="block mb-2 ml-3 font-bold"> Select Hour </label><label for="hash" class="text-red-600"> *</label></p>
                                    <select name="hour" id="" class="bg-gray-100 w-full rounded-r-2xl p-3 focus:outline-none border-b-4 border-gray focus:border-blue-600 transition duration-500" required>
                                        <option value="01">01</option>
                                        <option value="02">02</option>
                                        <option value="03">03</option>
                                        <option value="04">04</option>
                                        <option value="05">05</option>
                                        <option value="06">06</option>
                                        <option value="07">07</option>
                                        <option value="08">08</option>
                                        <option value="09">09</option>
                                        <option value="10">10</option>
                                    </select>
                                    <span class="text-red-600">@error ('hour') {{$message}} @enderror</span>
                                </div>
                            </div>
                            <div class="flex flex-col w-full px-5 mx-auto lg:flex-row lg:px-2 lg:space-x-5 md:justify-between">
                                <div class="mb-2 pt-3 rounded-r-2xl w-full">
                                    <p class="flex space-x-2 font-bold"><label for="Select Feeder" class="block mb-2 ml-3 font-bold"> Select Feeder </label><label for="hash" class="text-red-600"> *</label></p>
                                    <select name="feeder" id="" class="bg-gray-100 w-full rounded-r-2xl p-3 focus:outline-none border-b-4 border-gray focus:border-blue-600 transition duration-500">
                                        <option value="NNPC">NNPC</option>
                                        <option value="BARACK ROAD">BARACK ROAD</option>
                                        <option value="NORTH BANK">NORTH BANK</option>
                                        <option value="ANKPA">ANKPA</option>
                                        <option value="OJU">OJU</option>
                                        <option value="TARAKU">TARAKU</option>
                                        <option value="GBOKO">GBOKO</option>
                                        <option value="WUKARI">WUKARI</option>
                                        <option value="WANUNNE">WANUNNE</option>
                                    </select>
                                    <span class="text-red-600">@error ('feeder') {{$message}} @enderror</span>
                                </div>
                                <div class="mb-2 pt-3 rounded-r-2xl w-full">
                                    <p class="flex space-x-2 font-bold"><label for="Load Reading" class="block mb-2 ml-3 font-bold">Load Readings</label><label for="hash" class="text-red-600"> *</label></p>
                                    <input type="number" id="load_reading" name="load_reading" placeholder="Enter Load Reading" value="{{old('load_reading')}}" class="bg-gray-100 w-full rounded-r-2xl p-3 focus:outline-none border-b-4 border-gray focus:border-blue-600 transition duration-500">
                                    <span class="text-red-600">@error ('load_reading') {{$message}} @enderror</span>
                                </div>
                            </div>

                            <div class="flex flex-col w-full px-5 mx-auto lg:flex-row lg:px-2 lg:space-x-5 md:justify-between">
                                <div class="mb-2 pt-3 rounded-r-2xl w-full">
                                    <p class="flex space-x-2 font-bold"><label for="Energy Reading" class="block mb-2 ml-3 font-bold">Energy Readings</label><label for="hash" class="text-red-600"> *</label></p>
                                    <input type="number" id="energy_reading" name="energy_reading" placeholder="Enter Reading" value="{{old('energy_readings')}}" class="bg-gray-100 w-full rounded-r-2xl p-3 focus:outline-none border-b-4 border-gray focus:border-blue-600 transition duration-500">
                                    <span class="text-red-600">@error ('energy_reading') {{$message}} @enderror</span>
                                </div>
                                <div class="mb-2 pt-10 rounded-r-2xl w-full">
                                    <button class="bg-gradient-to-l from-blue-600 to-blue-900 w-full mx-auto text-white font-bold py-3 rounded shadow-lg hover:shadow-xl transition duration-200" type="submit">
                                        SAVE
                                    </button>
                                </div>
                            </div>
                        </form>
                    </fieldset>
                </section>
            </div>

            <!-- end modal input Reading  -->

            <!-- modal View Input Reading  -->

            <div id="viewinputRead" class=" flex hidden p-6  px-30 rounded-lg  bg-white text-black right-6 top-20 z-100 shadow-2xl ">
                <section class="lg:pb-10">
                    <fieldset class="border-2 border-blue-600 w-full mx-auto md:w-1/2 pb-4 rounded-2xl px-5 ">
                        <legend class="font-bold text-xl text-center px-5 py-2">View Input Reading </legend>
                        <form action="{{route('update-withdrawal-details')}}" method="post" class="flex flex-col mx-auto w-full ">
                            @if(Session::has('success'))
                            <div class="text-green-600 py-4 px-2 border-1 border-green bg-green-100">{{Session::get('success')}}</div>
                            @endif
                            @if(Session::has('fail'))
                            <div class="text-red-600 py-4 px-2 border-1 border-red bg-red-100">{{Session::get('fail')}}</div>
                            @endif
                            @csrf
                            <div class="flex flex-col w-full px-5 mx-auto lg:flex-row lg:px-2 lg:space-x-5 md:justify-between">
                                <div class="mb-2 pt-3 rounded-r-2xl w-full">
                                    <p class="flex space-x-2 font-bold"><label for="Feeders' Date" class="block mb-2 ml-3 font-bold">Feeder's Date</label><label for="hash" class="text-red-600"> *</label></p>
                                    <input type="date" id="feeder_date" name="feeder_date" placeholder="Select Feeder Date" value="{{old('feeder_date')}}" class="bg-gray-100 w-full rounded-r-2xl p-3 focus:outline-none border-b-4 border-gray focus:border-blue-600 transition duration-500">
                                    <span class="text-red-600">@error ('feeder_date') {{$message}} @enderror</span>
                                </div>
                                <div class="mb-2 pt-3 rounded-r-2xl w-full">
                                    <p class="flex space-x-2 font-bold"><label for="Select Feeder" class="block mb-2 ml-3 font-bold"> Select Feeder </label><label for="hash" class="text-red-600"> *</label></p>
                                    <select name="feeder" id="" class="bg-gray-100 w-full rounded-r-2xl p-3 focus:outline-none border-b-4 border-gray focus:border-blue-600 transition duration-500">
                                        <option value="NNPC">NNPC</option>
                                        <option value="BARACK ROAD">BARACK ROAD</option>
                                        <option value="NORTH BANK">NORTH BANK</option>
                                        <option value="ANKPA">ANKPA</option>
                                        <option value="OJU">OJU</option>
                                        <option value="TARAKU">TARAKU</option>
                                        <option value="GBOKO">GBOKO</option>
                                        <option value="WUKARI">WUKARI</option>
                                        <option value="WANUNNE">WANUNNE</option>
                                    </select>
                                    <span class="text-red-600">@error ('feeder') {{$message}} @enderror</span>
                                </div>
                            </div>
                            <div class="flex flex-col w-full px-5 mx-auto lg:flex-row lg:px-2 lg:space-x-5 md:justify-between">
                                <div class="mb-2 pt-10 rounded-r-2xl w-full">
                                    <button class="bg-gradient-to-l from-blue-600 to-blue-900 w-full mx-auto text-white font-bold py-3 rounded shadow-lg hover:shadow-xl transition duration-200" type="submit">
                                        GET FEEDER
                                    </button>
                                </div>
                            </div>
                        </form>
                    </fieldset>
                </section>
            </div>

            <!-- end modal View Input reading  -->


            <!-- modal input outage Reading  -->


            <div id="inputOutageRead" class=" flex hidden p-6  px-30 rounded-lg  bg-white text-black right-6 top-20 z-100 shadow-2xl ">
                <section class="lg:pb-10">
                    <fieldset class="border-2 border-blue-600 w-full mx-auto md:w-1/2 pb-4 rounded-2xl px-5 ">
                        <legend class="font-bold text-xl text-center px-5 py-2">Input Outage Reading </legend>
                        <form action="{{route('update-withdrawal-details')}}" method="post" class="flex flex-col mx-auto w-full ">
                            @if(Session::has('success'))
                            <div class="text-green-600 py-4 px-2 border-1 border-green bg-green-100">{{Session::get('success')}}</div>
                            @endif
                            @if(Session::has('fail'))
                            <div class="text-red-600 py-4 px-2 border-1 border-red bg-red-100">{{Session::get('fail')}}</div>
                            @endif
                            @csrf
                            <div class="flex flex-col w-full px-5 mx-auto lg:flex-row lg:px-2 lg:space-x-5 md:justify-between">
                                <div class="mb-2 pt-3 rounded-r-2xl w-full">
                                    <p class="flex space-x-2 font-bold"><label for="Outage Type" class="block mb-2 ml-3 font-bold">Outage Type</label><label for="hash" class="text-red-600"> *</label></p>
                                    <select name="outage-type" id="outage-type" class="bg-gray-100 w-full rounded-r-2xl p-3 focus:outline-none border-b-4 border-gray focus:border-blue-600 transition duration-500" required>
                                        <option value="" selected>Select Outage Type</option>
                                        <option value="EF">EF</option>
                                        <option value="OC">OC</option>
                                        <option value="OC/EF">OC/EF</option>
                                        <option value="LS">LS</option>
                                        <option value="EMG">EMG</option>
                                    </select>
                                    <span class="text-red-600">@error ('load_date') {{$message}} @enderror</span>
                                </div>
                                <div class="mb-2 pt-3 rounded-r-2xl w-full">
                                    <p class="flex space-x-2 font-bold"><label for="Select Feeder" class="block mb-2 ml-3 font-bold"> Select Feeder </label><label for="hash" class="text-red-600"> *</label></p>
                                    <select name="feeder" id="" class="bg-gray-100 w-full rounded-r-2xl p-3 focus:outline-none border-b-4 border-gray focus:border-blue-600 transition duration-500">
                                        <option value="" selected>Select Feeder</option>
                                        <option value="NNPC">NNPC</option>
                                        <option value="BARACK ROAD">BARACK ROAD</option>
                                        <option value="NORTH BANK">NORTH BANK</option>
                                        <option value="ANKPA">ANKPA</option>
                                        <option value="OJU">OJU</option>
                                        <option value="TARAKU">TARAKU</option>
                                        <option value="GBOKO">GBOKO</option>
                                        <option value="WUKARI">WUKARI</option>
                                        <option value="WANUNNE">WANUNNE</option>
                                    </select>
                                    <span class="text-red-600">@error ('feeder') {{$message}} @enderror</span>
                                </div>
                            </div>

                            <div class="flex flex-col w-full px-5 mx-auto lg:flex-row lg:px-2 lg:space-x-5 md:justify-between">

                                <div class="mb-2 pt-3 rounded-r-2xl w-full">
                                    <p class="flex space-x-2 font-bold"><label for="Date Out" class="block mb-2 ml-3 font-bold">Date Out</label><label for="hash" class="text-red-600"> *</label></p>
                                    <input type="date" id="date-out" name="date-out" placeholder="Enter Date Out" value="{{old('date_out')}}" class="bg-gray-100 w-full rounded-r-2xl p-3 focus:outline-none border-b-4 border-gray focus:border-blue-600 transition duration-500">
                                    <span class="text-red-600">@error ('date_out') {{$message}} @enderror</span>
                                </div>

                                <div class="mb-2 pt-3 rounded-r-2xl w-full">
                                    <p class="flex space-x-2 font-bold"><label for="Date In" class="block mb-2 ml-3 font-bold">Date In</label><label for="hash" class="text-red-600"> *</label></p>
                                    <input type="date" id="date-in" name="date-in" placeholder="Enter Date In" value="{{old('date_in')}}" class="bg-gray-100 w-full rounded-r-2xl p-3 focus:outline-none border-b-4 border-gray focus:border-blue-600 transition duration-500">
                                    <span class="text-red-600">@error ('date_in') {{$message}} @enderror</span>
                                </div>

                            </div>

                            <div class="flex flex-col w-full px-5 mx-auto lg:flex-row lg:px-2 lg:space-x-5 md:justify-between">

                                <div class="mb-2 pt-3 rounded-r-2xl w-full">
                                    <p class="flex space-x-2 font-bold"><label for="Time Out" class="block mb-2 ml-3 font-bold">Time Out</label><label for="hash" class="text-red-600"> *</label></p>
                                    <input type="time" id="time-out" name="time-out" placeholder="Enter Time Out" value="{{old('time_out')}}" class="bg-gray-100 w-full rounded-r-2xl p-3 focus:outline-none border-b-4 border-gray focus:border-blue-600 transition duration-500">
                                    <span class="text-red-600">@error ('time_out') {{$message}} @enderror</span>
                                </div>

                                <div class="mb-2 pt-3 rounded-r-2xl w-full">
                                    <p class="flex space-x-2 font-bold"><label for="Time In" class="block mb-2 ml-3 font-bold">Time In</label><label for="hash" class="text-red-600"> *</label></p>
                                    <input type="time" id="time-in" name="time-in" placeholder="Enter Time In" value="{{old('time_in')}}" class="bg-gray-100 w-full rounded-r-2xl p-3 focus:outline-none border-b-4 border-gray focus:border-blue-600 transition duration-500">
                                    <span class="text-red-600">@error ('time_in') {{$message}} @enderror</span>
                                </div>

                            </div>

                            <div class="flex flex-col w-full px-5 mx-auto lg:flex-row lg:px-2 lg:space-x-5 md:justify-between">
                                <div class="mb-2 pt-3 rounded-r-2xl w-full">
                                    <p class="flex space-x-2 font-bold"><label for="Load Loss" class="block mb-2 ml-3 font-bold">Load Loss (MW)</label><label for="hash" class="text-red-600"> *</label></p>
                                    <input type="number" id="load_loss" name="load_loss" placeholder="Enter Load" value="{{old('load_loss')}}" class="bg-gray-100 w-full rounded-r-2xl p-3 focus:outline-none border-b-4 border-gray focus:border-blue-600 transition duration-500">
                                    <span class="text-red-600">@error ('load_loss') {{$message}} @enderror</span>
                                </div>
                                <div class="mb-2 pt-10 rounded-r-2xl w-full">
                                    <button class="bg-gradient-to-l from-blue-600 to-blue-900 w-full mx-auto text-white font-bold py-3 rounded shadow-lg hover:shadow-xl transition duration-200" type="submit">
                                        SAVE
                                    </button>
                                </div>
                            </div>


                            <div class="flex flex-col w-full px-5 mx-auto lg:flex-row lg:px-2 lg:space-x-5 md:justify-between">
                                <div class="mb-2 pt-3 rounded-r-2xl w-full">
                                    <p class="flex space-x-2 font-bold"><label for="Feeders' Date" class="block mb-2 ml-3 font-bold">Feeder's Date</label><label for="hash" class="text-red-600"> *</label></p>
                                    <input type="date" id="feeder_date" name="feeder_date" placeholder="Select Feeder Date" value="{{old('feeder_date')}}" class="bg-gray-100 w-full rounded-r-2xl p-3 focus:outline-none border-b-4 border-gray focus:border-blue-600 transition duration-500">
                                    <span class="text-red-600">@error ('feeder_date') {{$message}} @enderror</span>
                                </div>
                                <div class="mb-2 pt-3 rounded-r-2xl w-full">
                                    <p class="flex space-x-2 font-bold"><label for="Feeders' Time" class="block mb-2 ml-3 font-bold">Feeder's Date</label><label for="hash" class="text-red-600"> *</label></p>
                                    <input type="Time" id="feeder_time" name="feeder_time" placeholder="Select Feeder time" value="{{old('feeder_time')}}" class="bg-gray-100 w-full rounded-r-2xl p-3 focus:outline-none border-b-4 border-gray focus:border-blue-600 transition duration-500">
                                    <span class="text-red-600">@error ('feeder_time') {{$message}} @enderror</span>
                                </div>
                            </div>
                            <div class="flex flex-col w-full px-5 mx-auto lg:flex-row lg:px-2 lg:space-x-5 md:justify-between">
                                <div class="mb-2 pt-10 rounded-r-2xl w-full">
                                    <button class="bg-gradient-to-l from-blue-600 to-blue-900 w-full mx-auto text-white font-bold py-3 rounded shadow-lg hover:shadow-xl transition duration-200" type="submit">
                                        GET FEEDER
                                    </button>
                                </div>
                            </div>



                        </form>
                    </fieldset>
                </section>
            </div>

            <!-- end modal input outage reading  -->


            <!-- modal View Outage Reading  -->

            <div id="viewOutageRead" class=" flex hidden p-6  px-30 rounded-lg  bg-white text-black right-6 top-20 z-100 shadow-2xl ">
                <section class="lg:pb-10">
                    <fieldset class="border-2 border-blue-600 w-full mx-auto md:w-1/2 pb-4 rounded-2xl px-5 ">
                        <legend class="font-bold text-xl text-center px-5 py-2">View Outage Reading </legend>
                        <form action="{{route('update-withdrawal-details')}}" method="post" class="flex flex-col mx-auto w-full ">
                            @if(Session::has('success'))
                            <div class="text-green-600 py-4 px-2 border-1 border-green bg-green-100">{{Session::get('success')}}</div>
                            @endif
                            @if(Session::has('fail'))
                            <div class="text-red-600 py-4 px-2 border-1 border-red bg-red-100">{{Session::get('fail')}}</div>
                            @endif
                            @csrf
                            <div class="flex flex-col w-full px-5 mx-auto lg:flex-row lg:px-2 lg:space-x-5 md:justify-between">
                                <div class="mb-2 pt-3 rounded-r-2xl w-full">
                                    <p class="flex space-x-2 font-bold"><label for="Feeders' Date" class="block mb-2 ml-3 font-bold">Feeder's Date</label><label for="hash" class="text-red-600"> *</label></p>
                                    <input type="date" id="feeder_date" name="feeder_date" placeholder="Select Feeder Date" value="{{old('feeder_date')}}" class="bg-gray-100 w-full rounded-r-2xl p-3 focus:outline-none border-b-4 border-gray focus:border-blue-600 transition duration-500">
                                    <span class="text-red-600">@error ('feeder_date') {{$message}} @enderror</span>
                                </div>
                                <div class="mb-2 pt-3 rounded-r-2xl w-full">
                                    <p class="flex space-x-2 font-bold"><label for="Select Feeder" class="block mb-2 ml-3 font-bold"> Select Feeder </label><label for="hash" class="text-red-600"> *</label></p>
                                    <select name="feeder" id="" class="bg-gray-100 w-full rounded-r-2xl p-3 focus:outline-none border-b-4 border-gray focus:border-blue-600 transition duration-500">
                                        <option value="NNPC">NNPC</option>
                                        <option value="BARACK ROAD">BARACK ROAD</option>
                                        <option value="NORTH BANK">NORTH BANK</option>
                                        <option value="ANKPA">ANKPA</option>
                                        <option value="OJU">OJU</option>
                                        <option value="TARAKU">TARAKU</option>
                                        <option value="GBOKO">GBOKO</option>
                                        <option value="WUKARI">WUKARI</option>
                                        <option value="WANUNNE">WANUNNE</option>
                                    </select>
                                    <span class="text-red-600">@error ('feeder') {{$message}} @enderror</span>
                                </div>
                            </div>
                            <div class="flex flex-col w-full px-5 mx-auto lg:flex-row lg:px-2 lg:space-x-5 md:justify-between">
                                <div class="mb-2 pt-10 rounded-r-2xl w-full">
                                    <button class="bg-gradient-to-l from-blue-600 to-blue-900 w-full mx-auto text-white font-bold py-3 rounded shadow-lg hover:shadow-xl transition duration-200" type="submit">
                                        GET FEEDER
                                    </button>
                                </div>
                            </div>
                        </form>
                    </fieldset>
                </section>
            </div>

            <!-- end modal View Outage reading  -->


        </section>

    </main>

</body>

</html>
<script src="{{asset('./js/script.js')}}"></script>