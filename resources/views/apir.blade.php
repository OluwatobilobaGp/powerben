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
    <title>Apir Substation</title>
</head>

<body class="bg-gradient-to-r from-blue-600 to-blue-900 min-h-screen pt-10 md:pt-20 pb-6 px-2 md:px-10">

    <main class="bg-white rounded-3xl shadow-2xl p-5">


        <!-- header  -->
        <section class="flex items-center justify-between">
            <a href="apir" class="rounded-r-full rounded-tl-full bg-gradient-to-r from-blue-600 to-blue-900 text-white font-bold py-4 px-5 hover:text-cyan-400 hover:shadow-2xl transition duration-500">
                <h1 class="font-bold capitalize ">Apir Dashborad</h1>
            </a>

            <!-- left menu -->
            <nav class="hidden items-center space-x-10 text-sm  lg:flex">
                <a href="javascript:void(0)" id="input-btn" class="text-black py-3 font-bold hover:text-blue-700 transition duration-500"> Input Reading </a>
                <a href="javascript:void(0)" id="view-input-btn" class="text-black py-3 font-bold hover:text-blue-700 transition duration-500"> View Reading </a>
                <a href="javascript:void(0)" id="outage-btn" class="text-black py-3 font-bold hover:text-blue-700 transition duration-500"> Input Outage Reading </a>
                <a href="javascript:void(0)" id="view-outage-btn" class="text-black py-3 font-bold hover:text-blue-700 transition duration-500"> View Outage Reading </a>
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
                    <a href="javascript:void(0)" id="input-btn" class="text-black py-3 font-bold hover:text-blue-700 transition duration-500"> Input Reading </a>
                    <a href="javascript:void(0)" id="view-input-btn" class="text-black py-3 font-bold hover:text-blue-700 transition duration-500"> View Reading </a>
                    <a href="javascript:void(0)" id="outage-btn" class="text-black py-3 font-bold hover:text-blue-700 transition duration-500"> Input Outage Reading </a>
                    <a href="javascript:void(0)" id="view-outage-btn" class="text-black py-3 font-bold hover:text-blue-700 transition duration-500"> View Outage Reading </a>
                    <a href="logout" name="logout" class="border-t-2 w-full text-center text-white bg-blue-700 px-4 py-1 rounded-full">Log Out</a>
                </div>
            </div>
        </section>




        <section class="justify-center mx-auto my-11">


            <!-- modal Input Reading -->


            <div id="inputRead" class=" flex hidden p-6  px-30 rounded-lg  bg-white text-black right-6 top-20 z-100 shadow-2xl ">
                <section class="lg:pb-10">
                    <fieldset class="border-2 border-blue-600 w-full mx-auto md:w-1/2 pb-4 rounded-2xl px-5 ">
                        <legend class="font-bold text-xl text-center px-5 py-2">Input Reading </legend>
                        <div class="savesms bg-green-300 py-5 px-3 rounded-lg text-center font-medium hidden"> Data Save Sucessfully </div>
                        <form action="javascript:void(0)" method="" id="ipreadform" class="flex flex-col mx-auto w-full ">
                            @if(Session::has('success'))
                            <div class="text-green-600 py-4 px-2 border-1 border-green bg-green-100">{{Session::get('success')}}</div>
                            @endif
                            @if(Session::has('fail'))
                            <div class="text-red-600 py-4 px-2 border-1 border-red bg-red-100">{{Session::get('fail')}}</div>
                            @endif
                            @csrf
                            <div class="flex flex-col w-full px-5 mx-auto lg:flex-row lg:px-2 lg:space-x-5 md:justify-between">
                                <div class="mb-2 pt-3 rounded-r-2xl w-full">
                                    <p class="flex space-x-2 font-bold"><label for="Load Date" class="block mb-2 ml-3 font-bold">Station</label><label for="hash" class="text-red-600"> *</label></p>
                                    <input type="text" id="ip_apir_station" name="ip_apir_station" readonly value="APIR" class="bg-gray-100 w-full rounded-r-2xl p-3 focus:outline-none border-b-4 border-gray focus:border-blue-600 transition duration-500">
                                </div>
                            </div>

                            <div class="flex flex-col w-full px-5 mx-auto lg:flex-row lg:px-2 lg:space-x-5 md:justify-between">
                                <div class="mb-2 pt-3 rounded-r-2xl w-full">
                                    <p class="flex space-x-2 font-bold"><label for="Load Date" class="block mb-2 ml-3 font-bold">Load Date</label><label for="hash" class="text-red-600"> *</label></p>
                                    <input type="date" id="ip_load_date" name="ip_load_date" placeholder="Enter Load Reading" value="{{old('load_date')}}" class="bg-gray-100 w-full rounded-r-2xl p-3 focus:outline-none border-b-4 border-gray focus:border-blue-600 transition duration-500">
                                    <span class="text-red-600">@error ('ip_load_date') {{$message}} @enderror</span>
                                </div>
                                <div class="mb-2 pt-3 rounded-r-2xl w-full">
                                    <p class="flex space-x-2 font-bold"><label for="Select Hour" class="block mb-2 ml-3 font-bold"> Select Hour </label><label for="hash" class="text-red-600"> *</label></p>
                                    <select name="ip_hour" id="ip_hour" class="bg-gray-100 w-full rounded-r-2xl p-3 focus:outline-none border-b-4 border-gray focus:border-blue-600 transition duration-500" required>
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
                                    <span class="text-red-600">@error ('ip_hour') {{$message}} @enderror</span>
                                </div>
                            </div>

                            <div class="flex flex-col w-full px-5 mx-auto lg:flex-row lg:px-2 lg:space-x-5 md:justify-between">
                                <div class="mb-2 pt-3 rounded-r-2xl w-full">
                                    <p class="flex space-x-2 font-bold"><label for="Select Feeder" class="block mb-2 ml-3 font-bold"> Select Feeder </label><label for="hash" class="text-red-600"> *</label></p>
                                    <select name="ip_feeder" id="ip_feeder" class="bg-gray-100 w-full rounded-r-2xl p-3 focus:outline-none border-b-4 border-gray focus:border-blue-600 transition duration-500">
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
                                    <input type="number" id="ip_load_reading" name="ip_load_reading" placeholder="Enter Load Reading" value="{{old('load_reading')}}" class="bg-gray-100 w-full rounded-r-2xl p-3 focus:outline-none border-b-4 border-gray focus:border-blue-600 transition duration-500">
                                    <span class="text-red-600">@error ('load_reading') {{$message}} @enderror</span>
                                </div>
                            </div>

                            <div class="flex flex-col w-full px-5 mx-auto lg:flex-row lg:px-2 lg:space-x-5 md:justify-between">
                                <div class="mb-2 pt-3 rounded-r-2xl w-full">
                                    <p class="flex space-x-2 font-bold"><label for="Energy Reading" class="block mb-2 ml-3 font-bold">Energy Readings</label><label for="hash" class="text-red-600"> *</label></p>
                                    <input type="number" id="ip_energy_reading" name="ip_energy_reading" placeholder="Enter Reading" value="{{old('energy_readings')}}" class="bg-gray-100 w-full rounded-r-2xl p-3 focus:outline-none border-b-4 border-gray focus:border-blue-600 transition duration-500">
                                    <span class="text-red-600">@error ('energy_reading') {{$message}} @enderror</span>
                                </div>
                                <div class="mb-2 pt-10 rounded-r-2xl w-full">
                                    <button id="ip_reading" class="bg-gradient-to-l from-blue-600 to-blue-900 w-full mx-auto text-white font-bold py-3 rounded shadow-lg hover:shadow-xl transition duration-200" type="submit">
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
                        <form action="javascript:void(0)" method="" class="flex flex-col mx-auto w-full ">
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
                                    <input type="date" id="vw_ip_feeder_date" name="feeder_date" placeholder="Select Feeder Date" value="{{old('feeder_date')}}" class="bg-gray-100 w-full rounded-r-2xl p-3 focus:outline-none border-b-4 border-gray focus:border-blue-600 transition duration-500">
                                    <span class="text-red-600">@error ('feeder_date') {{$message}} @enderror</span>
                                </div>
                                <div class="mb-2 pt-3 rounded-r-2xl w-full">
                                    <p class="flex space-x-2 font-bold"><label for="Select Feeder" class="block mb-2 ml-3 font-bold"> Select Feeder </label><label for="hash" class="text-red-600"> *</label></p>
                                    <select name="feeder" id="vw_ip_feeder" class="bg-gray-100 w-full rounded-r-2xl p-3 focus:outline-none border-b-4 border-gray focus:border-blue-600 transition duration-500">
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
                                    <button id="vwipsubmit" class="bg-gradient-to-l from-blue-600 to-blue-900 w-full mx-auto text-white font-bold py-3 rounded shadow-lg hover:shadow-xl transition duration-200" type="submit">
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
                        <form action="javascript:void(0)" method="" id="ipoutagereading" class="flex flex-col mx-auto w-full ">
                            @if(Session::has('success'))
                            <div class="text-green-600 py-4 px-2 border-1 border-green bg-green-100">{{Session::get('success')}}</div>
                            @endif
                            @if(Session::has('fail'))
                            <div class="text-red-600 py-4 px-2 border-1 border-red bg-red-100">{{Session::get('fail')}}</div>
                            @endif
                            @csrf
                            <div class="flex flex-col w-full px-5 mx-auto lg:flex-row lg:px-2 lg:space-x-5 md:justify-between">
                                <div class="mb-2 pt-3 rounded-r-2xl w-full">
                                    <p class="flex space-x-2 font-bold"><label for="Load Date" class="block mb-2 ml-3 font-bold">Station</label><label for="hash" class="text-red-600"> *</label></p>
                                    <input type="text" id="ipout_apir_station" name="ipout_apir_station" readonly value="APIR" class="bg-gray-100 w-full rounded-r-2xl p-3 focus:outline-none border-b-4 border-gray focus:border-blue-600 transition duration-500">
                                </div>
                            </div>

                            <div class="flex flex-col w-full px-5 mx-auto lg:flex-row lg:px-2 lg:space-x-5 md:justify-between">
                                <div class="mb-2 pt-3 rounded-r-2xl w-full">
                                    <p class="flex space-x-2 font-bold"><label for="Outage Type" class="block mb-2 ml-3 font-bold">Outage Type</label><label for="hash" class="text-red-600"> *</label></p>
                                    <select name="ip_outage_type" id="ip_outage_type" class="bg-gray-100 w-full rounded-r-2xl p-3 focus:outline-none border-b-4 border-gray focus:border-blue-600 transition duration-500" required>
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
                                    <select name="ip_out_feeder" id="ip_out_feeder" class="bg-gray-100 w-full rounded-r-2xl p-3 focus:outline-none border-b-4 border-gray focus:border-blue-600 transition duration-500">
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
                                    <input type="date" id="ip_out_date_out" name="ip_out_date_out" placeholder="Enter Date Out" value="{{old('date_out')}}" class="bg-gray-100 w-full rounded-r-2xl p-3 focus:outline-none border-b-4 border-gray focus:border-blue-600 transition duration-500">
                                    <span class="text-red-600">@error ('date_out') {{$message}} @enderror</span>
                                </div>

                                <div class="mb-2 pt-3 rounded-r-2xl w-full">
                                    <p class="flex space-x-2 font-bold"><label for="Date In" class="block mb-2 ml-3 font-bold">Date In</label><label for="hash" class="text-red-600"> *</label></p>
                                    <input type="date" id="ip_out_date_in" name="ip_out_date_in" placeholder="Enter Date In" value="{{old('date_in')}}" class="bg-gray-100 w-full rounded-r-2xl p-3 focus:outline-none border-b-4 border-gray focus:border-blue-600 transition duration-500">
                                    <span class="text-red-600">@error ('date_in') {{$message}} @enderror</span>
                                </div>

                            </div>

                            <div class="flex flex-col w-full px-5 mx-auto lg:flex-row lg:px-2 lg:space-x-5 md:justify-between">

                                <div class="mb-2 pt-3 rounded-r-2xl w-full">
                                    <p class="flex space-x-2 font-bold"><label for="Time Out" class="block mb-2 ml-3 font-bold">Time Out</label><label for="hash" class="text-red-600"> *</label></p>
                                    <input type="time" id="ip_out_time_out" name="ip_out_time_out" placeholder="Enter Time Out" value="{{old('time_out')}}" class="bg-gray-100 w-full rounded-r-2xl p-3 focus:outline-none border-b-4 border-gray focus:border-blue-600 transition duration-500">
                                    <span class="text-red-600">@error ('time_out') {{$message}} @enderror</span>
                                </div>

                                <div class="mb-2 pt-3 rounded-r-2xl w-full">
                                    <p class="flex space-x-2 font-bold"><label for="Time In" class="block mb-2 ml-3 font-bold">Time In</label><label for="hash" class="text-red-600"> *</label></p>
                                    <input type="time" id="ip_out_time_in" name="ip_out_time_in" placeholder="Enter Time In" value="{{old('time_in')}}" class="bg-gray-100 w-full rounded-r-2xl p-3 focus:outline-none border-b-4 border-gray focus:border-blue-600 transition duration-500">
                                    <span class="text-red-600">@error ('time_in') {{$message}} @enderror</span>
                                </div>

                            </div>

                            <div class="flex flex-col w-full px-5 mx-auto lg:flex-row lg:px-2 lg:space-x-5 md:justify-between">
                                <div class="mb-2 pt-3 rounded-r-2xl w-full">
                                    <p class="flex space-x-2 font-bold"><label for="Load Loss" class="block mb-2 ml-3 font-bold">Load Loss (MW)</label><label for="hash" class="text-red-600"> *</label></p>
                                    <input type="number" id="ip_out_load_loss" name="ip_out_load_loss" placeholder="Enter Load" value="{{old('load_loss')}}" class="bg-gray-100 w-full rounded-r-2xl p-3 focus:outline-none border-b-4 border-gray focus:border-blue-600 transition duration-500">
                                    <span class="text-red-600">@error ('load_loss') {{$message}} @enderror</span>
                                </div>
                                <div class="mb-2 pt-10 rounded-r-2xl w-full">
                                    <button id="ipoutsubmit" class="bg-gradient-to-l from-blue-600 to-blue-900 w-full mx-auto text-white font-bold py-3 rounded shadow-lg hover:shadow-xl transition duration-200" type="submit">
                                        SAVE
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
                        <form action="javascript:void(0)" method="" class="flex flex-col mx-auto w-full ">
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
                                    <input type="date" id="vw_out_feeder_date" name="vw_out_feeder_date" placeholder="Select Feeder Date" value="" class="bg-gray-100 w-full rounded-r-2xl p-3 focus:outline-none border-b-4 border-gray focus:border-blue-600 transition duration-500">
                                    <span class="text-red-600">@error ('feeder_date') {{$message}} @enderror</span>
                                </div>
                                <div class="mb-2 pt-3 rounded-r-2xl w-full">
                                    <p class="flex space-x-2 font-bold"><label for="Select Feeder" class="block mb-2 ml-3 font-bold"> Select Feeder </label><label for="hash" class="text-red-600"> *</label></p>
                                    <select name="vw_out_feeder" id="vw_out_feeder" class="bg-gray-100 w-full rounded-r-2xl p-3 focus:outline-none border-b-4 border-gray focus:border-blue-600 transition duration-500">
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
                                    <button id="vwoutsubmit" class="bg-gradient-to-l from-blue-600 to-blue-900 w-full mx-auto text-white font-bold py-3 rounded shadow-lg hover:shadow-xl transition duration-200" type="submit">
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

