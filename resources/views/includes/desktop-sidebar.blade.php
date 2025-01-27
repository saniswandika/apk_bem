<!-- Desktop sidebar -->
<aside
        class="z-20 hidden w-64 overflow-y-auto bg-white dark:bg-gray-800 md:block flex-shrink-0"
>
    <div class="py-4 text-gray-500 dark:text-gray-400">
        <a
                class="text-md text-center font-bold text-gray-800 dark:text-gray-200"
                href="{{ route('dashboard')}}"
        >
        <p class="text-center mt-3">
            PUSAT KONSERVASI PENYU
            PANTAI PANGUMBAHAN
        </p>
        </a>
       
        <ul class="mt-10">
            <li class="relative px-6 py-3">
                @if (request()->routeIs('dashboard'))
                    <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg"
                            aria-hidden="true"></span>
                @endif
        
                <a
                        class="inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100"
                        href="{{ route('dashboard')}}"
                >
                    <svg
                            class="w-5 h-5"
                            aria-hidden="true"
                            fill="none"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                    >
                        <path
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"
                        ></path>
                    </svg>
                    <span class="ml-4">Dashboard</span>
                </a>
            </li>
        </ul>
        <ul>
            <li class="relative px-6 py-3">
                @if (request()->routeIs('admin.buttons'))
                    <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg"
                        aria-hidden="true"></span>
                    @endif
                <a
                        class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                        href="{{ route('admin.buttons') }}"
                >
                <i class="fas fa-newspaper "></i>
                   
                    <span class="ml-4">Data Pengunjung</span>
                </a>
            </li>
            <li class="relative px-6 py-3">
                @if (request()->routeIs('admin.cards'))
                <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg"
                    aria-hidden="true"></span>
                @endif
                <a
                        class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                        href="{{ route('admin.cards') }}"
                >
                <i class="fas fa-tasks"></i>
                    <span class="ml-4">Data Penyu</span>
                </a>
            </li>
            <li class="relative px-6 py-3">
                @if (request()->routeIs('admin.charts'))
                <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg"
                    aria-hidden="true"></span>
                @endif
                <a
                        class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                        href="{{ route('admin.charts') }}"
                >
                <svg
                    class="w-5 h-5" classversion="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        viewBox="0 0 48 48" style="enable-background:new 0 0 48 48;" xml:space="preserve">
                            <path d="M47.988,21.94c-0.006-0.091-0.023-0.179-0.054-0.266c-0.011-0.032-0.019-0.063-0.033-0.094
                                c-0.048-0.103-0.108-0.199-0.191-0.283c-0.001-0.002-0.002-0.003-0.004-0.005L42,15.586V10c0-0.021-0.011-0.04-0.012-0.061
                                c-0.006-0.089-0.023-0.175-0.052-0.259c-0.011-0.032-0.019-0.062-0.033-0.093c-0.049-0.106-0.11-0.207-0.196-0.293l-9-9
                                c-0.085-0.085-0.186-0.146-0.291-0.195c-0.032-0.015-0.065-0.024-0.099-0.035c-0.081-0.027-0.164-0.044-0.249-0.05
                                C32.044,0.012,32.023,0,32,0H7C6.447,0,6,0.448,6,1v14.586l-5.706,5.706c-0.002,0.002-0.002,0.003-0.004,0.005
                                c-0.083,0.083-0.143,0.18-0.191,0.283c-0.014,0.03-0.022,0.062-0.033,0.094c-0.03,0.086-0.048,0.174-0.054,0.266
                                C0.011,21.961,0,21.979,0,22v19c0,0.552,0.447,1,1,1h5v5c0,0.552,0.447,1,1,1h34c0.553,0,1-0.448,1-1v-5h5c0.553,0,1-0.448,1-1V22
                                C48,21.979,47.989,21.961,47.988,21.94z M44.586,21H42v-2.586L44.586,21z M38.586,9H33V3.414L38.586,9z M8,2h23v8
                                c0,0.552,0.447,1,1,1h8v5v5H8v-5V2z M6,18.414V21H3.414L6,18.414z M40,46H8v-4h32V46z M46,40H2V23h5h34h5V40z"/>
                            <path d="M14.174,25.964h-3.026V38h3.009c1.553,0,2.729-0.524,3.528-1.573c0.799-1.048,1.198-2.524,1.198-4.428
                                c0-1.904-0.399-3.386-1.198-4.446C16.885,26.494,15.715,25.964,14.174,25.964z M16.647,33.843
                                c-0.13,0.528-0.315,0.967-0.553,1.318c-0.238,0.351-0.521,0.615-0.85,0.79c-0.329,0.176-0.686,0.264-1.071,0.264h-0.969v-8.466
                                h0.969c0.385,0,0.742,0.088,1.071,0.263c0.329,0.176,0.612,0.44,0.85,0.791c0.238,0.351,0.422,0.793,0.553,1.326
                                c0.13,0.533,0.195,1.156,0.195,1.87C16.843,32.702,16.778,33.316,16.647,33.843z"/>
                            <path d="M33.061,28.854c0.204-0.397,0.459-0.711,0.765-0.944c0.306-0.232,0.663-0.348,1.071-0.348
                                c0.737,0,1.337,0.334,1.802,1.003l1.173-1.428c-0.329-0.476-0.754-0.841-1.275-1.097c-0.521-0.255-1.128-0.382-1.819-0.382
                                c-0.669,0-1.278,0.156-1.827,0.467c-0.55,0.312-1.017,0.748-1.403,1.309c-0.385,0.562-0.683,1.23-0.892,2.006
                                c-0.21,0.777-0.315,1.624-0.315,2.542c0,0.918,0.105,1.762,0.315,2.533c0.21,0.771,0.504,1.436,0.884,1.997
                                c0.38,0.562,0.844,1.001,1.394,1.318s1.165,0.476,1.845,0.476c0.748,0,1.368-0.147,1.861-0.442
                                c0.493-0.295,0.898-0.68,1.215-1.156l-1.173-1.377c-0.193,0.295-0.433,0.544-0.722,0.748s-0.632,0.306-1.028,0.306
                                c-0.419,0-0.785-0.116-1.097-0.349c-0.312-0.232-0.569-0.546-0.773-0.943s-0.357-0.864-0.459-1.403
                                c-0.102-0.538-0.153-1.107-0.153-1.708c0-0.612,0.051-1.187,0.153-1.726C32.704,29.718,32.857,29.251,33.061,28.854z"/>
                            <path d="M27.808,27.392c-0.374-0.555-0.83-0.983-1.368-1.284c-0.538-0.3-1.142-0.45-1.81-0.45c-0.68,0-1.289,0.15-1.827,0.45
                                c-0.538,0.301-0.994,0.729-1.368,1.284c-0.374,0.555-0.657,1.218-0.85,1.989s-0.289,1.632-0.289,2.584s0.099,1.816,0.298,2.592
                                c0.198,0.777,0.485,1.443,0.858,1.998c0.374,0.555,0.827,0.986,1.36,1.292c0.533,0.306,1.139,0.459,1.819,0.459
                                c0.669,0,1.272-0.153,1.81-0.459c0.538-0.306,0.994-0.737,1.368-1.292c0.374-0.555,0.66-1.221,0.858-1.998
                                c0.198-0.776,0.298-1.64,0.298-2.592s-0.099-1.813-0.298-2.584S28.182,27.947,27.808,27.392z M26.72,33.69
                                c-0.091,0.539-0.229,1.006-0.416,1.403c-0.187,0.397-0.419,0.708-0.697,0.935c-0.278,0.227-0.604,0.34-0.978,0.34
                                s-0.7-0.113-0.978-0.34c-0.278-0.227-0.51-0.538-0.697-0.935c-0.187-0.397-0.326-0.864-0.417-1.403
                                c-0.091-0.538-0.136-1.113-0.136-1.725c0-0.612,0.045-1.187,0.136-1.726c0.091-0.538,0.229-1.002,0.417-1.394
                                c0.187-0.391,0.419-0.699,0.697-0.926c0.278-0.227,0.604-0.34,0.978-0.34c0.363,0,0.683,0.113,0.96,0.34
                                c0.278,0.227,0.51,0.535,0.697,0.926c0.187,0.392,0.329,0.856,0.425,1.394c0.096,0.539,0.145,1.114,0.145,1.726
                                C26.856,32.577,26.811,33.152,26.72,33.69z"/>
                        </svg>
       
                    <span class="ml-4">Publish Penelitian</span>
                </a>
            </li>
            <li class="relative px-6 py-3">
                @if (request()->routeIs('admin.forms'))
                <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg"
                    aria-hidden="true"></span>
                @endif
                <a
                        class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                        href="{{ route('admin.forms') }}"
                >
                <i class="fa-solid fa-share-from-square"></i>
                    <span class="ml-4">Pengajuan Peneliti</span>
                </a>
            </li>
            <li class="relative px-6 py-3">
                @if (request()->routeIs('admin.modals'))
                <span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg"
                    aria-hidden="true"></span>
                @endif
                <a
                        class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                        href="{{ route('admin.modals') }}"
                >
                <i class="fa fa-paper-plane" aria-hidden="true"></i>
                    <span class="ml-4">Update Berita</span>
                </a>
            </li>
        </ul>
    </div>
</aside>