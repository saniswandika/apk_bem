@extends('layouts.FrontPage')
@section('template')
<script
      src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"
      defer>
</script>  
<section class="w-full flex flex-col items-center px-3">
    <div class="w-full  md:text-left shadow bg-white mt-10 mb-10 p-6">
                    <div
                        class="flex-1 max-h-full max-w-4xl mx-auto overflow-hidden bg-white rounded-lg shadow-xl "
                    >
                        <div class="flex flex-col w-full  md:flex-row">
                            <div class="h-32 md:h-auto md:w-1/2">
                                <img
                            
                                class="object-cover w-full h-full"
                                src="{{asset('assets/img/gambar_penyu.jpg')}}"
                                alt="Office"
                                />
                                
                            </div>
                                <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
                                  <div class="w-full">
                                    
                                    <form method="POST" action="{{ route('login') }}">
                                            @csrf
                                            <h1 class="flex justify-center mb-10 mb-8 text-xl font-semibold text-Dark ">
                                            Login Tiket Masuk kawasan
                                            </h1>         
                                            <!-- Email Address -->
                                            <div>
                                            <x-label for="email" :value="__('Email')" />

                                            <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                                            </div>

                                            <!-- Password -->
                                            <div class="mt-4">
                                            <x-label for="password" :value="__('Password')" />

                                            <x-input id="password" class="block mt-1 w-full"
                                                            type="password"
                                                            name="password"
                                                            required autocomplete="current-password" />
                                            </div>

                                            <!-- Remember Me -->
                                            <div class="block mt-4">
                                            <label for="remember_me" class="inline-flex items-center">
                                                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                                                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                            </label>
                                            </div>

                                            <div class="flex items-center justify-end mt-4">
                                            @if (Route::has('password.request'))
                                                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                                    {{ __('Forgot your password?') }}
                                                </a>
                                            @endif

                                            <x-button class="ml-3">
                                                {{ __('Log in') }}
                                            </x-button>
                                            </div>
                                </form>  
                                <hr class="my-8" />
                        
                                <a href="/register"
                                class="flex items-center justify-center w-full px-4 py-2 text-sm font-medium leading-5 text-dark text-gray-700 transition-colors duration-150 border border-gray-300 rounded-lg  active:bg-transparent hover:border-gray-500 focus:border-gray-500 active:text-gray-500 focus:outline-none focus:shadow-outline-gray"
                                >
                                    <img
                                            class="object-cover w-8 h-8 rounded-full"
                                            src="{{ asset('assets/img/logo_penyu.png') }}"
                                            alt=""
                                            aria-hidden="true"
                                    />
                                Daftar Masuk kawasan
                                </a>
                    </div>
               
        </div>   
</section>
 

  
 @endsection

 


