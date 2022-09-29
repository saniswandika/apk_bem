<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konservasi Penyu Pantai Pangumbahan</title>
    <meta name="author" content="David Grzyb">
    <meta name="description" content="">

    <!-- Tailwind -->
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.7/dist/flowbite.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
    <style>
        @import url('<https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Roboto&display=swap');

        .font-family-montserrat {
            font-family: montserrat;
        }
    </style>

    <!-- AlpineJS -->
    <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/style.css') }}">
    <link href=" {{ asset('/css/app.css') }}" rel="stylesheet">
    


    
    <!-- Font Awesome -->
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
</head>


<body class="white font-montserrat" style="background: #627D98;">

    <!-- Top Bar Nav -->
 

    <!-- Text Header -->
    <header>
    <nav class="bg-white shadow" style="background: #627D98">
        <div class="container mx-auto px-6 py-3 ">
            <div class="md:flex md:items-center md:justify-between">
                <div class="flex justify-between items-center">
                    <div class="text-xl font-semibold text-gray-700">
                        <a href="/" class="text-gray-800 text-xl font-bold hover:text-gray-700 md:text-base text-white">PUSAT KONSERVASI PENYU PANTAI PANGUMBAHAN</a>
                    </div>

                    
                </div>

                <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
                <div class="hidden -mx-4 md:flex md:items-center text-white">
                    <a href="/" class="block mx-4 mt-2 md:mt-0 text-sm  text-white capitalize hover:text-blue-600">Home</a>
                    <a href="/tentangkami" class="block mx-4 mt-2 md:mt-0 text-sm  text-white capitalize hover:text-blue-600">Tentang Kami</a>
                    <a href="/" class="block mx-4 mt-2 md:mt-0 text-sm  text-white capitalize hover:text-blue-600">kontak</a>
                    <a href="/petalokasi" class="block mx-4 mt-2 md:mt-0 text-sm  text-white capitalize hover:text-blue-600">Peta Lokasi</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="w-full bg-cover bg-center" style="height:32rem; background-image: url('{{ asset('assets/img/penyubac.jpg')}}');">
        <div class="flex items-center justify-center h-full w-full bg-gray-900 bg-opacity-50">
            <a href="/login" class="text-center mb-32">
                <h1 class="text-white text-3xl  font-semibold uppercase md:text-5xl">Pusat Konservasi Penyu <br>Pantai pangumbahan </span></h1>
                <button class="mt-4 px-4 py-2 bg-gray-300 text-dark text-sm uppercase font-medium rounded focus:outline-none focus:bg-blue-500">Daftar Masuk kawasan</button>
            </a>
        </div>
    </div>
</header>
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif  
    <!-- Topic Nav -->
    @yield('template')


    <div class="w-full" style="background: #627D98;">
        <div class="flex flex-wrap text-center text-white" >
                <!-- ABOUT COLUMN -->

                <div class="w-full md:w-1/2 p-5 md:text-left" >
                        <div class="my-6 ml-3 text-xl font-semibold">
                            
                            <a href="" class="text-4xl text-stone-800" ><i class="fa-brands fa-instagram-square"></i></i></a>
                            <a href="" class="text-4xl text-stone-800" ><i class="fa-brands fa-twitter-square"></i></a>
                            <a href="" class="text-4xl text-stone-800" ><i class="fa-brands fa-facebook"></i></a>
                            
                        </div>
                    
                            <table class="min-w-full">
                                    <tbody>
                                          <tr class="border-b">
                                                <td class="py-1 px-4 whitespace-nowrap text-3xl font-medium text-gray-900">
                                                  <i class="fas fa-map-marker-alt"></i>
                                                </td>
                                                <td class="text-xl text-left text-gray-900 font-light px-2 py-4">
                                                    Pantai Pangumbahan Gunungbatu Kec. Ciracap Kabupaten Sukabumi, Jawa Barat
                                                </td>
                                                            
                                            </tr>
                                          <tr class="border-b">
                                                <td class="py-1 px-4 whitespace-nowrap text-3xl font-medium text-gray-900">
                                                        <i class="fas fa-clock"></i>
                                                </td>
                                                <td class="text-xl text-left text-gray-900 font-light px-2 py-4">
                                                    Jam Operasional 08:00 - 18:00 
                                                </td>                                                
                                            </tr>
                                            <tr class="border-b">
                                                <td class="py-1 px-4 whitespace-nowrap text-3xl font-medium text-gray-900">
                                                    <i class="fas fa-phone-alt"></i>
                                                </td>
                                                <td class="text-xl text-left text-gray-900 font-light px-2 py-4">
                                                    0881022649160
                                                </td>
                                            </tr>
                                            <tr class="border-b">
                                                <td class="py-1 px-4 whitespace-nowrap text-3xl font-medium text-gray-900">
                                                    <i class="fas fa-envelope"></i>
                                                </td>
                                                <td class="text-xl text-left text-gray-900 font-light px-2 py-4">
                                                    Konservasipenyu@gmail.com
                                                </td>
                                            </tr>                                                            
                                       </tbody>
                                </table>                
                    </div>
                         <!-- FORM COLUMN -->

                        <div class="w-full md:w-1/2 p-5">
                            <div class="mt-12 text-xl font-semibold"></div>
                               
                                    <div class="flex flex-col">
                                        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                                            <div class="py-1 inline-block min-w-full sm:px-6 lg:px-8">
                                                <div class="overflow-hidden mt-12 pr-4">
                                                    
                                                    <div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="333" id="gmap_canvas" src="https://maps.google.com/maps?q=pantai%20pangumbah&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://fmovies-online.net"></a><br><style>.mapouter{position:relative;text-align:right;height:333px;width:600px;}</style><a href="https://www.embedgooglemap.net">google maps code</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:333px;width:600px;}</style></div></div>
                   
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                
                            </div>
                        </div>
             </div>
        </div>

     </div> 
    <script src="../path/to/flowbite/dist/flowbite.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
</body>
</html>