<!-- Ajax CDN Link -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>

// Input Reading function
$('body').on('click', '#ip_reading', function(){
        
        var ip_apir_station = $('#ip_apir_station').val();
        var ip_load_date = $('#ip_load_date').val();
        var ip_hour = $('#ip_hour').val();
        var ip_feeder = $('#ip_feeder').val();
        var ip_load_reading = $('#ip_load_reading').val();
        var ip_energy_reading = $('#ip_energy_reading').val();
       
        // Ajax request send
        $.ajax({
            url : 'ip-apir-save-data/'+ip_apir_station+'/'+ip_load_date+'/'+ip_hour+'/'+ip_feeder+'/'+ip_load_reading+'/'+ip_energy_reading,
            method : 'get',
            success : function(request)
            {
                // show alert 
               alert("Secussfully Recorded");

                // Reset Form
                $('#ipreadform')[0].reset();            
            }
        })
    })



    
    // View Input Reading function
$('body').on('click', '#vwipsubmit', function(){
        var vw_ip_feeder_date = $('#vw_ip_feeder_date').val();
        var vw_ip_feeder = $('#vw_ip_feeder').val();
       
        alert(vw_ip_feeder);
    })

// Input Outage Reading function
    $('body').on('click', '#ipoutsubmit', function(){
        var ipout_apir_station = $('#ipout_apir_station').val();
        var ip_outage_type = $('#ip_outage_type').val();
        var ip_out_feeder = $('#ip_out_feeder').val();
        var ip_out_date_out = $('#ip_out_date_out').val();
        var ip_out_date_in = $('#ip_out_date_in').val();
        var ip_out_time_out = $('#ip_out_time_out').val();
        var ip_out_time_in = $('#ip_out_time_in').val();
        var ip_out_load_loss = $('#ip_out_load_loss').val();
      
        // Ajax request send
        $.ajax({
            url : 'ipout-apir-save-data/'+ipout_apir_station+'/'+ip_outage_type+'/'+ip_out_feeder+'/'+ip_out_date_out+'/'+ip_out_date_in+'/'+ip_out_time_out+'/'+ip_out_time_in+'/'+ip_out_load_loss,
            method : 'get',
            success : function(request)
            {
                // show alert 
               alert("Secussfully Recorded");
               
                // Reset Form
                $('#ipoutagereading')[0].reset();            
            }
        })        
    })

// View Outage Reading function
    $('body').on('click', '#vwoutsubmit', function(){
        var vw_out_feeder_date = $('#vw_out_feeder_date').val();
        var vw_out_feeder = $('#vw_out_feeder').val();
       
        alert(vw_out_feeder_date);
    })
</script>