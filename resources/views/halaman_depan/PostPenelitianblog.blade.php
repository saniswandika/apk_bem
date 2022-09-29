@extends('layouts.FrontPage')
@section('template')

<div class="container mx-auto flex flex-wrap py-6">

    <!-- Post Section -->
    <section class="w-full flex flex-col items-center px-3">
        <div class="w-full flex flex-col text-center md:text-left md:flex-row shadow bg-white mt-10 mb-10 p-6"> 
                    <div class="sm:flex flex-cols-2 py-3"> 
                        <div class="my-11">
                            <div class="bg-white flex flex-col text-justify p-2">
                                <a href="" class="text-3xl text-center font-bold hover:text-gray-700 pb-4">
                                   DAFTAR PENELITIAN
                                </a>
                                    <p href="#" class="text-md pb-3">
                                        <a href="#" class="font-semibold hover:text-gray-800">Judul     :   {{ $post->judul_penelitian }} </a>
                                    </p>
                                 
                                   

                                    <p href="#" class="text-md pb-3">
                                        <a href="#" class="font-semibold hover:text-gray-800">Peneliti  : {{ $post->nama_penelitian }}</a>
                                    </p>
                                    <p href="#" class="text-md pb-3">
                                         <a href="#" class="font-semibold hover:text-gray-800">Tahun    : {{ $post->created_at->format('Y')  }}</a>
                                    </p>
                                <h1 class="text-2xl font-bold pb-3 text-center">{{ $post->judul_penelitian}}</h1>
                                <p class="pb-3">      {!! $post->deskripsi_penelitian !!}</p>
                            </div>
                          </div>
                          <a href="/FormPengajuanPenelitian">
                                      <button  style="background: #627D98;" type="button" class="mb-36 w-full inline-block px-6 py-5 bg-blue-600 text-white font-medium text-xs leading-normal uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Ajukan Penelitian</button>                         
                         </a>     
                            <!-- <div class="md:w-full md:flex justify-end mt-11">
                                <div class="w-full md:w-2/2 flex flex-col items-center mb-10 ml-7" >
                                  <a href="FormPengajuanPenelitian">
                                      <button  style="background: #627D98;" type="button" class="mb-36 w-full inline-block px-6 py-5 bg-blue-600 text-white font-medium text-xs leading-normal uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Ajukan Penelitian</button>                         
                                        <form  method="POST" action="" enctype="multipart/form-data"class="bg-white text-white shadow-md rounded px-8 pt-6 pb-8 " style="background: #627D98;">
                                  </a>          
                                        <label class="block text-white text-sm font-bold mb-2" for="username">
                                            <p class="flex justify-center text-center whitespace-pre-line underline underline-offset-8 text-xl mb-5" >Cari Penelitian</p>
                                        </label>
                                      <div class="mb-4">
                                        <label class=" text-white text-sm font-bold mb-2" for="username">
                                          Judul
                                        </label>
                                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Username">
                                      </div>
                                      <div class="mb-4">
                                        <label class="text-white text-sm font-bold mb-2" for="username">
                                          Object
                                        </label>
                                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder=" Object">
                                      </div>
                                      <div class="mb-4">
                                        <label class="text-white text-sm font-bold mb-2" for="username">
                                         Penelitian
                                        </label>
                                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Penelitian">
                                      </div>
    
                                      <div class="mb-4 text-white">
                                        <label class="block text-white text-sm font-bold mb-2 " for="username">
                                          Tahun
                                        </label>
                                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Tahun">
                                      </div>
                                      <div class="flex items-center justify-end ">
                                        <button class="w-full bg-blue-500 hover:bg-blue-700 text-white  py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                                           Search
                                        </button>
                                        
                                      </div>
                                    </form>       
                                  </div> -->
                            </div>              
                      </div>
                    </div>
                 </div>
    </section>
  </div>
@endsection