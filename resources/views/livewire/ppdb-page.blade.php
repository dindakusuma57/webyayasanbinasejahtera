<div>
    <div class="bg-[#6B9B55] p-4 text-white text-center mb-4">
        <h1 class="text-lg font-semibold">Program Yayasan Bina Sejahtera</h1>
    </div>

    {{-- PENJELASAN PPDB START --}}
    <section class="py-10 px-4 sm:px-6 lg:px-8 mx-auto">
        <div class="max-w-xl mx-auto">
            @foreach($ppdbs as $ppdb)
            <div class="text-center">
                <div class="relative flex flex-col items-center">
                    <h1 class="text-4xl font-bold text-[#002500]">{{ $ppdb->judul }}</h1>

                </div>
            </div>
            @endforeach
        </div>
        <div class="py-10">
                    <p class="mt-2 text-gray-700 text-justify">{{ $ppdb->deskripsi }}</p>
        </div>
    </section>
    {{-- PENJELASAN PPDB END --}}

    {{-- Unit ppdb start --}}
    <section class="py-20 bg-[#6B9B55]">
        <div class="max-w-xl mx-auto">
            <div class="text-center">
                <div class="relative flex flex-col items-center">
                    <h1 class="text-4xl font-bold dark:text-gray-200">PPDB Yayasan Bina Sejahtera Tahun Ajaran 2024/2025</h1>
                    <div class="flex w-40 mt-2 mb-6 overflow-hidden rounded">
                        <div class="flex-1 h-2" style="background-color: #A3C1DA;"></div>
                        <div class="flex-1 h-2" style="background-color: #6B9B55;"></div>
                        <div class="flex-1 h-2" style="background-color: #002500;"></div>
                    </div>
                </div>
                <p class="mb-12 text-base text-center text-white">
                    Berikut adalah link ppdb online Yayasan Bina Sejahtera.
                </p>
            </div>
        </div>

        <div class="justify-center max-w-6xl px-4 py-4 mx-auto lg:py-0">
            <div class="grid grid-cols-1 gap-6 lg:grid-cols-4 md:grid-cols-2">
                @foreach($ppdbdetails as $ppdbdetail) <!-- Corrected variable name here -->
                    <div class="bg-white rounded-lg shadow-md dark:bg-gray-800 h-40 flex items-center justify-center transition-transform transform hover:scale-105 hover:bg-[#002500] group">
                        <div class="p-5 text-center">
                            <a href="{{ $ppdbdetail->link }}" class="text-1xl font-bold tracking-tight text-gray-900 dark:text-gray-300 group-hover:text-[#fff]">
                                {{ $ppdbdetail->judul }}
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    {{-- Unit ppdb End --}}
</div>
