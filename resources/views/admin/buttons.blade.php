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
        <style>
            #zoomC {
                    /* (A) DIMENSIONS */
                    width: 600px;
                    height: 338px;
                    
                    /* (B) BACKGROUND IMAGE */
                    background: url("music.jpg");
                    background-position: center;
                    background-size: cover;
                    }
        </style>

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
     {{-- @if(session()->has('message')) --}}
<div class="container grid px-6 mx-auto">
    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
        Tables
    </h2>
    <!-- export to pdf-->
    <div class="flex justify-end">
        <a href="{{ route('export-users') }}" class="text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2"
        >Export Users</a>
    </div>
    

    <!-- With actions -->
    <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
        Table with actions
    </h4>
    <div class="w-full overflow-hidden rounded-lg shadow-xs">
        <div class="w-full overflow-x-auto">
            <table id="myTable" class="w-full whitespace-no-wrap">
                <thead>
                    <tr
                        class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                        <th class="px-4 py-3">No</th>
                        <th class="px-4 py-3">Nama pengunjung</th>
                        <th class="px-4 py-3">Total Bayar </th>
                        <th class="px-4 py-3">Status pembayaran</th>
                        <th class="px-4 py-3">Date</th>
                        <th class="px-4 py-3">aksi lihat pembayaran</th>
                    </tr>
                </thead>
                @php
                    $i = 1 
                @endphp
                <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                         @foreach ($data as $post)
                            <tr class="text-gray-700 dark:text-gray-400">
                                <td>
                                {{ $i++ }} 
                                </td>
                                <td class="px-4 py-3">
                                    <div class="flex items-end text-sm">
                                        <!-- Avatar with inset shadow -->
                                        
                                        <div>
                                            <p class="font-semibold">{{ $post->name }}</p>
                                            <p class="text-xs text-gray-600 dark:text-gray-400">
                                                {{ $post->jumlah_pengunjung }} orang
                                            </p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    Rp.{{ $post->total_bayar }}
                                </td>
                                <td class="px-4 py-3 text-xs">
                                    <span
                                        class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                                        {{ $post->status->name }}
                                    </span>
                                </td>
                                <td class="px-4 py-3 text-sm"  data-bs-toggle="modal" >
                                    {{ $post->created_at->format('d-m-Y')  }}
                                </td>
                                <td class="px-4 py-3">
                                    <div class="flex items-center space-x-4 text-sm">
                                        <button type="button" class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:focus:ring-yellow-900"
                                            data-bs-toggle="modal" data-bs-target="#exampleModalXl{{$post->id}}">Detail Pengujung</button>
                                    </div>
                                    
                                </td>
                            </tr>
                        @endforeach
                        <div>                        
                </tbody>
        </table>    
    </div>
    {{-- aksi konfirmasi status pembayaran --}}
        @foreach($data as $post)
             <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto" id="exampleModalXl{{$post->id}}" tabindex="-1" aria-labelledby="exampleModalXlLabel" aria-modal="true" role="dialog">
                    <div class="modal-dialog modal-xl relative w-auto pointer-events-none">
                            <div class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                                    <div class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                                            <h5 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalXlLabel">
                                                Detail
                                            </h5>
                                            <button type="button"
                                                class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body relative p-4">
                 
                                          
                                                    <form action="{{ route('admin.buttons.update',[$post->id]) }}"  method="post" enctype="multipart/form-data">
                                                        @csrf
                                                        @method('PUT')  
                                                      
                                                                <div class="w-full md:w-1/2 px-3 mb-10 md:mb-">
                                                                    <label  class="block uppercase tracking-wide text-gray-700 text-md font-bold mb-2 " for="grid-first-name">
                                                                            Ubah Status Pembayaran
                                                                        </label>
                                                                        <select name="status_id" class="block w-full mt-1 rounded-md">
                                                                            @foreach ($categories as $category)
                                                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                </div>
                                                                <label  class="flex justify-center block uppercase tracking-wide text-gray-700 text-md font-bold mb-2 " for="grid-first-name">
                                                                            Bukti pembayaran
                                                                    </label>
                                                                <div class="mb-4 flex justify-center">
                                                                    
                                                                            <img id="zoomC" src="{{ url('imagineprofil/' . $post->upload_pembayaran) }}" class="max-w-full h-36 rounded-lg" alt="">
                                                                 </div>
                                                                <label  class="block uppercase tracking-wide text-gray-700 text-md font-bold mb-2 " for="grid-first-name">
                                                                           Detail Pengunjung
                                                                </label>
                                                            <div class="grid gap-6 mb-6 md:grid-cols-2">
                                                                
                                                                <div>
                                                                    <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">nama pengunjung</label>
                                                                    <input disabled type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="  {{ $post->name }}" required="">
                                                                </div>
                                                                <div>
                                                                    <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">tanggal pembayaran</label>
                                                                    <input disabled type="text" id="last_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="  {{ $post->updated_at->format('d-m-Y')  }}" required="">
                                                                </div>
                                                                <div>
                                                                    <label for="company" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">tanggal masuk kawasan</label>
                                                                    <input disabled type="text" id="company" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="  {{ $post->tanggal->format('d-m-y') }}" required="">
                                                                </div>  
                                                                <div>
                                                                    <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Phone number</label>
                                                                    <input disabled type="tel" id="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="{{ $post->No_Hp}}" required="">
                                                                </div>
                                                                <div>
                                                                    <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Status pembaayaran</label>
                                                                    <input disabled type="tel" id="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="{{ $post->status->name}}" required="">
                                                                </div>
                                                                <div>
                                                                    <label for="visitors" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">jumlah pengunjung</label>
                                                                    <input disabled type="number" id="visitors" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="{{ $post->jumlah_pengunjung }}" required="">
                                                                </div>
                                                            </div>
                                                            <div class="mb-6">
                                                                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Email address</label>
                                                                <input disabled type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="{{ $post->email }}" required="">
                                                            </div>
                                                            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                                                        </form>
                                        </div>
                                </div>
                            </div>
                        </div>
                </div> 
            @endforeach}
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script src="http://code.jquery.com/jquery.js"></script>

