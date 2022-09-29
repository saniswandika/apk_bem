@extends('layouts.FrontPage')
@section('template')
<script src="https://cdn.jsdelivr.net/npm/swiffy-slider@1.5.3/dist/js/swiffy-slider.min.js" crossorigin="anonymous" defer></script>
<link href="https://cdn.jsdelivr.net/npm/swiffy-slider@1.5.3/dist/css/swiffy-slider.min.css" rel="stylesheet" crossorigin="anonymous">
<div class="container mx-auto flex flex-wrap py-6">

    
    <!-- Post Section -->
    <section class="w-full flex flex-col items-center px-3">
    
    
        <div class="w-full  bg-white mt-10 mb-10 p-6">
        <div class="flex flex-col text-center w-full mb-20">
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Tentang Konservasi Penyu Pantai Pangumbahan</h1>
            <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard of them.</p>
          </div>
          <div class="swiffy-slider slider-item-show2 slider-nav-round slider-nav-autohide slider-nav-autoplay slider-nav-animation-appear slider-nav-animation-slow">
            <ul class="slider-container" style="">
                <li class="slide-visible">
                    <div id="slide1">
                      <img
                      src="{{ asset('assets/img/kelompok-konservasi-temukan-ratusan-telur-penyu-di-tepi-pantai-7HMvgbjThG.jpg') }}"
                      class="block w-full"
                      alt="Camera"
                      />
                    </div>
                </li>
                <li class="slide-visible">
                    <div id="slide2"><img
                      src="{{ asset('assets/img/pantai-pangumbahan.jpg') }}"
                      class="block w-full"
                      alt="Camera"
                    /></div>
                </li>
                <li class="">
                    <div id="slide3">
                      <img
                      src="{{ asset('assets/img/pantai-pangumbahan-ujung-genteng.jpg') }}"
                      class="block w-full"
                      alt="Camera"
                      />
                    </div>
                </li>
                <li class="">
                    <div id="slide4"><img
                      src="{{ asset('assets/img/pantai-pangumbahan.jpg') }}"
                      class="block w-full"
                      alt="Camera"
                    /></div>
                </li>
                <li class="">
                    <div id="slide5">
                      <img
                                src="{{ asset('assets/img/pantai-pangumbahan-ujung-genteng.jpg') }}"
                                class="block w-full"
                                alt="Camera"
                              />
                    </div>
                </li>
                <li>
                    <div id="slide6"> 
                      <img
                      src="{{ asset('assets/img/pantai-pangumbahan-ujung-genteng.jpg') }}"
                      class="block w-full"
                      alt="Camera"
                      /></div>
                </li>
                <li>
                    <div id="slide7">
                      <img
                                src="{{ asset('assets/img/pantai-pangumbahan.jpg') }}"
                                class="block w-full"
                                alt="Camera"
                              />
                    </div>
                </li>
                <li>
                    <div id="slide8">
                      <img
                      src="{{ asset('assets/img/pantai-pangumbahan-ujung-genteng.jpg') }}"
                      class="block w-full"
                      alt="Camera"
                      />
                  </div>
                </li>
                <li>
                    <div id="slide9">
                      <img
                      src="{{ asset('assets/img/pantai-pangumbahan-ujung-genteng.jpg') }}"
                      class="block w-full"
                      alt="Camera"
                      />
                    </div>
                </li>
            </ul>
          
            <button type="button" class="slider-nav"></button>
            <button type="button" class="slider-nav slider-nav-next"></button>
          
            <ul class="slider-indicators">
                <li class=""></li>
                <li class=""></li>
                <li class=""></li>
                <li class="active"></li>
                <li></li>
                <li></li>
                <li class=""></li>
                <li class=""></li>
                <li class=""></li>
            </ul>
          </div>
            <section class="text-gray-600 body-font">
              
            <section class="text-gray-600 body-font">
                <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
                  <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
                    <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Letak Geografis Dan
                      <br class="hidden lg:inline-block"> Kehidupan Sosial Ekonomi
                    </h1>
                    <p class="mb-8 leading-relaxed text-justify">
                    Desa Pangumbahan adalah desa yang dikategorikan
                          sebagai desa pesisir dan desa pinggiran hutan, luas total
                          wilayah desa mencapai 1.916 hektar. Terletak pada posisi
                          07º lintang selatan dan 106º bujur timur, berbatasan dengan
                          Samudera Indonesia di bagian selatan, bagian utara dengan
                          desa Gunung Batu, sebelah barat berbatasan dengan
                          Kawasan Konservasi Sumber daya Alam (KSDA) Cikepuh
                          dan di timur berbatasan dengan desa Ujunggenteng dan
                          desa Gunungbatu Kecamatan Ciracap. Topografi wilayah
                          ini adalah datar berbukit, dengan ketinggian antara 1-60
                          dpl, suhu harian rata-rata antara 26º-36º celcius dengan
                          frekwensi curah hujan rata-rata 3.500 mm setiap tahunnya.
                          Desa Pangumbahan terdiri dari sembilan rukun warga
                          serta dua puluh delapan rukun tetangga yang terdistribusi
                          kedalam empat dusun, yakni; Dusun Ciburial, Jaringao,
                          Waluran, dan Pangumbahan. Secara administratif Desa
                          Pangumbahan berada dalam wilayah pemerintahan
                          Kecamatan Ciracap, Kabupaten Sukabumi, Jawa Barat.
                          Dari Bogor, Desa Pangumbahan dapat dicapai dengan
                          sarana angkutan darat, menempuh perjalanan kurang lebih
                          tujuh jam dengan jarak tempuh 223 km. Akses ke desa ini
                          baik dari ibu kota kecamatan, kabupaten, provinsi, dan ibu
                          kota Negara dapat dicapai melalui jalur angkutan darat. 
                    </p>
                    <div class="flex justify-center">
                      <button class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Selanjutnya</button>
                    </div>
                  </div>
                  <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
                    <img class="object-cover object-center rounded" alt="hero" src="{{ asset('assets/img/desapangumbahan.jpg') }}">
                  </div>
                </div>
              </section>
              <section class="text-gray-600 body-font">
                <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
                  <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
                    <img class="object-cover object-center rounded" alt="hero" src="{{ asset('assets/img/kawasankonservasi.jpg') }}">
                  </div>
                  <div class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
                    <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Kawasan Konservasi Penyu
                      <br class="hidden lg:inline-block">Pantai Pangumbahan
                    </h1>
                    <p class="mb-8 leading-relaxed text-justify">
                                Kawasan ini meliputi areal-areal yang dulunya merupakan
                                areal konsesi, baik HGU perkebunan kelapa maupun areal
                                konsesi pemanfataan telur penyu. Pasca berakhirnya izin
                                konsesi pemanfaatan telur penyu dan HGU perkebunan
                                kelapa pada tahun 2008, dan menyadari pentingnya
                                pelestarian keragaman hayati karena keberadaan habitat
                                penyu hijau yang semakin langka, pemerintah Kabupaten
                                Sukabumi selanjutnya mengeluarkan kebijakan tentang
                                pencadangan kawasan konservasi penyu terutama
                                diatas areal yang dulunya merupakan areal konsesi.
                                Kebijakan tersebut tertuang dalam SK No: 523/ Kep.639-
                                Sodality: Jurnal Sosiologi Pedesaan | Desember 2015| 103
                                Dislutkan/2008 tentang Pencadangan Kawasan Penyu
                                Pantai Pangumbahan sebagai Kawasan Konservasi Pesisir
                                dan Pulau-Pulau Kecil (KKP3K) Kabupaten Sukabumi.
                                Surat keputusan tersebut dipertegas dengan Peraturan
                                Daerah Kabupaten Sukabumi No. 2 tahun 2009 Tentang
                                Pelestarian Penyu di Kabupaten Sukabumi.3
                                Tjahjo Tri Hartono dalam studinya di kawasan ini tahun
                                2012 tentang Rezim Hak Kepemilikan dan Akses Terhadap
                                Sumberdaya Lahan Bagi efektivitas Institusi Pengelolaan
                                Kawasan Konservasi Penyu, menyebutkan bahwa
                                berdasarkan sejarahnya, lahan ini semula adalah areal
                                berhutan yang diklaim milik negara oleh pemerintah pusat.
                                Namun di tingkat desa, lahan tersebut diklaim sebagai
                                milik desa dan merupakan areal cadangan.
                    </p>
                    <div class="flex justify-center">
                      <button class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Selanjutnya</button>
                    </div>
                  </div>
                </div>
              </section>
              <section class="text-gray-600 body-font">
                <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
                  <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
                    <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Before they sold out
                      <br class="hidden lg:inline-block">readymade gluten
                    </h1>
                    <p class="mb-8 leading-relaxed">Copper mug try-hard pitchfork pour-over freegan heirloom neutra air plant cold-pressed tacos poke beard tote bag. Heirloom echo park mlkshk tote bag selvage hot chicken authentic tumeric truffaut hexagon try-hard chambray.</p>
                    <div class="flex justify-center">
                      <button class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Button</button>
                      <button class="ml-4 inline-flex text-gray-700 bg-gray-100 border-0 py-2 px-6 focus:outline-none hover:bg-gray-200 rounded text-lg">Button</button>
                    </div>
                  </div>
                  <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
                    <img class="object-cover object-center rounded" alt="hero" src="https://dummyimage.com/720x600">
                  </div>
                </div>
              </section>
              
        </div>
        
    </section>
<script src="https://unpkg.com/smoothscroll-polyfill/dist/smoothscroll.min.js" crossorigin="anonymous" defer></script>
@endsection