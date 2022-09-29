@extends('layouts.FrontPage')
@section('template')

<div class="container mx-auto flex flex-wrap py-6">

    <!-- Post Section -->
    <section class="w-full flex flex-col items-center px-3">
        <div class="w-full flex flex-col text-center md:text-left md:flex-row shadow bg-white mt-10 mb-10 p-6">
            <div class="flex-1 flex flex-col justify-center md:justify-start">
                <div class="relative overflow-x-auto shadow-md sm:rounded-xxl px-8 rounded-lg" style="background: #f6f7f9;">
                    
                    <section>
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
                        <div class="card mb-4" style="margin: 2rem 4rem;">
                            <div class="card-body">
                              <div class="my-5">  
                                        <header class="mb-4">
                                            <!-- Post title-->
                                            <h2 class="fw-bolder font-bold " style="text-align: center; font-family:inter">SYARAT DAN KETENTUAN PENELITIAN
                                                <br>KONSERVASI PENYU PANTAI PANGUMBAHAN</h2>
                                            <!-- Post meta content-->
                                         </header>
                                            <div class="offset-3 col-6"  style="font-family:inter">
                                                <table>
                                                
                                                    <tr>
                                                        <td >1. Membawa surat pengantar Lembaga/Organisasi </td>
                                                  
                                                       
                                                    </tr>
                                                    <tr>
                                                        <td >2. Membawa surat pengajuan yang dikeluarkan oleh Kepala Cabang Dinas Kelautan dan Perikanan Wilayah Selatan Dinas Kelautan dan Perikanan Prov Jawa Barat</td>
                                                        
                                                   
                                                    </tr>
                                                    <tr>
                                                        <td >3.Membawa dan mengupload Proposal pengajuan Peneliatan yang didalamnya terkandung tujuan penelitian serta kebutuhan selama penelitian di Kawasan Konservasi Penyu Pantai Pangumbahan.</td>
                                                        
                    
                                                     </tr>
                                                    <tr>
                                                        <td >4.Membawa alat dan bahan penelitian</td>
                                                    </tr>
                                                    <tr>
                                                        <td >5.Bersedia memberikan hasil penelitian kepada pihak Konservasi Penyu Pantai Pangumbahan.</td>
                                                    </tr>
                                                </table>
                                            </div>
                                    </div>
                            </div>
                        </div>
                    </section>

                    <div class="md:w-full md:flex justify-end mt-11"  style="font-family:inter">
                        <div class="w-full md:w-2/2 flex flex-col items-center mb-10 ml-7" >
                            
                            <form  method="POST" action="{{ route('kirim.pengajuan') }}" enctype="multipart/form-data" class="w-full bg-white text-white shadow-md rounded px-8 pt-6 pb-8 " style="background: #D9D9D9B2">
                                @csrf
                                <p href="#" class="text-xl text-gray-900 text-center font-bold  pb-10">
                                    Form Pengajuan Penelitian
                                </p>
                                <div class="grid gap-6 mb-6 md:grid-cols-2">
                                    <div>
                                        <label for="first_name" class="block mb-2 text- font-medium text-gray-900 ">Nama Peneliti</label>
                                        <input type="text" id="Nama_Peneliti" name="Nama_Peneliti" class="bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-dark dark:border-gray-600 dark:placeholder-gray-400 dark:text-dark dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="nama penelitian" required>
                                    </div>
                                    <div>
                                        <label for="first_name" class="block mb-2 text- font-medium text-gray-900 ">Email</label>
                                        <input type="text" id="Email" name="Email" class="bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-dark dark:border-gray-600 dark:placeholder-gray-400 dark:text-dark dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Email" required>
                                    </div>
                                    <div>
                                        <label for="No_Telepon" class="block mb-2 text- font-medium text-gray-900 ">No. Telepon</label>
                                        <input type="number" id="first_name" name="No_Telepon" class="bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-dark dark:border-gray-600 dark:placeholder-gray-400 dark:text-dark dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="no Telepon" required>
                                    </div>
                                    <div>
                                        <label for="Alamat" class="block mb-2 text- font-medium text-gray-900 ">Alamat</label>
                                        <input type="text" id="first_name" name="Alamat" class="bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-dark dark:border-gray-600 dark:placeholder-gray-400 dark:text-dark dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Alamat" required>
                                    </div>
                                    <div>
                                        <label for="objek_peneliatin" class="block mb-2 text- font-medium text-gray-900 ">Objek Peneliatin</label>
                                        <input type="text" id="first_name" name="objek_peneliatin" class="bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-dark dark:border-gray-600 dark:placeholder-gray-400 dark:text-dark dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Objek Peneliatin"required>
                                    </div>
                                    <div>
                                        <label for="Judul_Peneliatan" class="block mb-2 text- font-medium text-gray-900 ">Judul Peneliatan</label>
                                        <input type="text" id="first_name" name="Judul_Peneliatan" class="bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-dark dark:border-gray-600 dark:placeholder-gray-400 dark:text-dark dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Judul Penelitian" required>
                                    </div>
                                </div>
 
                                <label  class="block mb-2 text-sm font-medium  text-gray-900  " for="file_input">upload proposal</label>
                                <input name="file" id="file_input" type="file" class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" >

                                {{-- style="background: #627D98;" --}}
                            
                                <button type="submit" style="background: #627D98;" type="button" class="w-full inline-block px-6 py-5 bg-blue-600 text-white font-medium text-xs leading-normal uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out mt-9">Ajukan Penelitian</button>                         
                            </form>         
                        
                                  
                          </div>
                          
                    </div>      
                </div>
             
            </div>
      
        </div>   
        
        
    </section>
  
    <!-- Sidebar Section -->
    
  
</div>
@endsection