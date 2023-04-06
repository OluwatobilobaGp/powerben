<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,500&display=swap" rel="stylesheet">
    <title>Index Login Page</title>

</head>

<body class="body-bg min-h-screen pt10 md:pt-20 pb-6 px-2 md:px-0">
    <main class="flex  mx-auto w-3/4 ">

        <section class="hidden mt-4 flex-initial p-10 bg-white max-w-lg mx-auto  w-full shadow-2xl rounded-l-3xl bg-cover bg-center md:block" style="background-image: url(./images/earphone-bg.jpg);">
            <p class="text-4xl  text-center">We are Exclusive</p>
            <p class="text-gray-500 pt-2 text-center">Be Part of Us </p>
        </section>



        <section class="mt-4 flex-initial p-10 bg-white max-w-lg mx-auto w-full shadow-2xl rounded-r-3xl">

            <img src="./images/logo.png" alt="" class="mx-auto" srcset="">
            <p class="text-4xl  text-center">Welcome</p>
            <p class="text-gray-500 pt-2 text-center">Sign Up to your Account.</p>

            <section class="mt-7">
                <form action="{{route('register-user')}}" method="post" class="flex flex-col">
                    @if(Session::has('success'))
                    <div class="text-green-600 py-4 px-2">{{Session::get('success')}}</div>
                    @endif
                    @if(Session::has('fail'))
                    <div class="text-red-600 py-4 px-2">{{Session::get('fail')}}</div>
                    @endif
                    @csrf
                    <div class="mb-2 pt-3 rounded-r-2xl">
                        <label for="Name" class="block mb-2 ml-3">Name</label>
                        <input type="text" id="name" name="name" placeholder="Enter Full Name" value="{{old('name')}}" class="bg-gray-100 w-full rounded-r-2xl p-3 focus:outline-none border-b-4 border-gray focus:border-pink-600 transition duration-500">
                        <span class="text-red-600">@error ('name') {{$message}} @enderror</span>
                    </div>

                    <div class="mb-2 pt-3 rounded-r-2xl">
                        <label for="E-mail" class="block mb-2 ml-3">Email</label>
                        <input type="email" id="email" name="email" placeholder="Enter Email" value="{{old('email')}}" class="bg-gray-100 w-full rounded-r-2xl p-3 focus:outline-none border-b-4 border-gray focus:border-pink-600 transition duration-500">
                        <span class="text-red-600">@error ('email') {{$message}} @enderror</span>
                    </div>

                    <div class="mb-2 pt-3 rounded-r-2xl">
                        <label for="Password" class="block mb-2 ml-3">Password</label>
                        <input type="password" id="password" name="password" placeholder="Enter Password" class="bg-gray-100 w-full rounded-r-2xl p-3 focus:outline-none border-b-4 border-gray focus:border-pink-600 transition duration-500">
                        <span class="text-red-600">@error ('password') {{$message}} @enderror</span>
                    </div>

                    <div class="text-center pb-2">
                        <input type="checkbox" name="condition" id="" value="agreed">
                        Agree to our <a href="" class="text-pink-600 hover:text-pink-700 hover:underline mb-6">Terms & Condition</a>
                    </div>

                    <button class="bg-gradient-to-l from-pink-600 to-red-600 text-white font-bold py-3 rounded shadow-lg hover:shadow-xl transition duration-200" type="submit"> Register
                    </button>

                    <div class="flex justify-center">
                        <a href="login" class="text-sm text-pink-600 hover:text-pink-700 hover:underline mt-1">Do you have an
                            accout? Login Here
                        </a>
                    </div>

                </form>
            </section>

        </section>
    </main>

    <footer>
        <div class="text-white text-center py-2 text-sm">
            <span>© 2022 </span>
            <span class="font-bold">Life House Media </span>
            <span>Designed by </span>
            <span><a href="javascript:void(0)" class="font-bold">ASGP Glorious Tech</a></span>
        </div>

    </footer>


    <!-- <header class="bg-white max-w-lg mx-auto">
        <a href="javascript:viod(0)" target="_blank" rel="noopener noreferrer">
            <h1 class="">StartUp</h1>
        </a>
    </header> -->


    <!-- <main class="">

        <section>
            <h3 class="">Welcome to Startup</h3>
            <p class="">Sign in to your Account.</p>
        </section>

        <section class="">
            <form action="" class="">
                <div>
                    <label for="" class="email"></label>
                    <input type="text" id="email" class="">
                </div>

                <div>
                    <label for="" class="email"></label>
                    <input type="text" id="email" class="">
                </div>

                <div>
                    <a href="" class=""></a>
                </div>
                <button class="" type="submit">Sign In</button>
            </form>
        </section>
        Life House Media


    </main> -->

</body>

</html>