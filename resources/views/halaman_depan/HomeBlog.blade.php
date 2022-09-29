@extends('layouts.FrontPage')
@section('template')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">

 <nav class="w-full py-4 border-t border-b bg-gray-100" x-data="{ open: false }">
        <div class="block sm:hidden">
            <a
                href="#"
                class="block md:hidden text-base font-bold uppercase text-center flex justify-center items-center"
                @click="open = !open"
            >
                Topics <i :class="open ? 'fa-chevron-down': 'fa-chevron-up'" class="fas ml-2"></i>
            </a>
        </div>
        <div :class="open ? 'block': 'hidden'" class="w-full flex-grow sm:flex sm:items-center sm:w-auto">
            <div class="w-full container mx-auto flex flex-col sm:flex-row items-center justify-center text-sm font-bold uppercase mt-0 px-6 py-2">
                

              <div class="flex justify-center">
                <div>
                  <div class="dropdown relative">
                    <button
                      class="
                        dropdown-toggle
                        px-6
                        py-5
                        bg-gray-200
                        text-gray-700
                        font-medium
                        text-sm
                        leading-tight
                        uppercase
                        rounded
                        shadow-md
                        hover:bg-gray-300 hover:shadow-lg
                        focus:bg-gray-300 focus:shadow-lg focus:outline-none focus:ring-0
                        active:bg-gray-400 active:shadow-lg active:text-white
                        transition
                        duration-150
                        ease-in-out
                        flex
                        items-center
                        whitespace-nowrap
                        mr-5
                        sm:mt-0
                        "

                      type="button"
                      id="dropdownMenuButton1"
                      data-bs-toggle="dropdown"
                      aria-expanded="false"
                    >
                    Info Kawasan
                      <svg
                        aria-hidden="true"
                        focusable="false"
                        data-prefix="fas"
                        data-icon="caret-down"
                        class="w-2 ml-2"
                        role="img"
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 320 512"
                      >
                        <path
                          fill="currentColor"
                          d="M31.3 192h257.3c17.8 0 26.7 21.5 14.1 34.1L174.1 354.8c-7.8 7.8-20.5 7.8-28.3 0L17.2 226.1C4.6 213.5 13.5 192 31.3 192z"
                        ></path>
                      </svg>
                    </button>
                    <ul
                      class="
                        dropdown-menu
                        min-w-max
                        absolute
                        hidden
                        bg-white
                        text-base
                        z-50
                        float-left
                        py-2
                        list-none
                        text-left
                        rounded-lg
                        shadow-lg
                        mt-1
                        hidden
                        m-0
                        bg-clip-padding
                        border-none
                      "
                      aria-labelledby="dropdownMenuButton1"
                    >
                      <li>
                        <a
                          class="
                            dropdown-item
                            text-sm
                            py-2
                            px-4
                            font-normal
                            block
                            w-full
                            whitespace-nowrap
                            bg-transparent
                            text-gray-700
                            hover:bg-gray-100
                          "
                          href="/kondisiumum"
                          >
                          Kondisi Umum
                          </a
                        >
                      </li>
                      <li>
                        <a
                          class="
                            dropdown-item
                            text-sm
                            py-2
                            px-4
                            font-normal
                            block
                            w-full
                            whitespace-nowrap
                            bg-transparent
                            text-gray-700
                            hover:bg-gray-100
                          "
                          href="Halaman-Penelitian"
                          >
                          Stasiun Penelitian
                          </a
                        >
                      </li>
                      <li>
                        <a
                          class="
                            dropdown-item
                            text-sm
                            py-2
                            px-4
                            font-normal
                            block
                            w-full
                            whitespace-nowrap
                            bg-transparent
                            text-gray-700
                            hover:bg-gray-100
                          "
                          href="#"
                          >
                          Peta Kawasan
                          </a
                        >
                      </li>
                      <li>
                        <a
                          class="
                            dropdown-item
                            text-sm
                            py-2
                            px-4
                            font-normal
                            block
                            w-full
                            whitespace-nowrap
                            bg-transparent
                            text-gray-700
                            hover:bg-gray-100
                          "
                          href="#"
                          >
                          Area Konservasi
                          </a
                        >
                      </li>
                      <li>
                        <a
                          class="
                            dropdown-item
                            text-sm
                            py-2
                            px-4
                            font-normal
                            block
                            w-full
                            whitespace-nowrap
                            bg-transparent
                            text-gray-700
                            hover:bg-gray-100
                          "
                          href="#"
                          >
                          Option Four
                          </a
                        >
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              
              <div class="flex justify-center">
                <div>
                  <div class="dropdown relative">
                    <button
                      class="
                        dropdown-toggle
                        px-6
                        py-5
                        bg-gray-200
                        text-gray-700
                        font-medium
                        text-sm
                        leading-tight
                        uppercase
                        rounded
                        shadow-md
                        hover:bg-gray-300 hover:shadow-lg
                        focus:bg-gray-300 focus:shadow-lg focus:outline-none focus:ring-0
                        active:bg-gray-400 active:shadow-lg active:text-white
                        transition
                        duration-150
                        ease-in-out
                        flex
                        items-center
                        whitespace-nowrap
                        mr-5
                        mt-5
                        sm:mt-0
                        "

                      type="button"
                      id="dropdownMenuButton1"
                      data-bs-toggle="dropdown"
                      aria-expanded="false"
                    >
                      Izin Masuk Kawasan
                      <svg
                        aria-hidden="true"
                        focusable="false"
                        data-prefix="fas"
                        data-icon="caret-down"
                        class="w-2 ml-2"
                        role="img"
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 320 512"
                      >
                        <path
                          fill="currentColor"
                          d="M31.3 192h257.3c17.8 0 26.7 21.5 14.1 34.1L174.1 354.8c-7.8 7.8-20.5 7.8-28.3 0L17.2 226.1C4.6 213.5 13.5 192 31.3 192z"
                        ></path>
                      </svg>
                    </button>
                    <ul
                      class="
                        dropdown-menu
                        min-w-max
                        absolute
                        hidden
                        bg-white
                        text-base
                        z-50
                        float-left
                        py-2
                        list-none
                        text-left
                        rounded-lg
                        shadow-lg
                        mt-1
                        hidden
                        m-0
                        bg-clip-padding
                        border-none
                      "
                      aria-labelledby="dropdownMenuButton1"
                    >
                      <li>
                        <a
                          class="
                            dropdown-item
                            text-sm
                            py-2
                            px-4
                            font-normal
                            block
                            w-full
                            whitespace-nowrap
                            bg-transparent
                            text-gray-700
                            hover:bg-gray-100
                          "
                          href="#"
                          >
                          Ketentuan umum
                          </a
                        >
                      </li>
                      <li>
                        <a
                          class="
                            dropdown-item
                            text-sm
                            py-2
                            px-4
                            font-normal
                            block
                            w-full
                            whitespace-nowrap
                            bg-transparent
                            text-gray-700
                            hover:bg-gray-100
                          "
                          href="#"
                          >Pengunjung umum</a
                        >
                      </li>
                      <li>
                        <a
                          class="
                            dropdown-item
                            text-sm
                            py-2
                            px-4
                            font-normal
                            block
                            w-full
                            whitespace-nowrap
                            bg-transparent
                            text-gray-700
                            hover:bg-gray-100
                          "
                          href="/FormPengajuanPenelitian"
                          >Penelitian</a
                        >
                      </li>
                      <li>
                        <a
                          class="
                            dropdown-item
                            text-sm
                            py-2
                            px-4
                            font-normal
                            block
                            w-full
                            whitespace-nowrap
                            bg-transparent
                            text-gray-700
                            hover:bg-gray-100
                          "
                          href="#"
                          >Komersil</a
                        >
                      </li>
                    </ul>
                  </div>
                </div>
              </div>

              <div class="flex justify-center">
                <div>
                  <div class="dropdown relative">
                    <button
                      class="
                        dropdown-toggle
                        px-6
                        py-5
                        bg-gray-200
                        text-gray-700
                        font-medium
                        text-sm
                        leading-tight
                        uppercase
                        rounded
                        shadow-md
                        hover:bg-gray-300 hover:shadow-lg
                        focus:bg-gray-300 focus:shadow-lg focus:outline-none focus:ring-0
                        active:bg-gray-400 active:shadow-lg active:text-white
                        transition
                        duration-150
                        ease-in-out
                        flex
                        items-center
                        whitespace-nowrap
                        mr-5
                        mt-5
                        sm:mt-0
                        "

                      type="button"
                      id="dropdownMenuButton1"
                      data-bs-toggle="dropdown"
                      aria-expanded="false"
                    >
                       Publikasi
                      <svg
                        aria-hidden="true"
                        focusable="false"
                        data-prefix="fas"
                        data-icon="caret-down"
                        class="w-2 ml-2"
                        role="img"
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 320 512"
                      >
                        <path
                          fill="currentColor"
                          d="M31.3 192h257.3c17.8 0 26.7 21.5 14.1 34.1L174.1 354.8c-7.8 7.8-20.5 7.8-28.3 0L17.2 226.1C4.6 213.5 13.5 192 31.3 192z"
                        ></path>
                      </svg>
                    </button>
                    <ul
                      class="
                        dropdown-menu
                        min-w-max
                        absolute
                        hidden
                        bg-white
                        text-base
                        z-50
                        float-left
                        py-2
                        list-none
                        text-left
                        rounded-lg
                        shadow-lg
                        mt-1
                        hidden
                        m-0
                        bg-clip-padding
                        border-none
                      "
                      aria-labelledby="dropdownMenuButton1"
                    >
                      <li>
                        <a
                          class="
                            dropdown-item
                            text-sm
                            py-2
                            px-4
                            font-normal
                            block
                            w-full
                            whitespace-nowrap
                            bg-transparent
                            text-gray-700
                            hover:bg-gray-100
                          "
                          href="#"
                          >Proses Pelepasan Tukik</a
                        >
                      </li>
                      <li>
                        <a
                          class="
                            dropdown-item
                            text-sm
                            py-2
                            px-4
                            font-normal
                            block
                            w-full
                            whitespace-nowrap
                            bg-transparent
                            text-gray-700
                            hover:bg-gray-100
                          "
                          href="#"
                          >Infografis</a
                        >
                      </li>
                      <li>
                        <a
                          class="
                            dropdown-item
                            text-sm
                            py-2
                            px-4
                            font-normal
                            block
                            w-full
                            whitespace-nowrap
                            bg-transparent
                            text-gray-700
                            hover:bg-gray-100
                          "
                          href="#"
                          >Data & Grafik</a
                        >
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="flex justify-center">
                <div>
                  <div class="dropdown relative">
                    <button
                      class="
                        dropdown-toggle
                        px-6
                        py-5
                        bg-gray-200
                        text-gray-700
                        font-medium
                        text-sm
                        leading-tight
                        uppercase
                        rounded
                        shadow-md
                        hover:bg-gray-300 hover:shadow-lg
                        focus:bg-gray-300 focus:shadow-lg focus:outline-none focus:ring-0
                        active:bg-gray-400 active:shadow-lg active:text-white
                        transition
                        duration-150
                        ease-in-out
                        flex
                        items-center
                        whitespace-nowrap
                        mr-4
                        mt-5
                        sm:mt-0
                        "

                      type="button"
                      id="dropdownMenuButton1"
                      data-bs-toggle="dropdown"
                      aria-expanded="false"
                    >
                     Peraturan Perundangan
                      <svg
                        aria-hidden="true"
                        focusable="false"
                        data-prefix="fas"
                        data-icon="caret-down"
                        class="w-2 ml-2"
                        role="img"
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 320 512"
                      >
                        <path
                          fill="currentColor"
                          d="M31.3 192h257.3c17.8 0 26.7 21.5 14.1 34.1L174.1 354.8c-7.8 7.8-20.5 7.8-28.3 0L17.2 226.1C4.6 213.5 13.5 192 31.3 192z"
                        ></path>
                      </svg>
                    </button>
                    <ul
                      class="
                        dropdown-menu
                        min-w-max
                        absolute
                        hidden
                        bg-white
                        text-base
                        z-50
                        float-left
                        py-2
                        list-none
                        text-left
                        rounded-lg
                        shadow-lg
                        mt-1
                        hidden
                        m-0
                        bg-clip-padding
                        border-none
                      "
                      aria-labelledby="dropdownMenuButton1"
                    >
                      <li>
                        <a
                          class="
                            dropdown-item
                            text-sm
                            py-2
                            px-4
                            font-normal
                            block
                            w-full
                            whitespace-nowrap
                            bg-transparent
                            text-gray-700
                            hover:bg-gray-100
                          "
                          href="#"
                          >Undang-Undang</a
                        >
                      </li>
                      <li>
                        <a
                          class="
                            dropdown-item
                            text-sm
                            py-2
                            px-4
                            font-normal
                            block
                            w-full
                            whitespace-nowrap
                            bg-transparent
                            text-gray-700
                            hover:bg-gray-100
                          "
                          href="#"
                          >Peraturan Pemerintah</a
                        >
                      </li>
                      <li>
                        <a
                          class="
                            dropdown-item
                            text-sm
                            py-2
                            px-4
                            font-normal
                            block
                            w-full
                            whitespace-nowrap
                            bg-transparent
                            text-gray-700
                            hover:bg-gray-100
                          "
                          href="#"
                          >Keputusan Presiden</a
                        >
                      </li>
                      <li>
                        <a
                          class="
                            dropdown-item
                            text-sm
                            py-2
                            px-4
                            font-normal
                            block
                            w-full
                            whitespace-nowrap
                            bg-transparent
                            text-gray-700
                            hover:bg-gray-100
                          "
                          href="/send-mail"
                          >Peraturan menteri</a
                        >
                      </li>
                    </ul>
                  </div>
                </div>  
            </div>
        </div>
    </nav>


    <div class="container mx-auto md:mx-auto flex flex-wrap py-6">

        <!-- Posts Section -->
        
        <section class="w-full md:w-2/3 flex flex-col items-center px-3">
               

            <article class="flex flex-col shadow my-4">
                <!-- Article Image -->
                <div
                id="carouselExampleCrossfade"
                class="carousel slide carousel-fade relative"
                data-bs-ride="carousel"
              >
                <div class="carousel-indicators absolute right-0 bottom-0 left-0 flex justify-center p-0 mb-4">
                  <button
                    type="button"
                    data-bs-target="#carouselExampleCrossfade"
                    data-bs-slide-to="0"
                    class="active"
                    aria-current="true"
                    aria-label="Slide 1"
                  ></button>
                  <button
                    type="button"
                    data-bs-target="#carouselExampleCrossfade"
                    data-bs-slide-to="1"
                    aria-label="Slide 2"
                  ></button>
                  <button
                    type="button"
                    data-bs-target="#carouselExampleCrossfade"
                    data-bs-slide-to="2"
                    aria-label="Slide 3"
                  ></button>
                </div>
                <div class="carousel-inner relative w-full overflow-hidden">
                  <div class="carousel-item active float-left w-full">
                    <img
                      src="{{ asset('assets/img/pantai-pangumbahan-ujung-genteng.jpg') }}"
                      class="block w-full"
                      alt="Wild Landscape"
                    />
                  </div>
                  <div class="carousel-item float-left w-full">
                    <img
                      src="{{ asset('assets/img/pantai-pangumbahan.jpg') }}"
                      class="block w-full"
                      alt="Camera"
                    />
                  </div>
                  <div class="carousel-item float-left w-full">
                    <img
                    src="{{ asset('assets/img/081789100_1540701650-Pelepasan-Tukik2.jpg') }}"
                     
                      class="block w-full"
                      alt="Exotic Fruits"
                    />
                  </div>
                </div>
                <button
                  class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0"
                  type="button"
                  data-bs-target="#carouselExampleCrossfade"
                  data-bs-slide="prev"
                >
                  <span class="carousel-control-prev-icon inline-block bg-no-repeat" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button
                  class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0"
                  type="button"
                  data-bs-target="#carouselExampleCrossfade"
                  data-bs-slide="next"
                >
                  <span class="carousel-control-next-icon inline-block bg-no-repeat" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
            </article>

            <div class="w-full bg-white shadow flex flex-col my-4 p-6" style="background: #f6f7f9;">
               
                    <div class="my-11">
                        <p class="flex justify-center underline underline-offset-8 text-center whitespace-pre-line text-2xl mb-10" >Daftar  Penelitian</p>
                        <table id="myTable" class="w-full h-full w-full whitespace-no-wrap MBN ">
                      
                            <thead class="text-xs text-gray-700 border-b-2 border-gray-900 bg-gray-50 ">
                                <tr class ="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                    <th scope="col" class="px-9 py-3">
                                    Judul Penelitian
                                    </th>
                                    <th scope="col" class="px-9 py-3">
                                    Nama Peneliti
                                    </th>
                                    <th scope="col" class="px-9 py-3">
                                     Objek Penelitian
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                    Tahun
                                    </th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                              @foreach ($penelitian as $post )
                                <tr class="bg-white border-b-2  ">
                                    <th scope="row" class="px-1 py-2 font-medium text-gray-900 dark:text-white whitespace-normal indent-3">
                                        <a href="{{ route('post.show' , $post->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">{{ $post->judul_penelitian}}</a>
                                    </th>
                                    <td class="px-6 py-4"> 
                                       {{$post->nama_penelitian}}
                                    </td>
                                    <td class="px-6 py-4">
                                      <!-- {{ $post->objek_penelitian}} -->
                                    </td>
                                    <td class="px-6 py-4">
                                      {{ $post->created_at->format('Y')  }}
                                    </td>
                                   
                                </tr>
                               @endforeach
                            </tbody>
                            
                        </table>
                    </div>
            </div>

            <article class="flex flex-col shadow my-4">
                <!-- Article Image -->
               
            </article>
          
  

            <!-- Pagination -->
           

        </section>

        <!-- Sidebar Section -->
        <aside class="w-full md:w-1/3 flex flex-col items-center">

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

              <div class="max-h-full w-full" >
                <div x-data="app()" x-cloak class="px-4" style="background: #627D98;">
                  <div class=" mx-auto py-0">
                    <div class="shadow p-6 rounded-lg bg-white">
                      <div class="md:flex md:justify-between md:items-center">
                        <div>
                          <h2 class="text-xl text-gray-800 font-bold leading-tight">TELUR PENYU 2022</h2>
                          <p class="mb-2 monserat text-gray-600 text-sm">Data Perbulan</p>
                        </div>
              
                        <!-- Legends -->
                       
                      </div>
              
                      <canvas id="myChart" style="width:100%;max-width:2000px"></canvas>
                      
                    </div>
                  </div>
                </div>
              </div>
      

