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
        <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">

    <div class="container grid px-6 mx-auto">
        <div class="mt-10">
             <h2 class="text-xl text-gray-800 font-bold leading-tight">TELUR PENYU 2022</h2>
            <p class="mb-2 monserat text-gray-600 text-sm">Data Perbulan</p>
        </div>
        <canvas id="myChart" style="width:200%;max-width:1150px"></canvas>
    </div>
    
   
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
    <script>

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
    <script>
    let elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));

        elems.forEach(function(html) {
            let switchery = new Switchery(html,  { size: 'small' });
        });
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
