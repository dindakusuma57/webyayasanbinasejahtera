<script src="js/slider.js"></script>
<link rel="stylesheet" href="css/style.css">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>

<div>
    {{-- Hero start --}}
    <div class="relative w-full h-screen bg-gradient-to-r from-[rgba(4,9,30,0.7)] to-[rgba(4,9,30,0.7)] py-10 px-4 sm:px-6 lg:px-8 mx-auto overflow-hidden">
        <!-- Slider Wrapper -->
        <div class="absolute inset-0 z-0">
            <div class="slider h-full w-full relative">
                <!-- Slides (Background Images) -->
                @foreach($heroes as $hero)
                    @foreach($hero->image as $image)
                        <div class="slide h-full w-full absolute bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset('storage/' . $image) }}');"></div>
                    @endforeach
                @endforeach
            </div>
            <!-- Overlay (with opacity) -->
            <div class="absolute inset-0 bg-gradient-to-r from-[rgba(4,9,30,0.7)] to-[rgba(4,9,30,0.7)] z-10"></div>
        </div>
        <!-- Content on Top -->
        <div class="relative z-20 max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 py-10">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4"> <!-- Flexbox untuk mengatur letak -->
                @if($heroes->isNotEmpty())
                    @foreach($heroes as $hero)
                        <div class="flex-1"> <!-- Memungkinkan elemen untuk mengisi ruang -->
                            <h1 class="block text-3xl font-bold text-white sm:text-4xl lg:text-6xl lg:leading-tight">
                                {{ $hero->judul }}
                            </h1>
                            <p class="mt-3 text-lg text-white">
                                {{ $hero->deskripsi }}
                            </p>
                            <!-- Buttons -->
                            <div class="mt-7">
                                <a class="py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg bg-[#fff] text-blue-900 hover:bg-[#002500]" href="/register">
                                    Daftar Sekarang
                                    <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="m9 18 6-6-6-6" />
                                    </svg>
                                </a>
                            </div>
                            <!-- End Buttons -->
                        </div>
                    @endforeach
                @endif
            </div>
        </div>

    </div>
      {{-- Hero end --}}

      {{-- Tentang section start --}}
      <section class="py-20">
        <div data-aos="fade-up" class="max-w-6xl mx-auto">
            <div class="text-center">
                <h1 class="text-[#6B9B55] text-5xl font-bold dark:text-gray-200">
                    Tentang<span class="text-[#002500]"> Yayasan Bina Sejahtera</span>
                </h1>
                <div class="flex w-40 mt-2 mb-6 overflow-hidden rounded">
                    <div class="flex-1 h-2" style="background-color: #A3C1DA;"></div>
                    <div class="flex-1 h-2" style="background-color: #6B9B55;"></div>
                    <div class="flex-1 h-2" style="background-color: #002500;"></div>
                </div>
            </div>
            <div class="flex flex-wrap items-center justify-between">
                <div class="w-full md:w-1/2 text-left">
                    <p class="mb-12 text-base text-gray-500">
                        {{ $tentang ? $tentang->deskripsi : 'Deskripsi tidak tersedia.' }}
                    </p>
                </div>
                <div class="w-full md:w-1/2">
                    <img src="{{ $tentang ? asset('storage/' . $tentang->image) : '' }}" alt="Tentang Yayasan" class="w-full h-auto rounded-lg shadow-lg">
                </div>
            </div>
        </div>
    </section>

      {{-- Tentang section end --}}

      {{-- Unit start --}}
      <section class="py-20 bg-[#6B9B55]">
        <div data-aos="fade-up" class="max-w-xl mx-auto">
            <div class="text-center">
                <div class="relative flex flex-col items-center">
                    <h1 class="text-5xl font-bold dark:text-gray-200">Unit<span class="text-white"> Sekolah</span></h1>
                    <div class="flex w-40 mt-2 mb-6 overflow-hidden rounded">
                        <div class="flex-1 h-2" style="background-color: #A3C1DA;"></div>
                        <div class="flex-1 h-2" style="background-color: #6B9B55;"></div>
                        <div class="flex-1 h-2" style="background-color: #002500;"></div>
                    </div>
                </div>
                <p class="mb-12 text-base text-center text-white">
                    Berikut adalah unit-unit yang ada di Yayasan Bina Sejahtera.
                </p>
            </div>
        </div>

        <div data-aos="fade-up" class="justify-center max-w-6xl px-4 py-4 mx-auto lg:py-0">
            <div class="grid grid-cols-1 gap-6 lg:grid-cols-4 md:grid-cols-2">
                @foreach($units as $unit)
                    <div class="bg-white rounded-lg shadow-md dark:bg-gray-800 h-40 flex items-center justify-center transition-transform transform hover:scale-105 hover:bg-[#002500] group">
                        <div class="p-5 text-center">
                            <a href="{{ $unit->link }}" class="text-2xl font-bold tracking-tight text-gray-900 dark:text-gray-300 group-hover:text-[#fff]">
                                {{ $unit->judul }}
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        </section>
      {{-- Unit End --}}

      {{-- Manajemen Start --}}
      <section class="py-20">
            <div data-aos="fade-up" class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
              <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
                <span class="relative inline-block">
                  <svg viewBox="0 0 52 24" fill="currentColor" class="absolute top-0 left-0 z-0 hidden w-32 -mt-8 -ml-20 text-blue-gray-100 lg:w-32 lg:-ml-28 lg:-mt-10 sm:block">
                    <defs>
                      <pattern id="1d4040f3-9f3e-4ac7-b117-7d4009658ced" x="0" y="0" width=".135" height=".30">
                        <circle cx="1" cy="1" r=".7"></circle>
                      </pattern>
                    </defs>
                    <rect fill="url(#1d4040f3-9f3e-4ac7-b117-7d4009658ced)" width="52" height="24"></rect>
                  </svg>
                  <span class="relative">Manajemen</span>
                </span>
                dan Pengurus Yayasan Bina Sejahtera
              </h2>
              <p class="text-base text-gray-700 md:text-lg">
                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque rem aperiam, eaque ipsa quae.
              </p>
            </div>
            <div data-aos="fade-up" class="grid gap-10 sm:grid-cols-2 lg:grid-cols-3" style="margin-right:40px; margin-left: 40px">
                @foreach($manajemens as $manajemen)
                    <div>
                        <div class="relative overflow-hidden transition duration-300 transform rounded shadow-lg lg:hover:-translate-y-2 hover:shadow-2xl">
                            <a href="{{ $manajemen->link }}" class="block overflow-hidden h-64 rounded-lg">
                                <img src="{{ $manajemen ? asset('storage/' . $manajemen->image) : '' }}" alt="Manajemen Yayasan" class="object-cover w-full h-56 md:h-64 xl:h-80">
                            </a>
                            <div class="absolute inset-0 flex flex-col justify-center px-5 py-4 text-center transition-opacity duration-300 bg-black bg-opacity-75 opacity-0 hover:opacity-100">
                                <p class="mb-1 text-lg font-bold text-gray-100">{{ $manajemen->judul }}</p> <!-- Judul manajemen -->
                                <p class="mb-4 text-xs text-gray-100">Manajemen Yayasan</p> <!-- Keterangan tambahan jika diperlukan -->
                                <p class="mb-4 text-xs tracking-wide text-gray-400">{{ $manajemen->deskripsi }}</p> <!-- Deskripsi manajemen -->
                                <div class="flex items-center justify-center space-x-3">
                                    <a href="{{ $manajemen->link }}" class="text-white transition-colors duration-300 hover:text-teal-accent-400">
                                        <svg viewBox="0 0 24 24" fill="currentColor" class="h-5">
                                            <path d="M24,4.6c-0.9,0.4-1.8,0.7-2.8,0.8c1-0.6,1.8-1.6,2.2-2.7c-1,0.6-2,1-3.1,1.2c-0.9-1-2.2-1.6-3.6-1.6 c-2.7,0-4.9,2.2-4.9,4.9c0,0.4,0,0.8,0.1,1.1C7.7,8.1,4.1,6.1,1.7,3.1C1.2,3.9,1,4.7,1,5.6c0,1.7,0.9,3.2,2.2,4.1 C2.4,9.7,1.6,9.5,1,9.1c0,0,0,0,0,0.1c0,2.4,1.7,4.4,3.9,4.8c-0.4,0.1-0.8,0.2-1.3,0.2c-0.3,0-0.6,0-0.9-0.1c0.6,2,2.4,3.4,4.6,3.4 c-1.7,1.3-3.8,2.1-6.1,2.1c-0.4,0-0.8,0-1.2-0.1c2.2,1.4,4.8,2.2,7.5,2.2c9.1,0,14-7.5,14-14c0-0.2,0-0.4,0-0.6 C22.5,6.4,23.3,5.5,24,4.6z"></path>
                                        </svg>
                                    </a>
                                    <a href="{{ $manajemen->link }}" class="text-white transition-colors duration-300 hover:text-teal-accent-400">
                                        <svg viewBox="0 0 24 24" fill="currentColor" class="h-5">
                                            <path d="M22,0H2C0.895,0,0,0.895,0,2v20c0,1.105,0.895,2,2,2h11v-9h-3v-4h3V8.413c0-3.1,1.893-4.788,4.659-4.788 c1.325,0,2.463,0.099,2.795,0.143v3.24l-1.918,0.001c-1.504,0-1.795,0.715-1.795,1.763V11h4.44l-1,4h-3.44v9H22c1.105,0,2-0.895,2-2 V2C24,0.895,23.105,0,22,0z"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
    </section>
    {{-- Manajemen end --}}
</div>


