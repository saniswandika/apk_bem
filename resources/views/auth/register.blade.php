@extends('layouts.FrontPage')
@section('template')
<section class="w-full flex flex-col items-center px-3">
    <div class="w-full flex flex-col md:text-left md:flex-row shadow bg-white mt-10 mb-10 p-6">
        <div class="flex-1 flex flex-col justify-center md:justify-start">
            <div class="relative overflow-x-auto shadow-md sm:rounded-xxl px-8 rounded-lg" style="background: #f6f7f9;">
                
                <section>
                    <div class="card mb-4" style="margin: 2rem 4rem;">
                        <div class="card-body">
                          <div class="my-5">  
                                    <header class="mb-4">
                                        <!-- Post title-->
                                        <h2 class="fw-bolder font-bold " style="text-align: center; font-family:inter">PERATURAN MASUK KAWASAN</h2>
                                        <!-- Post meta content-->
                                     </header>

                                     <p>Harga Tiket Masuk Kawasan</p>
                                     <p> Weekdays : Rp. 10.000</p>
                                     <p> Weekend : Rp. 10.000</p>

                                     <section class="mt-10">
                                        <div class="offset-3 col-6 "  style="font-family:inter">
                                            <table class="mr-2">
                                            
                                                <tr>
                                                    <td >1. Wajib menunjukan E-Tiket (Akan di dapatkan setelah melakukan pendaftaran) </td>
                                              
                                                   
                                                </tr>
                                                <tr>
                                                    <td >2. Dilarang membawa senjata tajam, senjata api, minuman beralkohol, dan benda lainnya yang dapat merugikan.</td>
                                                    
                                               
                                                </tr>
                                                <tr>
                                                    <td >3.Dilarang mengganggu satwa di dalam Kawasan Konservasi</td>
                                                    
                
                                                 </tr>
                                                <tr>
                                                    <td >4.Dilarang membawa pulang satwa di dalam Kawasan Konservasi</td>
                                                </tr>
                                                <tr>
                                                    <td >5.Diarang merusak, serta merubah fauna yang terdapat pada Kawasan konservasi.</td>
                                                </tr>
                                                <tr>
                                                    <td >6.Dilarang merusak, mengotori, serta dapat menjaga fasilitas yang terdapat pada Kawasan Konservasi</td> 
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td >7.Mampu menjaga sikap sesuai dengan yang berlaku di Kawasan Konservasi</td>
                                                </tr>
                                                <tr>
                                                    <td >8.Sudah melakukan 2x vaksinasi dengan menunjukkan aplikasi Peduli Lindungi</td>
                                                </tr>
                                                <tr>
                                                    <td >9.Wajib membawa masker dan hand sanitizer</td>
                                                </tr>
                                                
                                            </table>
                                        </div>
                                     </section>
                                </div>
                        </div>
                    </div>
                </section>
                <x-guest-layout>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
            
                            <!-- Name -->
                            <div>
                                <x-label for="name" :value="__('Name')" enctype="multipart/form-data"/>
            
                                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                            </div>
                            <div>
                                <x-label for="jumlah_pengunjung" :value="__('jumlah_pengunjung')" />
            
                                <x-input id="jumlah_pengunjung" class="block mt-1 w-full" type="number" name="jumlah_pengunjung" :value="old('jumlah_pengunjung')" required autofocus />
                            </div>
                            <div>
                                <x-label for="No_Hp" :value="__('No_Hp')" />
            
                                <x-input id="No_Hp" class="block mt-1 w-full" type="number" name="No_Hp" :value="old('No_Hp')" required autofocus />
                            </div>
                            <div>
                                <x-label for="alamat" :value="__('alamat')" />
            
                                <x-input id="alamat" class="block mt-1 w-full" type="text" name="alamat" :value="old('alamat')" required autofocus />
                            </div>
            
                            <!-- Email Address -->
                            <div class="mt-4">
                                <x-label for="email" :value="__('Email')" />
            
                                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                            </div>
                            <div class="mt-4">
                                <x-label for="tanggal" :value="__('tanggal')" />
            
                                <x-input id="tanggal" class="block mt-1 w-full" type="date" name="tanggal" :value="old('tanggal')" required />
                            </div>
                            <!-- Password -->
                            <!-- <select name="status_id" class="block w-full mt-1 rounded-md">
                                @foreach ($categories as $category)
                                      <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select> -->
                            <div class="flex items-center justify-end mt-4">
                                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                                    {{ __('Already registered?') }}
                                </a>
            
                                <x-button class="ml-4">
                                    {{ __('Register') }}
                                </x-button>
                            </div>
                        </form>
                </x-guest-layout>   

                    
            </div>
        </div>
    </div>   
</section>
  
 @endsection



