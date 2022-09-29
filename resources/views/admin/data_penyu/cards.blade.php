@extends('admin.layouts.admin')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/switchery/0.8.2/switchery.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/switchery/0.8.2/switchery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

        {{-- trix-editor --}}
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/trix.css') }}">
        <script type="text/javascript" src="{{ asset('assets/js/trix.js') }}"></script>
        {{-- flowbite --}}
        <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.1/dist/flowbite.min.css" />
        <script src="https://unpkg.com/flowbite@1.5.1/dist/flowbite.js"></script>
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/switchery/0.8.2/switchery.min.js"></script>


        <script>
        tailwind.config = {
            theme: {
            extend: {
                fontFamily: {
                sans: ['Inter', 'sans-serif'],
                },
            }
            }
        }
        </script>
     @if(session()->has('message'))
        
     
        <div id="toast-success" class="flex items-center px-6 mx-auto p-4 mb-4 mt-10 w-full max-w-xs text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800" role="alert">
            <div class="inline-flex flex-shrink-0 justify-center items-center w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                <span class="sr-only">Check icon</span>
            </div>
            <div class="ml-3 text-sm font-normal">{{ session()->get('message') }}</div>
            <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#toast-success" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </button>
        </div>
    

        @endif 
<div class="container px-6 mx-auto grid">
        <!-- Responsive cards -->
    <h4 class="mb-4 mt-10 text-lg font-semibold text-gray-600 dark:text-gray-300">
         Data Penyu
    </h4>
    <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
        <!-- Card -->
        <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                <div
                    class="p-3 mr-4  rounded-full dark:text-orange-100 dark:white">
                    <svg class="w-10 h-10" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                            width="569.342px" height="569.342px" viewBox="0 0 569.342 569.342" style="enable-background:new 0 0 569.342 569.342;"
                            xml:space="preserve">
                        <path d="M7.829,327.335c12.97-0.657,25.255-4.537,37.523-8.381c10.698-3.354,20.339-8.861,29.572-15.124
                            c8.213-5.569,15.765-11.738,20.828-20.575c3.635-6.345,7.715-12.437,11.718-18.564c0.571-0.873,2.093-2.052,2.672-1.823
                            c2.024,0.804,4.296,1.782,5.602,3.402c1.791,2.228,3.868,3.496,6.491,4.092c6.756,1.538,13.554,2.905,20.261,4.615
                            c1.64,0.42,3.798,1.583,4.361,2.958c1.877,4.59,5.476,5.365,9.694,5.52c9.253,0.339,18.511,0.719,27.76,1.171
                            c1.085,0.054,2.411,0.376,3.166,1.073c3.35,3.089,7.409,4.655,11.742,4.562c11.082-0.24,22.155-0.963,33.232-1.392
                            c1.061-0.04,2.395,0.348,3.174,1.024c2.244,1.963,4.447,2.905,7.654,2.529c10.2-1.195,19.804-4.549,29.499-7.589
                            c2.256-0.71,3.954-0.836,5.01,1.702c0.738,1.767,2.003,2.02,3.811,1.351c11.755-4.354,23.558-8.585,35.309-12.95
                            c1.697-0.629,2.79-0.404,3.672,1.126c1.411,2.448,2.848,4.876,4.251,7.327c0.967,1.689,1.938,3.379,2.823,5.112
                            c1.935,3.799,5.39,5.427,10.229,6.565c-2.606,3.606-4.822,6.523-6.874,9.551c-2.562,3.774-5.573,7.389-7.369,11.518
                            c-4.002,9.209-7.107,18.805-11.053,28.042c-7.735,18.124-15.858,36.084-23.7,54.162c-6.169,14.228-11.963,28.617-15.872,43.656
                            c-1.791,6.879-3.178,13.872-4.451,20.869c-0.547,2.999,0.453,3.913,3.538,3.949c4.594,0.049,9.025-1.053,12.681-3.798
                            c10.983-8.254,22.077-16.402,32.591-25.235c9.164-7.694,18.274-15.659,26.197-24.578c13.261-14.924,25.623-30.657,38.255-46.137
                            c13.129-16.091,23.035-33.811,26.977-54.483c1.032-5.423,1.946-10.796-0.522-16.071c-1.611-3.439-3.292-6.847-4.953-10.266
                            c-3.419-7.038-6.613-14.178-7.091-22.126c-0.314-5.198,1.641-9.629,6.491-11.804c3.428-1.533,6.36-3.594,9.07-5.936
                            c9.196,6.789,19.331,12.08,30.225,15.769c16.512,8.613,32.207,18.585,46.977,30.074c11.135,8.666,21.959,17.731,33.048,26.459
                            c1.347,1.061,3.905,2.048,5.08,1.452c1.232-0.624,2.007-3.199,2.016-4.925c0.012-2.46-0.53-5.047-1.412-7.36
                            c-3.312-8.731-6.585-17.495-10.392-26.014c-4.871-10.902-11.967-20.294-21.105-28.034c-9.074-7.683-18.246-15.247-27.418-22.812
                            c-0.041-0.032-0.102-0.049-0.146-0.077c-0.694-0.832-1.453-1.628-2.322-2.346c4.117-0.025,8.238-0.037,12.354-0.086
                            c4.97-0.058,10.021-0.645,14.896,0.012c11.652,1.571,23.198,0.833,34.7-0.828c8.074-1.167,16.251-2.395,23.982-4.851
                            c4.553-1.444,7.98-2.118,11.42,1.473c0.105,0.11,0.363,0.081,0.824,0.167c3.5-6.63,6.214-13.007,4.039-21.232
                            c-3.439-13.015-10.163-22.758-22.411-28.638c-9.226-4.427-18.924-6.572-29.087-6.939c-11.302-0.404-22.647-0.49-33.566-4.072
                            c-16.495-5.414-31.22-14.149-45.296-24.104c-12.117-8.568-24.206-17.201-38.43-22.061c-20.465-6.989-41.379-12.375-63.011-13.57
                            c-20.037-1.105-40.144-1.346-60.217-1.306c-15.52,0.029-31.032,1.453-46.067,5.614c-8.242,2.281-16.239,5.451-24.301,8.348
                            c-12.016,4.312-24.039,8.601-35.965,13.142c-16.585,6.312-32.583,13.93-48.323,22.118c-13.375,6.956-26.863,13.692-40.38,20.371
                            c-6.891,3.407-13.852,6.708-20.963,9.612c-4.696,1.918-5.692,3.256-3.986,8.079c0.163,0.461,0.372,0.905,0.551,1.358
                            c2.187,5.59,1.612,7.446-3.305,10.82c-0.8,0.551-1.559,1.162-2.334,1.754c-1.689,1.285-1.921,2.917-0.861,4.644
                            c0.706,1.146,1.587,2.215,2.542,3.17c4.757,4.753,9.596,9.425,14.345,14.187c3.117,3.125,6.136,6.348,9.192,9.522
                            c-1.412,0.73-2.803,1.257-3.978,2.089c-6.744,4.773-13.794,9.196-20.069,14.529c-15.872,13.492-30.229,28.494-42.661,45.259
                            c-4.859,6.553-9.074,13.379-9.865,21.841C-0.499,325.54,1.19,327.67,7.829,327.335z"/>
                    </svg>
                </div>
            <div>
                <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                    Penyu Naik
                </p>
                <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                    {{  $jml_penyu_naik  }}
                </p>
            </div>
        </div>
        <!-- Card -->
        <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
            <div
                class="p-3 mr-4 text-green-500 bg-white rounded-full dark:text-green-100 dark:bg-green-500">
                <img class="h-10 w-10"
                src="{{ asset('assets/img/menetas.png') }}"
                class="block w-full"
                alt="Camera">
            </div>
            <div>
                <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                    Penyu Bertelur
                </p>
                <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                    {{  $Penyu_bertelur  }}
                </p>
            </div>
        </div>
        <!-- Card -->
        <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
            <div
                class="p-3 mr-4 text-blue-500 bg-white rounded-full dark:text-blue-100 dark:bg-blue-500">
                <img
                src="{{ asset('assets/img/icons8-egg-30.png') }}"
                class="block w-full"
                alt="Camera">
                
            </div>
            <div>
                <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                    Telur Penyu
                </p>
                <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                   {{-- {{ $count}} --}}
                   {{  $visitor  }}
                </p>
            </div>
        </div>
        <!-- Card -->
        <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
            <div
                class="p-3 mr-4 text-teal-500 bg-teal-100 rounded-full dark:text-teal-100 dark:bg-teal-500">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z"
                        clip-rule="evenodd"></path>
                </svg>
            </div>
            <div>
                <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                   Tambah Penyu
                </p>
                <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                <button class="bg-yellow-500 text-white active:bg-yellow-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button"
                data-bs-toggle="modal" data-bs-target="#exampleModal" >
                    Tambah Penyu
              </button>
                </p>
            </div>
        </div>
    </div>
    <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
          id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog relative w-auto pointer-events-none">
            <div class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                    <div
                    class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                    
                            <h5 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalLabel"></h5>
                                <button type="button"
                                            class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                                            data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                        <div
                            class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500">
                            <i class="fa-solid fa-newspaper"></i>
                            
                        </div>
                        <div>
                            <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                                Tambah Data Penyu
                            </p>
                        </div>
                    </div>
                    <div class="modal-body relative p-4">
                        <div class="flex justify-center">
                            
                                <form action="{{ route('admin.cards.create') }}"  method="post" enctype="multipart/form-data" class="w-full max-w-lg">
                                    @csrf

                                        <div class="flex flex-wrap -mx-3 mb-6">
                                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                                <label  class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                                Jumlah Penyu Naik
                                                </label>
                                                <input class="appearance-none block w-full bg-gray-200 text-gray-700  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="number" name="jml_penyu_naik" placeholder="">
                                            </div>
                                        </div>
                                        <div class="flex flex-wrap -mx-3 mb-6">
                                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                                <label  class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                                Tanggal 
                                                </label>
                                                <input class="appearance-none block w-full bg-gray-200 text-gray-700  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="date" name="tanggal" placeholder="">
                                            </div>
                                        </div>
                                        <div class="flex flex-wrap -mx-3 mb-6">
                                            <div class="w-full px-3">
                                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                                                Penyu Bertelur
                                                </label>
                                                <input class="appearance-none block w-full bg-gray-200 text-gray-700  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="number"  name="penyu_bertelur" placeholder="">
                                            </div>
                                        </div>
                                        <div class="flex flex-wrap -mx-3 mb-6">
                                            <div class="w-full px-3">
                                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                                                    Telur Penyu
                                                </label>
                                                <input class="appearance-none block w-full bg-gray-200 text-gray-700  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" name="telur_penyu" type="number" placeholder="">
                                            </div>
                                        </div>
                                        <div class="flex flex-wrap -mx-3 mb-6">
                                            <div class="w-full px-3">
                                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                                                    Penyu Menetas
                                                </label>
                                            <input class="appearance-none block w-full bg-gray-200 text-gray-700  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" name="penyu_menetas" type="number" placeholder="">
                                            </div>
                                        </div>
                                        <div class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md mt-10">
                                            <button type="button" class="px-6
                                                py-2.5
                                                bg-purple-600
                                                text-white
                                                font-medium
                                                text-xs
                                                leading-tight
                                                uppercase
                                                rounded
                                                shadow-md
                                                hover:bg-purple-700 hover:shadow-lg
                                                focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0
                                                active:bg-purple-800 active:shadow-lg
                                                transition
                                                duration-150
                                                ease-in-out" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" id="toast-success" class="px-6
                                                py-2.5
                                                bg-blue-600
                                                text-white
                                                font-medium
                                                text-xs
                                                leading-tight
                                                uppercase
                                                rounded
                                                shadow-md
                                                hover:bg-blue-700 hover:shadow-lg
                                                focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
                                                active:bg-blue-800 active:shadow-lg
                                                transition
                                                duration-150
                                                ease-in-out
                                                ml-1">Save changes
                                            </button>
                                        </div>
                                    
                                </form>
                        </div>
                    </div>
             </div>
        </div>
    </div> 
    <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
        Table Data Penyu 
    </h4>
    <div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs">
        <div class="w-full overflow-x-auto">
            <table id="myTable" class="w-full whitespace-no-wrap">
                <thead>
                  
                            <tr
                                class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                <th class="px-4 py-3">No</th>
                                <th class="px-4 py-3">Tanggal</th>
                                <th class="px-4 py-3">Penyu Naik</th>
                                <th class="px-4 py-3">Penyu Bertelur</th>
                                <th class="px-4 py-3">Telur Penyu</th>
                                <th class="px-4 py-3">Penyu Menetas</th>
                                <th class="px-4 py-3">Action</th>
                            </tr>
                        </thead>
                        @php
                             $i = 1 
                        @endphp

                        <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                            @foreach ($data as $post)
                                <tr class="text-gray-700 dark:text-gray-400">
                                    
                                    <td class="px-4 py-3">
                                        {{ $i++ }} 
                                    </td>
                                    <td class="px-4 py-3 text-sm">
                                        {{ $post->tanggal->format('d/m/Y') }}
                                        {{-- {{ $post->tanggal->format('d-m-Y')  }} --}}
                                    </td>
                                    <td class="px-4 py-3 text-xs">
                                        <span
                                            class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                                            {{ $post->jml_penyu_naik }}
                                        </span>
                                    </td>
                                    <td class="px-4 py-3 text-sm">
                                        {{ $post->penyu_bertelur }}
                                    </td>
                                    <td class="px-4 py-3 text-sm">
                                        {{ $post->telur_penyu }}
                                    </td>
                                    <td class="px-4 py-3 text-sm">
                                       {{ $post->penyu_menetas}}
                                    </td>
                                    <td class="px-4 py-3">
                                        
                                        <div class="flex items-center space-x-4 text-sm">        
                                            <button
                                                class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                                aria-label="Delete"  data-bs-toggle="modal" data-bs-target="#EditModal{{ $post->id  }}">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach 
                </tbody>
            </table>
            @foreach ($data as $post)        
            <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto" id="EditModal{{ $post->id }}" tabindex="-1" aria-labelledby="exampleModalXlLabel" aria-modal="true" role="dialog">
                <div class="modal-dialog modal-xl relative w-auto pointer-events-none">
                <div class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                    <div class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                    <h5 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalXlLabel">
                        Edit berita
                    </h5>
                    <button type="button"
                        class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                        data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body relative p-4">
                        <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                            <div class="p-6 bg-white border-b border-gray-200">
                                
                                <form action="{{ route('admin.cards.update',[$post->id]) }}"  method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="flex flex-wrap -mx-3 mb-6">
                                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                            <label  class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                            Jumlah Penyu Naik
                                            </label>
                                            <input class="appearance-none block w-full bg-gray-200 text-gray-700  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="number" name="jml_penyu_naik" placeholder="" value="{{ old('jml_penyu_naik', $post->jml_penyu_naik) }}">
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap -mx-3 mb-6">
                                        <div class="w-full px-3">
                                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                                            Penyu Bertelur
                                            </label>
                                            <input class="appearance-none block w-full bg-gray-200 text-gray-700  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="number"  name="penyu_bertelur" placeholder="" value="{{ old('penyu_bertelur', $post->penyu_bertelur) }}">
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap -mx-3 mb-6">
                                        <div class="w-full px-3">
                                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                                                Telur Penyu
                                            </label>
                                            <input class="appearance-none block w-full bg-gray-200 text-gray-700  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" name="telur_penyu" type="number" placeholder="" value="{{ old('telur_penyu', $post->telur_penyu) }}">
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap -mx-3 mb-6">
                                        <div class="w-full px-3">
                                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                                                Penyu Menetas
                                            </label>
                                        <input class="appearance-none block w-full bg-gray-200 text-gray-700  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" name="penyu_menetas" type="number" placeholder="" value="{{ old('penyu_menetas', $post->penyu_menetas) }}">
                                        </div>
                                    </div>

                                        <div class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md mt-10">
                                            <button type="button" class="px-6
                                                py-2.5
                                                bg-purple-600
                                                text-white
                                                font-medium
                                                text-xs
                                                leading-tight
                                                uppercase
                                                rounded
                                                shadow-md
                                                hover:bg-purple-700 hover:shadow-lg
                                                focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0
                                                active:bg-purple-800 active:shadow-lg
                                                transition
                                                duration-150
                                                ease-in-out" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="px-6
                                                py-2.5
                                                bg-blue-600
                                                text-white
                                                font-medium
                                                text-xs
                                                leading-tight
                                                uppercase
                                                rounded
                                                shadow-md
                                                hover:bg-blue-700 hover:shadow-lg
                                                focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
                                                active:bg-blue-800 active:shadow-lg
                                                transition
                                                duration-150
                                                ease-in-out
                                                ml-1">Save changes
                                            </button>
                                    </div>
                                </form>
                                
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        @endforeach      
        </div>
    <!-- Cards with title -->
    
</div>
<script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script src="http://code.jquery.com/jquery.js"></script>

<script src="https://cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
<script>
let elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));

    elems.forEach(function(html) {
        let switchery = new Switchery(html,  { size: 'small' });
    });
</script>
<script>
    $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
{{-- <script>
    $(function() {
        $('#myTable').DataTable();
    });

            $(document).ready(function(){
    $('.js-switch').change(function () {
        let status = $(this).prop('checked') === true ? 1 : 0;
        let userId = $(this).data('id');
        $.ajax({
            type: "GET",
            dataType: "json",
            url: '{{ route('admin.updatestatus') }}',
            data: {'status': status, 'user_id': userId},
            success: function (data) {
                console.log(data.message);
            }
        });
    });
});
</script> --}}

<script>
tinymce.init({
selector:'textarea.description',
width: 900,
height: 300
});
</script>
@endsection