<script>
    // var labels =  {{ Js::from($labels) }};
    //  var users =  {{ Js::from($date) }};
var xValues = {{ Js::from($labels) }};
var yValues = {{ Js::from($date) }};
var barColors = ["red", "green","blue","orange","brown","yellow","gray","black","purple","lightblue"];

new Chart("myChart", {
  type: "bar",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    title: {
      display: true,
    }
  }
});
</script>
           
            <script src="http://code.jquery.com/jquery.js"></script>

            <script src="https://cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
            <script>
                $(function() {
                    $('#myTable').DataTable();
                });
              </script>
                <script>
                     var labels =  {{ Js::from($labels) }};
                      var users =  {{ Js::from($date) }};
                  function app() {
                    return {
                      chartData:  users,
                      labels: labels,
                      tooltipContent: '',
                      tooltipOpen: false,
                      tooltipX: 0,
                      tooltipY: 0,
                      showTooltip(e) {
                        console.log(e);
                        this.tooltipContent = e.target.textContent
                        this.tooltipX = e.target.offsetLeft - e.target.clientWidth;
                        this.tooltipY = e.target.clientHeight + e.target.clientWidth;
                      },
                      hideTooltip(e) {
                        this.tooltipContent = '';
                        this.tooltipOpen = false;
                        this.tooltipX = 0;
                        this.tooltipY = 0;
                      }
                    }
                  }
                 </script>
@endsection