<script src="https://cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>

            <script>
                $(function() {
                    $('#myTable').DataTable();
                });
            </script>
                  <script>
                        // CREDITS : https://www.cssscript.com/image-zoom-pan-hover-detail-view/
                var addZoom = (target) => {
                // (A) GET CONTAINER + IMAGE SOURCE
                let container = document.getElementById(target),
                    imgsrc = container.currentStyle || window.getComputedStyle(container, false);
                    imgsrc = imgsrc.backgroundImage.slice(4, -1).replace(/"/g, "");
                
                // (B) LOAD IMAGE + ATTACH ZOOM
                let img = new Image();
                img.src = imgsrc;
                img.onload = () => {
                    // (B1) CALCULATE ZOOM RATIO
                    let ratio = img.naturalHeight / img.naturalWidth,
                        percentage = ratio * 100 + "%";
                
                    // (B2) ATTACH ZOOM ON MOUSE MOVE
                    container.onmousemove = (e) => {
                    let rect = e.target.getBoundingClientRect(),
                        xPos = e.clientX - rect.left,
                        yPos = e.clientY - rect.top,
                        xPercent = xPos / (container.clientWidth / 100) + "%",
                        yPercent = yPos / ((container.clientWidth * ratio) / 100) + "%";
                
                    Object.assign(container.style, {
                        backgroundPosition: xPercent + " " + yPercent,
                        backgroundSize: img.naturalWidth + "px"
                    });
                    };
                
                    // (B3) RESET ZOOM ON MOUSE LEAVE
                    container.onmouseleave = (e) => {
                    Object.assign(container.style, {
                        backgroundPosition: "center",
                        backgroundSize: "cover"
                    });
                    };
                }
                };
                
                // (C) ATTACH FOLLOW ZOOM
                window.onload = () => { addZoom("zoomC"); };
            </script>
            
@endsection