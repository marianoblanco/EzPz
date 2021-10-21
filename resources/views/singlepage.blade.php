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
        <!-- star code -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Marino</title>
        <!-- new font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Qahiri&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600&family=Qahiri&display=swap" rel="stylesheet">


    </head>
    <body class="antialiased text-yellow-900 text-opacity-90">
        <div class="px-40 font-marin2 mb-20 bg-opacity-25 bg-center" style="background-image: url(/images/marinlogo.webp)">
            <!-- free shipping -->
            <a href="welcome">back to main</a>
            <div class="flex justify-center w-full py-5">
                <p class="text-lg">Free shipping for you gois</p>
            </div>

            <!-- nav bar -->
            <div class="flex container justify-between py-5 w-full border-t-2 border-b-2 text-2xl mb-9">
                <!-- left part of the page -->
                <div class="justify-items-start">
                    <h1>Marin bikes</h1>
                </div>

                <!-- div with list, it's also in the center--> 
                <div class="justify-items-center ml-20">
                    <ul class="flex">
                        <li class="px-2">Bike Care</li class="px-5">
                        <li class="px-2">Bike Parts</li class="px-5">
                        <li class="px-2">Bike Apparel</li class="px-5">
                        <li class="px-2">All about the road</li class="px-5">
                    </ul>
                </div>

                <!-- div at the right part--> 
                <div class="justify-items-end">
                    <p class="px-3 rounded-full bg-gray-800 text-white">ADD to CART</p>
                </div>
            </div>

            <!-- small div with review -->
            <div class="flex justify-between h-full w-full px-7 mt-96">

                <div class="flex items-end">
                     <div class="pr-5">
                        <span class="fa fa-star checked pt-1"></span>
                        <span class="fa fa-star checked pt-1"></span>
                        <span class="fa fa-star checked pt-1"></span>
                        <span class="fa fa-star pt-1"></span>
                        <span class="fa fa-star pt-1"></span>
                    </div>
 
                    <p class="pl-5">2 Reviews</p>
                </div>

                <div class="w-1/3">
                    <img src="" alt="">
                </div>

            </div>

            <!-- div with thinga ma jiggers -->
            <div class="w-full flex justify-between mx-5 pb-20">
                <!-- div at the left -->
                <div class="w-1/3">
                    <p class="py-5 border-b-2 border-blac">
                        Marin Nicasio Plus
                    </p>

                    <div class="flex py-2 border-b-2 justify-between">
                        <!-- Frame --> 
                        <div class="">
                        Frame Material 
                        </div>
                        <div>
                        Carbon Fibre
                        </div>
                    </div>
                    <div class="flex py-2 border-b-2 justify-between">
                        <!-- Group Set --> 
                        <div>
                        Group Set
                        </div>
                        <div>
                        Shimano XTR
                        </div>
                    </div>
                    <div class="flex py-2 border-b-2 justify-between">
                        <!-- Wheels --> 
                        <div>
                        Wheelset 
                        </div>
                        <div>
                        Shimano 3xl
                        </div>
                    </div>
                </div>

                <!-- div at the right -->
                <div class="w-1/3 border-2 border-gray-700 p-2 text-center rounded-3xl">   
                    <div class="flex px-12">
                        <p class="line-through py-5 text-2xl">$100,000</p>
                        <p class="text-xl py-6 pl-5">$80,000</p>
                    </div>
                    <div class="flex justify-around text-2xl px-4">
                        <!-- counter practice -->
                        <button id="increment" class=> - </button>
                        <div id="number"> 0 </div>
                        <button id="decrement"> + </button>
                    </div>
                    
                    <div class="flex w-full justify-center mt-5 bg-gray-600 text-white border-0 rounded-full py-3">
                    <h1 class="">ADD TO CART</h1>
                    </div>
                </div>
            </div>
            
            <!--description --> 
            <div class="flex justify-between text-3xl align-middle border-t-2 border-b-2 py-5">
                <!-- this should be big -->
                <h1 class=""> Description </h1>
                <div id="dropdown" class=""> + </div>
            </div>
            
            <!--description --> 
            <div class="flex justify-between text-3xl align-middle border-b-2 py-5">
                <!-- this should be big -->
                <h1 class=""> How to Use </h1>
                <div id="dropdown" class=""> + </div>

            </div>

        </div>
        
    </body>
</html>
