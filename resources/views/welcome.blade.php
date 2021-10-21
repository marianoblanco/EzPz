<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Festive&family=Lobster&display=swap" rel="stylesheet">
        <title>Marino</title>

    </head>
    <body class="antialiased">
        <div class = "px-10 border-4 m-10 mx-35 rounded-2xl">
            <!-- 3 main divs -->
            
            <div class="flex w-full pt-10 pb-5 font-festive text-7xl">
                <!-- first div with 1 big box and 2 small boxes -->
                <div class="w-1/2">
                    <h1 class='w-full pl-5 pt-5'>Le bikes Marin Bikes</h1>
                </div>

                <div class="w-1/4">
                <img src="/images/bike1.jpeg" alt="owa">
                </div>

                <div class="w-1/4">
                <img src="/images/bike2.jpeg" alt="owa">
                </div>
            </div>
                

            <div class="flex w-full pb-5">
                <!-- second div with 4 small boxes -->
                <div class="pl-5 w-1/4 font-lobster">
                <h1 class="text-xl"> See some gravel ang mtb bikes</h1>
                </div>

                <div class="w-1/4">
                <img src="/images/bike3.jpeg" alt="owa">
                </div>

                <div class="w-1/4">
                <img src="/images/bike4.jpeg" alt="owa">
                </div>

                <div class="w-1/4">
                <img src="/images/bike5.jpeg" alt="owa">
                </div>
            </div>

            <div class="w-full flex">
                <!-- third div with 2 more divs -->
                <div class="w-1/2">
                    <div class="flex w-full pb-5">
                        <!-- div with 2 pics -->
                        <div class="w-1/2">
                        <img src="/images/bike5.jpeg" alt="owa">
                        </div>

                        <div class="w-1/2">
                        <img src="/images/bike5.jpeg" alt="owa">
                        </div>
                    </div>

                    <div class="flex w-full">
                        <!-- div with 1 empty and 1 pic -->
                        <div class="w-1/2">
                        <img src="" alt="">
                        </div>

                        <div class="w-1/2">
                        <img src="/images/bike5.jpeg" alt="owa">
                        </div>
                    </div>
                </div>

                <div class="w-1/2 container">
                    <!--this div has a big picture -->
                    <a href="singlepage"><img class="w-full h-full object-fill border-0 rounded-2xl" src="/images/bikebike.jpeg" alt="owa"></a>
                </div>

            </div>


            <div class="footer pt-10 justify-center text-center pb-10 font-lobster">
                <!-- footer -->
                <h2 class="text-xl" >Made By Marino Blanco</h2>

            </div>
        </div>
        
    </body>
</html>
