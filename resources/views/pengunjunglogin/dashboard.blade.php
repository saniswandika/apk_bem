@extends('layouts.FrontPage')
@section('template')

<div class="container mx-auto flex flex-wrap py-6">
    <style>
        .table_pembayaran {
          border: 1px solid black;
          border-collapse: collapse;
        }
        .th_pembayaran{
            border: 1px solid black;
          border-collapse: collapse;
        }
        .td_pembayaran{
            border: 1px solid black;
          border-collapse: collapse;
        }
        </style>
    <!-- Post Section -->
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
             LOG OUT Detail tiket
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
              <li class="flex">
                <form method="POST" action="{{ route('logout') }}">
                    
                    @csrf
                        <a
                                class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                                href="admin.logout"
                        >
                            <svg
                                    class="w-4 h-4 mr-3"
                                    aria-hidden="true"
                                    fill="none"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                            >
                                <path
                                        d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"
                                ></path>
                            </svg>
                        <span onclick="event.preventDefault();
                                                    this.closest('form').submit();">   {{ __('Log Out') }}</span>                            
                        </a>
                  </form>
            </li>
            </ul>
          </div>
        </div>  
    </div>
    <section class="w-full flex flex-col items-center px-3">
        <div class="w-full flex flex-col text-center md:text-left md:flex-row shadow bg-white mt-10 mb-10 p-6">
            <div class="flex-1 flex flex-col justify-center md:justify-start">
                <div class="relative overflow-x-auto shadow-md sm:rounded-xxl px-8 rounded-lg" style="background: #f6f7f9;">
                    <header class="mb-4">
                        <!-- Post title-->
                        <h2 class="fw-bolder font-bold " style="text-align: center; font-family:inter">Informasi pendaftaran Kawasan<br> Konservasi Penyu Pantai Pangumbahan</h2>
                        <!-- Post meta content-->
                     </header>
                    <div >
                        <h2>Hari/tanggal kunjungan</h2>
                        <p class="mt-2">{{ date('d-m-Y', strtotime(Auth::user()->tanggal)); }}</p>
                        
                    </div>
                    <br>
                    <div>
                        <h2>status</h2>
                        <p>{{ Auth::user()->status->name}}</p>
                    </div>
                    <br>
                    <!-- <div>
                        <h2>kode pembayaran</h2>
                        {{-- <p>{{$data['password']}}</p> --}}
                    </div> -->
                    <br>
                    <h2 class="">Hallo {{ Auth::user()->name }}</h2>
                    <p class="mt-5">Terima kasih telah mendaftar sebagai pengunjung Kawasan Konservasi Penyu
                        Pantai Pangumbahan untuk tanggal {{ date('d-m-Y', strtotime(Auth::user()->tanggal)); }}. Data anda telah kami catat dan disimpan. dengan ID Login yang sudah kami kirim ke alamat email anda harap mengingat atau catat ID tersebut untuk mendapatkan
                        E-Tiket.
                        <br>
                        <br>
                        Berikut informasi terkait pendaftaran anda :<br>
                        1. Kunjungan berjumlah {{ Auth::user()->jumlah_pengunjung }} orang
                    </p>
            
                    <table class="table_pembayaran mt-5" style="width:100%">
                        <tr class="th_pembayaran" style="height:35px; text-align:center;">
                            <th class="th_pembayaran" >tgl masuk</th>
                        
                            <th class="th_pembayaran">No Hp</th>
                            <th class="th_pembayaran">jumlah pengunjung</th>
                        
                        </tr>
                    <tr style="height:35px; text-align:center;">
                        <td class="class=td_pembayaran">{{ date('d-m-Y', strtotime(Auth::user()->tanggal)); }}</td>
                    
                    <td class="th_pembayaran ">{{ Auth::user()->No_Hp }}</td>
                    <td class="th_pembayaran">{{ Auth::user()->jumlah_pengunjung }}</td>
                    </tr>
                    <tr style="height:50px; text-align:center;">
                        <th class="th_pembayaran">total biaya masuk kawasan</th>
                        <td colspan="3">RP.{{ Auth::user()->total_bayar }}</td>
                    </tr>
                    </table>
                    <p class="mt-5">
                    2. Biaya kunjungan sebesar <b>Rp. {{ Auth::user()->total_bayar }}</b> dibayarkan melalui transfer ke Rekening Bank BNI cabang Sukabumi dengan nomor rekening <b> 888888888</b> atas nama <b> Konservasi Penyu Pantai Pangumbahan</b>.<br>
                    3. Setelah melakukan pembayaran, silahkan Login pada halaman ini untuk melakukan konfirmasi pembayaran<br>
                    4. Jika <b class ="text-red-600"> 24 jam </b> setelah pendaftaran anda tidak melakukan pembayaran, atau sudah membayar tetapi tidak melakukan konfirmasi pembayaran. Maka pendaftaran secara otomatis dibatalkan.<br>
                    5. Pemeriksaan bukti transfer biaya pendaftaran melalui bank akan kami lakukan setelah kami menerima informasi konfirmasi pembayaran
                    </p>
                    <div class="flex justify-end">
                        <button class="mb-10 mt-10 w-64 h-12 px-6 text-white transition-colors duration-150 bg-indigo-700 rounded-lg focus:shadow-outline hover:bg-indigo-800" type="button"
                        data-bs-toggle="modal" data-bs-target="#exampleModal"  style="background: #627D98;" >
                            Konfirmasi Pembayaran
                      </button>
                     </div>
                 
                </div>
                
            </div>
            
      
        </div>   
    </section>
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
             
              <div class="modal-body relative p-4">
                  <div class="flex justify-center">
                      
                          <form action="{{ route('dashboard.pembayaran', [$profileimage->id]) }}"  method="POST" enctype="multipart/form-data" class="w-full max-w-lg">
                            {{ csrf_field() }}
                            {{ method_field('put') }}
                                <div>
                                    <label  class="block mb-2 text-sm font-medium  text-gray-900  " for="file_input">upload bukti bayar</label>
                                    <input name="upload_pembayaran" id="file_input" type="file" class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" >
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
                                          ml-1">Upload
                                      </button>
                                  </div>
                              
                          </form>
                  </div>
              </div>
       </div>
      </div>
</div> 
    
  
    <!-- Sidebar Section -->
    
  
</div>
@endsection



