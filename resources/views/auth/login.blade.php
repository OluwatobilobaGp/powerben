<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,500&display=swap" rel="stylesheet">
    <title>Index Login Page</title>
</head>

<body class="bg-gradient-to-r from-blue-600 to-blue-900 min-h-screen pt10 md:pt-20 pb-6 px-2 md:px-0">
    <main class="flex  mx-auto w-3/4 ">

        <section class="hidden mt-4 py-auto flex-initial max-w-lg  w-full shadow-2xl rounded-l-3xl bg-cover bg-center md:block" id="slide-d">
            <div class="flex flex-col text-center items-center mx-10 my-20 py-10 rounded-2xl">
            </div>
        </section>



        <section class="mt-4 flex-initial p-10 bg-white max-w-lg mx-auto w-full shadow-2xl rounded-r-3xl">

            <!-- <img src="{{asset('./images/logo.png')}}" alt="" class="mx-auto" srcset=""> -->
            <p class="text-4xl  text-center">Welcome to Power House</p>
            <p class="text-gray-500 pt-2 text-center">Log in to your Account.</p>

            <section class="mt-7">
                <form action="{{route('login-user')}}" method="post" class="flex flex-col">
                    @if(Session::has('success'))
                    <div class="text-green-600 py-4 px-2">{{Session::get('success')}}</div>
                    @endif
                    @if(Session::has('fail'))
                    <div class="text-red-600 py-4 px-2">{{Session::get('fail')}}</div>
                    @endif
                    @csrf
                    <div class="mb-6 pt-3 rounded-r-2xl bg-gray-100">
                        <label for="E-mail" class="block mb-2 ml-3">Username</label>
                        <input type="text" id="email" name="email" value="{{old('email')}}" class="bg-gray-100 w-full rounded-r-2xl p-3 focus:outline-none border-b-4 border-gray focus:border-blue-900 transition duration-500">
                        <span class="text-red-600">@error ('email') {{$message}} @enderror</span>
                    </div>

                    <div class="mb-6 pt-3 rounded-r-2xl bg-gray-100">
                        <label for="Password" class="block mb-2 ml-3">Password</label>
                        <input type="password" id="password" name="password" class="bg-gray-100 w-full rounded-r-2xl p-3 focus:outline-none border-b-4 border-gray focus:border-blue-900 transition duration-500">
                        <span class="text-red-600">@error ('password') {{$message}} @enderror</span>
                    </div>

                    <div class="mb-6 pt-3 rounded-r-2xl bg-gray-100">
                        <div class="captcha flex space-x-4 items-center justify-center ">
                            <span class="ml-3 mr-3"> {!! captcha_img() !!} </span>
                            <button type="button" class="bg-gradient-to-l from-blue-600 to-blue-900 text-white mr-3 font-bold p-2 mx-4 rounded" id="reload">  &#x21bb; </button>
                        </div>
                            <input type="text" id="captcha" name="captcha" class="bg-gray-100 w-full rounded-r-2xl p-3 focus:outline-none border-b-4 border-gray focus:border-blue-900 transition duration-500">
                    </div>

                    <div class="flex justify-end">
                        <a href="javascript:viod(0)" class="text-sm text-blue-600 font-bold hover:text-blue-500 hover:underline mb-6">Forgot your
                            Password?</a>
                    </div>



                    <button class="bg-gradient-to-l from-blue-600 to-blue-900 text-white font-bold py-3 rounded shadow-lg hover:shadow-xl transition duration-200" type="submit">Sign In
                    </button>
                    <!-- <button class="bg-cyan-700 text-red-500 font-bold py-3 rounded shadow-lg"> sign out</button> -->


                    <div class="flex justify-center">
                        <a href="registration" class="text-sm text-blue-600 font-bold hover:text-blue-500 hover:underline mt-1">Don't you have an
                            accout? Sign Up
                        </a>
                    </div>

                </form>
            </section>

        </section>
    </main>

    <footer>
        <div class="text-white text-center py-2 text-sm">
            <span>© 2023 </span>
            <span class="font-bold">Power Holding Management </span>
            <span>Designed by </span>
            <span><a href="javascript:void(0)" class="font-bold">ASGP Glorious Tech (Oluwatobiloba Asaolu)</a></span>
        </div>
    </footer>
</body>
<script>

    $('#reload').click(function(){
       $.ajax({
            type:'GET',
            url:'reload-captcha',
            success: function(data){
                $(".captcha span").html(data.captcha)
            }
       });
    });

</script>
<script src="{{asset('./js/script.js')}}"></script>
</html>