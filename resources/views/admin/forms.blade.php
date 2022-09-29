@extends('admin.layouts.admin')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/switchery/0.8.2/switchery.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/switchery/0.8.2/switchery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

        {{-- trix-editor --}}
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/trix.css') }}">
        <script type="text/javascript" src="{{ asset('assets/js/trix.js') }}"></script>
        {{-- flowbite --}}
        <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.1/dist/flowbite.min.css" />
        <script src="https://unpkg.com/flowbite@1.5.1/dist/flowbite.js"></script>
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/switchery/0.8.2/switchery.min.js"></script>


        <script>
        tailwind.config = {
            theme: {
            extend: {
                fontFamily: {
                sans: ['Inter', 'sans-serif'],
                },
            }
            }
        }
        </script>
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
<div class="container px-6 mx-auto grid">
        <!-- Responsive cards -->
    <h4 class="mb-4 mt-10 text-lg font-semibold text-gray-600 dark:text-gray-300">
         pengajuan penelitian
    </h4>
    <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
        <!-- Card -->
        <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
            <div
                class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z">
                    </path>
                </svg>
            </div>
            <div>
                <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                    jumlah pengajuan penelitian
                </p>
                <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                   {{ $count }}
                </p>
            </div>
        </div>
        <!-- Card -->
    </div>
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
                    <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                        <div
                            class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500">
                            <i class="fa-solid fa-newspaper"></i>
                            
                        </div>
                        <div>
                            <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                                Tambah Data Penyu
                            </p>
                        </div>
                    </div>
                    <div class="modal-body relative p-4">
                        <div class="flex justify-center">
                            
                                <form action="{{ route('admin.cards.create') }}"  method="post" enctype="multipart/form-data" class="w-full max-w-lg">
                                    @csrf

                                        <div class="flex flex-wrap -mx-3 mb-6">
                                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                                <label  class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                                Jumlah Penyu Naik
                                                </label>
                                                <input class="appearance-none block w-full bg-gray-200 text-gray-700  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="number" name="jml_penyu_naik" placeholder="">
                                            </div>
                                        </div>
                                        <div class="flex flex-wrap -mx-3 mb-6">
                                            <div class="w-full px-3">
                                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                                                Penyu Bertelur
                                                </label>
                                                <input class="appearance-none block w-full bg-gray-200 text-gray-700  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="number"  name="penyu_bertelur" placeholder="">
                                            </div>
                                        </div>
                                        <div class="flex flex-wrap -mx-3 mb-6">
                                            <div class="w-full px-3">
                                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                                                    Telur Penyu
                                                </label>
                                                <input class="appearance-none block w-full bg-gray-200 text-gray-700  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" name="telur_penyu" type="number" placeholder="">
                                            </div>
                                        </div>
                                        <div class="flex flex-wrap -mx-3 mb-6">
                                            <div class="w-full px-3">
                                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                                                    Penyu Menetas
                                                </label>
                                            <input class="appearance-none block w-full bg-gray-200 text-gray-700  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" name="penyu_menetas" type="number" placeholder="">
                                            </div>
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
                                                ml-1">Save changes
                                            </button>
                                        </div>
                                    
                                </form>
                        </div>
                    </div>
             </div>
            </div>
    </div> 
    <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
        Table Pengajuan Peneltian
    </h4>
    <div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs">
        <div class="w-full overflow-x-auto">
            <table id="myTable" class="w-full whitespace-no-wrap">
                <thead>
                  
                            <tr
                                class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                <th class="px-4 py-3">No</th>
                                <th class="px-4 py-3">Tanggal</th>
                                <th class="px-4 py-3">Nama peneliti</th>
                                <th class="px-4 py-3">Email peneliti</th>
                                <th class="px-4 py-3">Alamat peneliti</th>
                                <th class="px-4 py-3">Objek Peneliti</th>
                                <th class="px-4 py-3"> Judul Peneliatan</th>
                                <th class="px-4 py-3">Objek Judul Peneliatan</th>
                                <th class="px-4 py-3">file dokumen peneliti</th>
                            </tr>
                        </thead>
                        @php
                             $i = 1 
                        @endphp

                        <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                            @foreach ($data as $post)
                                <tr class="text-gray-700 dark:text-gray-400">
                                    
                                    <td class="px-4 py-3">
                                        {{ $i++ }} 
                                    </td>
                                    <td class="px-4 py-3 text-sm">
                                        {{ $post->created_at->format('d-m-Y')  }}
                                    </td>
                                    <td class="px-4 py-3 text-xs">
                                        <span
                                            class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                                            {{ $post->Nama_Peneliti }}
                                        </span>
                                    </td>
                                    <td class="px-4 py-3 text-sm">
                                        {{ $post->Email }}
                                    </td>
                                    <td class="px-4 py-3 text-sm">
                                        {{ $post->Alamat }}
                                    </td>
                                    <td class="px-4 py-3 text-sm">
                                       {{ $post->objek_peneliatin}}
                                    </td>
                                    <td class="px-4 py-3 text-sm">
                                        {{ $post->Judul_Peneliatan}}
                                   </td>
                                   <td class="px-4 py-3 text-sm">
                                         {{ $post->Judul_Peneliatan}}
                                    </td>
                                   
                               
                                   
                                    <td class="px-4 py-3 text-sm">
                                        <a href="{{ asset('uploads/'.  $post->file) }}">Lihat Dokumen </a>
                                        {{-- <img class="rounded-t-lg" src="{{ url('gambar_image/' . $post->gambar_image) }}" alt=""/> --}}
                                   </td>
                                </tr>
                            @endforeach 
                </tbody>
            </table>
            {{-- @foreach ($data as $post)        
            <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto" id="EditModal{{ $post->id }}" tabindex="-1" aria-labelledby="exampleModalXlLabel" aria-modal="true" role="dialog">
                <div class="modal-dialog modal-xl relative w-auto pointer-events-none">
                <div class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                    <div class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                    <h5 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalXlLabel">
                        Edit berita
                    </h5>
                    <button type="button"
                        class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                        data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body relative p-4">
                        <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                            <div class="p-6 bg-white border-b border-gray-200">
                                
                                <form action="{{ route('admin.cards.update',[$post->id]) }}"  method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="flex flex-wrap -mx-3 mb-6">
                                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                            <label  class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                                            Jumlah Penyu Naik
                                            </label>
                                            <input class="appearance-none block w-full bg-gray-200 text-gray-700  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="number" name="jml_penyu_naik" placeholder="" value="{{ old('jml_penyu_naik', $post->jml_penyu_naik) }}">
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap -mx-3 mb-6">
                                        <div class="w-full px-3">
                                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                                            Penyu Bertelur
                                            </label>
                                            <input class="appearance-none block w-full bg-gray-200 text-gray-700  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="number"  name="penyu_bertelur" placeholder="" value="{{ old('penyu_bertelur', $post->penyu_bertelur) }}">
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap -mx-3 mb-6">
                                        <div class="w-full px-3">
                                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                                                Telur Penyu
                                            </label>
                                            <input class="appearance-none block w-full bg-gray-200 text-gray-700  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" name="telur_penyu" type="number" placeholder="" value="{{ old('telur_penyu', $post->telur_penyu) }}">
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap -mx-3 mb-6">
                                        <div class="w-full px-3">
                                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                                                Penyu Menetas
                                            </label>
                                        <input class="appearance-none block w-full bg-gray-200 text-gray-700  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" name="penyu_menetas" type="number" placeholder="" value="{{ old('penyu_menetas', $post->penyu_menetas) }}">
                                        </div>
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
                                                <button type="submit" class="px-6
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
                                                ml-1">Save changes
                                            </button>
                                    </div>
                                </form>
                                
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        @endforeach       --}}
        </div>
    <!-- Cards with title -->
    
</div>
<script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script src="http://code.jquery.com/jquery.js"></script>

<script src="https://cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
<script>
let elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));

    elems.forEach(function(html) {
        let switchery = new Switchery(html,  { size: 'small' });
    });
</script>
<script>
    $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
{{-- <script>
    $(function() {
        $('#myTable').DataTable();
    });

            $(document).ready(function(){
    $('.js-switch').change(function () {
        let status = $(this).prop('checked') === true ? 1 : 0;
        let userId = $(this).data('id');
        $.ajax({
            type: "GET",
            dataType: "json",
            url: '{{ route('admin.updatestatus') }}',
            data: {'status': status, 'user_id': userId},
            success: function (data) {
                console.log(data.message);
            }
        });
    });
});
</script> --}}

<script>
tinymce.init({
selector:'textarea.description',
width: 900,
height: 300
});
</script>
@endsection