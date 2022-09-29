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
<div class="container px-6 mx-auto grid mt-10">

    <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto" id="exampleModalXl" tabindex="-1" aria-labelledby="exampleModalXlLabel" aria-modal="true" role="dialog">
        <div class="modal-dialog modal-xl relative w-auto pointer-events-none">
          <div class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
            <div class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
              <h5 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalXlLabel">
                Extra large modal
              </h5>
              <button type="button"
                class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body relative p-4">
                <form action="{{ route('admin.modals.create') }}"  method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-6">
                        <label class="block">
                            <span class="text-gray-700">Title</span>
                            <input type="text" name="judul_berita"
                                class="block w-full @error('judul_berita') border-red-500 @enderror mt-1 rounded-md"
                                {{-- placeholder="" value="{{ old('title', $post->title) }}" /> --}} >
                        </label>
                        @error('judul_berita')
                        <div class="text-sm text-red-600">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-6">
                        <label class="block">
                            <span class="text-gray-700">content</span>
                            <textarea class="description" name="deskripsi_berita"></textarea>
                        </label>
                        @error('deskripsi_berita')
                        <div class="text-sm text-red-600">{{ $message }}</div>
                        @enderror
                    </div>
                       
                    <input class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        id="multiple_files" type="file" multiple="" name="gambar_image">
                        
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
            </div>
          </div>
        </div>
      </div>
        <div class="grid grid-cols-2 gap-4">
            <div>
                <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
                    Table Data Berita 
                </h4>
            </div>
            <!-- ... -->
            <div class="flex justify-end mr-10 mb-10">
                <button type="button" class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:focus:ring-yellow-900"
                data-bs-toggle="modal" data-bs-target="#exampleModalXl">Tambah Berita</button>
            </div>
          </div>
          
   
    <div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs">
        <div class="w-full overflow-x-auto">
            <table id="myTable" class="w-full whitespace-no-wrap">
                <thead>
                            <tr
                                class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                <th class="px-4 py-3">No</th>
                                <th class="px-4 py-3">Judul Berita</th>
                                <th class="px-4 py-3">Deskripsi Berita</th>
                                <th class="px-4 py-3">gambar Image</th>
                                <th class="px-4 py-3">Tanggal Pembuatan Berita</th>
                                <th class="px-4 py-3">Status Publish</th>
                                <th class="px-4 py-3">aksi </th>
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
                                        {{ $post->judul_berita }}
                                    </td>
                                    <td class="px-4 py-3 text-xs">
                                        <span
                                            class="px-2 py-1 font-semibold leading-tight text-green-700  rounded-full ">
                                           
                                            {!! Str::words( $post->deskripsi_berita, 10, ' ...') !!}
                                            <!-- {!! Str::words($post->deskripsi_berita, 2, ' ...') !!} -->
                                        </span>
                                    </td>
                                    <td class="px-4 py-3 text-sm">
                            
                                            <img class="rounded-t-lg h-14" src="{{ url('gambar_image/' . $post->gambar_image) }}" alt="">
                                          
                                    </td>
                                    <td class="px-4 py-3 text-sm">
                                         {{ $post->created_at->format('d-m-Y')  }}
                                    </td>
                                    <td class="px-4 py-3 text-sm">
                                        <input type="checkbox" data-id="{{ $post->id }}" name="status" class="js-switch" {{ $post->status == 1 ? 'checked' : '' }}>
                                    </td>
                                    <td class="px-4 py-3">
                                        
                                        <div class="flex items-center space-x-4 text-sm">
                                            <form action="{{ route('admin.modals.delete', [$post->id] ) }}" method="post" class="d-inline">
                                                @csrf
                                                    <button
                                                    class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                                    aria-label="Delete"  data-bs-toggle="modal" data-bs-target="#exampleModal{{ $post->id  }}">
                                                            <svg class="w-5 h-5" aria-hidden="true" fill="currentColor"
                                                            viewBox="0 0 20 20">
                                                            <path fill-rule="evenodd"
                                                                d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                                clip-rule="evenodd"></path>
                                                            </svg>
                                                
                                                     </button>
                                            </form>
                                            
                                            <button
                                                class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                                aria-label="Delete"  data-bs-toggle="modal" data-bs-target="#EditModal{{ $post->id  }}">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </button>
                                            <button
                                                class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                                aria-label="Delete"  data-bs-toggle="modal" data-bs-target="#exampleModal{{ $post->id  }}">
                                                <i class="fa-solid fa-eye"></i>
                                                
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach 

                            @foreach ($data as $post)        
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
                                                                
                                                                <form action="{{ route('admin.modals.update',[$post->id]) }}"  method="post" enctype="multipart/form-data">
                                                                    @csrf
                                                                    @method('PUT')
                                                                    <div class="mb-6">
                                                                        <label class="block">
                                                                            <span class="text-gray-700">Title</span>
                                                                            <input type="text" name="judul_berita"
                                                                                class="block w-full @error('judul_berita') border-red-500 @enderror mt-1 rounded-md"
                                                                                placeholder="" value="{{ old('judul_berita', $post->judul_berita) }}" />
                                                                        </label>
                                                                        @error('judul_berita')
                                                                        <div class="text-sm text-red-600">{{ $message }}</div>
                                                                        @enderror
                                                                    </div>
                                                                    <div class="mb-6">
                                                                        <label class="block">
                                                                            <span class="text-gray-700">content</span>
                                                                            <textarea class="description" name="deskripsi_berita">{{ old('deskripsi_berita', $post->deskripsi_berita) }}</textarea>
                                                                        </label>
                                                                        @error('deskripsi_berita')
                                                                        <div class="text-sm text-red-600">{{ $message }}</div>
                                                                        @enderror
                                                                    </div>
                                                                    
                                                                    <input class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                                                        id="multiple_files" type="file" multiple="" name="gambar_image" value="{{ old('gambar_image', $post->gambar_image) }}">

                                                                        <img class="rounded-t-lg h-40 mt-10" src="{{ url('gambar_image/' . $post->gambar_image) }}" alt="">
                                                                        
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
                        @endforeach   
                </tbody>
            </table>
           
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
{{-- <script>
    $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script> --}}
<script>
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
            url: '{{ route('updatestatus') }}',
            data: {'status': status, 'user_id': userId},
            success: function (data) {
                console.log(data.message);
            }
        });
    });
});
</script>

<script>
tinymce.init({
selector:'textarea.description',
width: 900,
height: 300
});
</script>
@endsection