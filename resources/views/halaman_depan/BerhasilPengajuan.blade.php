@extends('layouts.FrontPage')
@section('template')

<div class="container mx-auto flex flex-wrap py-6">

    <!-- Post Section -->
    
           
        
    <section class="w-full flex flex-col items-center px-3">
        <div class="w-full flex justify-center text-center md:text-left md:flex-row shadow bg-white mt-10 mb-10 p-6">
            <a href="/" class="text-center mb-32">
                <p class="flex justify-center"><img src="{{ asset('assets/img/ceklis-removebg-preview 1.png') }}" alt="Camera"></p>
                <h1 class="text-green-700 text-3xl  font-semibold uppercase md:text-5xl mb-10"> Terima kasih telah mengajukan penelitian di Kawasan Konservasi Penyu Pantai Pangumbahan. Untuk informasi selanjutnya, silahkan cek email yang didaftarkan secara berkala. </span></h1>
                <button class="w-72 h-20 mt-4 px-4 text-2xl py-2 bg-indigo-500 text-dark text-sm uppercase font-medium rounded focus:outline-none focus:bg-blue-500">Kembali ke Home</button>
            </a>
        </div>   
        
    </section>
  
    <!-- Sidebar Section -->
    
  
</div>
@endsection