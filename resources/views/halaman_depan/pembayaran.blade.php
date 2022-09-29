@extends('layouts.FrontPage')
@section('template')

<div class="container mx-auto flex flex-wrap py-6">

    <!-- Post Section -->
    <section class="w-full flex flex-col items-center px-3">
        <div class="w-full flex flex-col text-center md:text-left md:flex-row shadow bg-white mt-10 mb-10 p-6">
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

                    <div class="md:w-full md:flex justify-end mt-11"  style="font-family:inter">
                        <div class="w-full md:w-2/2 items-center mb-10 ml-7" >
                            
                            <div id="form-wrapper">
                                <form class="">
                                    <form class="w-full text-white roundde px-8 pt-6 pb-8 ">
                                                    
                                        
                                        <div class="grid gap-8 mb-6 md:grid-cols-2 mt-3">
                                            <div class="specify-numbers-price">
                                                <div class="">
                                                    <label for="first_name" class="block mt-5 mb-2 text- font-medium text-gray-900 ">Nama</label>
                                                    <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-dark dark:border-gray-600 dark:placeholder-gray-400 dark:text-dark dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nama" required>
                                                
                                                
                                                    <label for="first_name" class="block mt-10 mb-2 text- font-medium text-gray-900 ">Usia</label>
                                                    <input type="number" id="first_name" class="bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-dark dark:border-gray-600 dark:placeholder-gray-400 dark:text-dark dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Usia" required>
                                                </div>
                                            </div>
                                            <div class="">
                                                <label for="first_name" class="block mt-5 mb-2 text- font-medium text-gray-900 ">No. Hp</label>
                                                <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-dark dark:border-gray-600 dark:placeholder-gray-400 dark:text-dark dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="No. Hp" required>
                                           
                                         
                                                <label for="first_name" class="block mb-2 mt-10 text- font-medium text-gray-900 ">Email</label>
                                                <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-dark dark:border-gray-600 dark:placeholder-gray-400 dark:text-dark dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Email" required>
                                            </div>
                                            <div class="" >
                                                <label for="first_name" class="block mb-2 text- font-medium text-gray-900 ">Alamat</label>
                                                <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-dark dark:border-gray-600 dark:placeholder-gray-400 dark:text-dark dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Alamat" required>
                                            </div>
                                            
                                            <div>
                                                <label for="first_name" class="block mb-2 text- font-medium text-gray-900 ">Tanggal Masuk kawasan</label>
                                                <input type="date" id="first_name" class="bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-dark dark:border-gray-600 dark:placeholder-gray-400 dark:text-dark dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Tanggal masuk" required>
                                            </div>
                                        </div>
                                        
                                    </form> 
                    
                                </form>
                            </div>
                            <div class="flex justify-end" >
                                
                                <button type="button" class="mr-11 inline-block px-10 py-1.5 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:shadow-lg  focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out" style="background: #627D98;">SUBMIT</button><button id="add-more-rooms"
                                onclick="duplicateForm();"><i class="fas fa-plus-circle"></i></button>
                                
                             </div>    
                             <div class="flex justify-end mt-3" >
                                 <button type="button" class="mr-11 text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded text-sm px-11 py-1.4 text-center dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-600 dark:focus:ring-blue-800">Batal</button>
                             </div>  
                             <div class="flex justify-center mt-3" >
                                <p>pembayaran</p>
                            </div>  
                                <div class="flex justify-center" >
                                    <table class="w-1/2 p-8 text-sm text-left text-gray-500 sm:bg-green-500 " style="background: #C4C4C466">
                            
                                        <thead class="text-xs text-black border-b-2 border-gray-900" style="background: #C4C4C466">
                                    
                                            <tr>
                                                <th scope="col" class="px-10 py-3">
                                                    Nama
                                                </th>
                                                <th scope="col" class="px-2 py-3">
                                                    Usia
                                                </th>
                                                <th scope="col" class="px-9 py-3">
                                                    email
                                                </th>
                                                <th scope="col" class="px-6 py-3">
                                                    Tanggal masuk pendaftaran
                                                </th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="text-black border-b-2 "style="background: #C4C4C466">
                                                <td class="px-10 py-4"> 
                                                    Rifky Annuary
                                                </td>
                                                <td class="px-6 py-4">
                                                    22
                                                </td>
                                                <td class="px-6 py-4">
                                                    RIFKYANNUARY13@gMAIL.COM
                                                </td>
                                                <td class="px-6 py-4">
                                                    22 mei 2022
                                                </td>
                                              
                                            </tr>
                                  
                                            
                                        </tbody>                                        
                                    </table> 
                                    
                                                                  
                                </div>
                                <div class="flex justify-center">
                                        <div class="grid grid-cols-3 gap-4 w-1/2 " style="background: #C4C4C466" >
                                        
                                            <div class="col-span-2 px-6 py-4" >Kode registrasi</div>
                                            <div class="py-4">kode password</div>
                                            <div class="col-span-2 px-6">total biaya</div>
                                            <div class="...">RP. 20.000</div>
                                        </div>        
                                </div>
                                <div class="flex justify-center">
                                    <div class=" w-1/2 " style="background: #C4C4C466" >
                                    
                                        <ul class="list-disc px-6 py-4 mt-5">
                                            <li >Hanya tiket MASUK IZIN KAWASAN.</li>
                                            <li>Belum termasuk jasa wisata lokal & asuransi</li>
                                            <li>Saat ini pembayaran tiket hanya bisa dilakukan secaran TRANSFER ke bank bni 88888888 a.n konservasi penyu</li>
                                            <li>pelayanan hanya dilakukan pada pukul 09:00 - 17:00 WIB</li>
                                                
                                            <!-- ... -->
                                          </ul>
                                    </div>        
                            </div>
                          </div>
                        </div>
                    </div>      
                </div>
            </div>
        </div>   
    </section>
  
    <!-- Sidebar Section -->
    
  
</div>
<script>
    const div = document.getElementById('form-wrapper');

    function duplicateForm() {
    let forms = div.getElementsByClassName('specify-numbers-price');
    let firstForm = forms[0];
    let formClone = firstForm.cloneNode(true);
    div.appendChild(formClone);
    }
</script>
@endsection