<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>App con Vuex</title>
</head>
<body>

    
         <div id="app">
            <div class="wrapper">
                 <header class="text-gray-700 body-font">
                
                        <!-- <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
                            <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" viewBox="0 0 24 24">
                                    <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
                                </svg>
                                <span class="ml-3 text-xl">Shopping Cart</span>
                            </a>
                            <nav class="md:mr-auto md:ml-4 md:py-1 md:pl-4 md:border-l md:border-gray-400	flex flex-wrap items-center text-base justify-center">
                                <router-link
                                    class="mr-5 hover:text-gray-900"
                                    :to="{name: 'products.index'}"
                                >
                                    Products
                                </router-link>
                            </nav>
                            <router-link
                                class="inline-flex items-center bg-gray-200 border-0 py-1 px-3 focus:outline-none hover:bg-gray-300 rounded text-base mt-4 md:mt-0"
                                :to="{name: 'order.checkout'}"
                            >
                                Checkout<span class="inline-block ml-1" v-text="'(' + $store.state.cart.length + ' items)'"></span>
                            </router-link>
                        </div> -->
                </header>
                </div>
               <router-view></router-view>
         </div>
   
    <script src="{{asset(mix('js/app.js'))}}"></script>
    
</body>
</html>