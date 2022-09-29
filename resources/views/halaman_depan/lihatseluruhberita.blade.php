@extends('layouts.FrontPage')
@section('template')

<div class="container mx-auto flex flex-wrap py-6">

        <!-- Post Section -->
        <section class="w-full md:w-2/3 flex flex-col items-center px-3">

            <article class="flex flex-col shadow my-4">
                <!-- Article Image -->
                <a href="#" class="hover:opacity-75">
                    <img src="{{ url('gambar_image/' . $berita->gambar_image) }}">
                </a>
                <div class="bg-white flex flex-col justify-start p-6">
                    <a href="#" class="text-3xl font-bold hover:text-gray-700 pb-4">{{$berita->judul_berita }}</a>
                    <p href="#" class="text-sm pb-8">
                        By <a href="#" class="font-semibold hover:text-gray-800">Admin Konservasi</a>, Published on {{$berita->created_at->format('d-m-Y') }}
                    </p>
                    
                    <p class="text-gray-700 text-base mb-4">
                      {!! $berita->deskripsi_berita !!}          
                      </p>               
                 </div>
            </article>

           

            <div class="w-full flex flex-col text-center md:text-left md:flex-row shadow bg-white mt-10 mb-10 p-6">
                <div class="w-full md:w-1/5 flex justify-center md:justify-start pb-4">
                    <img src="https://source.unsplash.com/collection/1346951/150x150?sig=1" class="rounded-full shadow h-32 w-32">
                </div>
                <div class="flex-1 flex flex-col justify-center md:justify-start mt-10">
                    <p class="font-semibold text-2xl">Admin Konservasi</p>
                    <p class="pt-2">Konservasi Penyu Pantai Pangumbahan, Sukabumi </p>
                </div>
            </div>

        </section>

        <!-- Sidebar Section -->
        <aside class="w-full md:w-1/3 flex flex-col items-center px-3">

         <div class="w-full bg-white shadow flex flex-col my-4 p-6">
                <p class="text-xl font-semibold pb-5">Berita Penyu Pangumbuhan</p>
                @foreach ($data as $post)
                <div class="flex justify-center mt-5">
                  <div class="rounded-lg shadow-lg bg-white max-w-sm">
                    <a href="{{ route('berita.show' , $post->id) }}" data-mdb-ripple="true" data-mdb-ripple-color="light">
                      {{-- <img class="rounded-t-lg h-14" src="{{ url('gambar_image/' . $post->gambar_image) }}" alt=""> --}}
                      <img class="rounded-t-lg" src="{{ url('gambar_image/' . $post->gambar_image) }}" alt=""/>
                    </a>
                    <div class="p-6">
                      <h5 class="text-gray-900 text-xl font-medium mb-2">{{ $post->judul_berita }}</h5>
                      <p class="text-gray-700 text-base mb-4">
                      {!! Str::limit($post->deskripsi_berita , 250) !!}          
                      </p>
                      <div class="flex items-center justify-end mt-10">
                        <button type="button" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Lihat Berita</button>
                     </div> 
                    </div>
                  </div>
                </div>
                @endforeach                         
            </div>

        </aside>

    </div>

@endsection
