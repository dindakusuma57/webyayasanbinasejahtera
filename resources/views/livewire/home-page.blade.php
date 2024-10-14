<script src="js/slider.js"></script>


<div>
    {{-- Hero start --}}
    <div class="relative w-full h-screen bg-gradient-to-r from-[#6B9B55] to-[#000000] py-10 px-4 sm:px-6 lg:px-8 mx-auto overflow-hidden">
      <!-- Slider Wrapper -->
      <div class="absolute inset-0 z-0">
        <div class="slider h-full w-full relative">
          <!-- Slides (Background Images) -->
          <div class="slide h-full w-full absolute bg-cover bg-center bg-no-repeat" style="background-image: url('image/landing1.png');"></div>
          <div class="slide h-full w-full absolute bg-cover bg-center bg-no-repeat" style="background-image: url('image/g2.JPG');"></div>
          <div class="slide h-full w-full absolute bg-cover bg-center bg-no-repeat" style="background-image: url('image/g3.jpg');"></div>
        </div>
        <!-- Overlay (with opacity) -->
        <div class="absolute inset-0 bg-gradient-to-r from-[#6B9B55] to-[#000000] opacity-50 z-10"></div>
      </div>
      <!-- Content on Top -->
      <div class="relative z-20 max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-2 gap-4 md:gap-8 xl:gap-20 md:items-center">
          <div>
            <h1 class="block text-3xl font-bold text-white sm:text-4xl lg:text-6xl lg:leading-tight">Selamat Datang<span class="text-[#FFF]"> di Yayasan Bina Sejahtera</span></h1>
            <p class="mt-3 text-lg text-white">Sekolah Impian Bersama, Kami Mewujudkan Pendidikan
                yang Komprehensif untuk Menciptakan Generasi Berprestasi,
                Berakhlak Mulia, dan Siap Menyongsong Masa Depan</p>
            <!-- Buttons -->
            <div class="mt-7 grid gap-3 w-full sm:inline-flex">
              <a class="py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg bg-[#fff] text-blue-900 hover:bg-[#002500]" href="/register">
                Daftar Sekarang
                <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="m9 18 6-6-6-6" />
                </svg>
              </a>
            </div>
            <!-- End Buttons -->
          </div>
        </div>
      </div>
    </div>
      {{-- Hero end --}}
      {{-- Tentang section start --}}
      <section class="py-20">
        <div class="max-w-6xl mx-auto">
            <div class="text-center">
                <div class="relative flex flex-col items-center">
                    <h1 class="text-[#6B9B55] text-5xl font-bold dark:text-gray-200">
                        Tentang<span class="text-[#002500]"> Yayasan Bina Sejahtera</span>
                      </h1>
                    <div class="flex w-40 mt-2 mb-6 overflow-hidden rounded">
                        <div class="flex-1 h-2" style="background-color: #A3C1DA;"></div>
                        <div class="flex-1 h-2" style="background-color: #6B9B55;"></div>
                        <div class="flex-1 h-2" style="background-color: #002500;"></div>

                    </div>
                </div>
            </div>
            <!-- New Row for Content -->
            <div class="flex flex-wrap items-center justify-between">
                <!-- Left Column (Text) -->
                <div class="w-full md:w-1/2 text-left">
                    <p class="mb-12 text-base text-gray-500">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus magni eius eaque? Pariatur numquam, odio quod nobis ipsum ex cupiditate?
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus magni eius eaque? Pariatur numquam, odio quod nobis ipsum ex cupiditate?
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus magni eius eaque? Pariatur numquam, odio quod nobis ipsum ex cupiditate?
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus magni eius eaque? Pariatur numquam, odio quod nobis ipsum ex cupiditate?
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus magni eius eaque? Pariatur numquam, odio quod nobis ipsum ex cupiditate?
                    </p>
                </div>
                <!-- Right Column (Image) -->
                <div class="w-full md:w-1/2">
                    <img src="image/landing1.png" alt="Tentang Yayasan" class="w-full h-auto rounded-lg shadow-lg">
                </div>
            </div>
        </div>
    </section>

      {{-- Tentang section end --}}

      {{-- Unit start --}}
      <section class="py-20 bg-[#6B9B55]"> <!-- Ganti warna latar belakang di sini -->
        <div class="max-w-xl mx-auto">
          <div class="text-center ">
            <div class="relative flex flex-col items-center">
              <h1 class="text-5xl font-bold dark:text-gray-200"> Unit<span class="text-white"> Sekolah </span> </h1>
              <div class="flex w-40 mt-2 mb-6 overflow-hidden rounded">
                <div class="flex-1 h-2" style="background-color: #A3C1DA;"></div>
                        <div class="flex-1 h-2" style="background-color: #6B9B55;"></div>
                        <div class="flex-1 h-2" style="background-color: #002500;"></div>
              </div>
            </div>
            <p class="mb-12 text-base text-center text-gray-500">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus magni eius eaque? Pariatur numquam, odio quod nobis ipsum ex cupiditate?
            </p>
          </div>
        </div>

        <div class="justify-center max-w-6xl px-4 py-4 mx-auto lg:py-0">
          <div class="grid grid-cols-1 gap-6 lg:grid-cols-4 md:grid-cols-2">
            <div class="bg-white rounded-lg shadow-md dark:bg-gray-800 h-40 flex items-center justify-center transition-transform transform hover:scale-105 hover:bg-[#002500] group">
              <div class="p-5 text-center">
                <a href="" class="text-2xl font-bold tracking-tight text-gray-900 dark:text-gray-300 group-hover:text-[#fff]">
                  SMP Bina Sejahtera
                </a>
              </div>
            </div>
            <div class="bg-white rounded-lg shadow-md dark:bg-gray-800 h-40 flex items-center justify-center transition-transform transform hover:scale-105 hover:bg-[#002500] group">
              <div class="p-5 text-center">
                <a href="" class="text-2xl font-bold tracking-tight text-gray-900 dark:text-gray-300 group-hover:text-[#fff]">
                    SMA Bina Sejahtera
                </a>
              </div>
            </div>
            <div class="bg-white rounded-lg shadow-md dark:bg-gray-800 h-40 flex items-center justify-center transition-transform transform hover:scale-105 hover:bg-[#002500] group">
              <div class="p-5 text-center">
                <a href="" class="text-2xl font-bold tracking-tight text-gray-900 dark:text-gray-300 group-hover:text-[#fff]">
                    SMK Bina Sejahtera 1
                </a>
              </div>
            </div>
            <div class="bg-white rounded-lg shadow-md dark:bg-gray-800 h-40 flex items-center justify-center transition-transform transform hover:scale-105 hover:bg-[#002500] group">
              <div class="p-5 text-center">
                <a href="" class="text-2xl font-bold tracking-tight text-gray-900 dark:text-gray-300 group-hover:text-[#fff]">
                    SMK Bina Sejahtera 2
                </a>
              </div>
            </div>
            <div class="bg-white rounded-lg shadow-md dark:bg-gray-800 h-40 flex items-center justify-center transition-transform transform hover:scale-105 hover:bg-[#002500] group">
              <div class="p-5 text-center">
                <a href="" class="text-2xl font-bold tracking-tight text-gray-900 dark:text-gray-300 group-hover:text-[#fff]">
                    SMK Bina Sejahtera 3
                </a>
              </div>
            </div>
            <div class="bg-white rounded-lg shadow-md dark:bg-gray-800 h-40 flex items-center justify-center transition-transform transform hover:scale-105 hover:bg-[#002500] group">
              <div class="p-5 text-center">
                <a href="" class="text-2xl font-bold tracking-tight text-gray-900 dark:text-gray-300 group-hover:text-[#fff]">
                    SMK Bina Sejahtera 4
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>

      {{-- Unit End --}}

      {{-- Manajemen Start --}}
      <section class="py-20">
        <div class="max-w-xl mx-auto">
          <div class="text-center">
            <div class="relative flex flex-col items-center">
              <h1 class="text-5xl font-bold text-[#6B9B55]"> Pendiri dan Manajemen<span class="text-[#002500]"> Yayasan Bina Sejahtera </span> </h1>
              <div class="flex w-40 mt-2 mb-6 overflow-hidden rounded">
                <div class="flex-1 h-2" style="background-color: #A3C1DA;"></div>
                        <div class="flex-1 h-2" style="background-color: #6B9B55;"></div>
                        <div class="flex-1 h-2" style="background-color: #002500;"></div>
              </div>
            </div>
            <p class="mb-12 text-base text-center text-gray-500">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus magni eius eaque? Pariatur numquam, odio quod nobis ipsum ex cupiditate?
            </p>
          </div>
        </div>
        <div class="justify-center max-w-6xl px-4 py-4 mx-auto lg:py-0">
          <div class="flex flex-wrap justify-center gap-6">
            <div class="bg-white rounded-lg shadow-md dark:bg-gray-800 w-full sm:w-1/2 lg:w-1/4">
              <a href="">
                <img src="image/bp_utang.png" alt="" class="object-cover w-full h-64 rounded-t-lg">
              </a>

              <!-- Box baru untuk teks di tengah -->
              <div class="p-3 bg-gray-100 text-center rounded-b-lg">
                <p class="text-gray-900 font-bold">Drs. H. Utang</p>
              </div>

              <div class="p-5 text-center">
                <a href="" class="text-2xl tracking-tight text-gray-700 dark:text-gray-300">
                  Pendiri dan Ketua Pembina Yayasan Bina Sejahtera
                </a>
              </div>
            </div>

            <div class="bg-white rounded-lg shadow-md dark:bg-gray-800 w-full sm:w-1/2 lg:w-1/4">
              <a href="">
                <img src="image/waateng.png" alt="" class="object-cover w-full h-64 rounded-t-lg">
              </a>

              <!-- Box baru untuk teks di tengah -->
              <div class="p-3 bg-gray-100 text-center rounded-b-lg">
                <p class="text-gray-900 font-bold">Ateng Sumantri</p>
              </div>

              <div class="p-5 text-center">
                <a href="" class="text-2xl  tracking-tight text-gray-700 dark:text-gray-300">
                  Ketua Pengurus Yayasan Bina Sejahtera 2019-2024
                </a>
              </div>
            </div>

            <div class="bg-white rounded-lg shadow-md dark:bg-gray-800 w-full sm:w-1/2 lg:w-1/4">
              <a href="">
                <img src="image/wanurul.jpg" alt="" class="object-cover w-full h-64 rounded-t-lg">
              </a>

              <!-- Box baru untuk teks di tengah -->
              <div class="p-3 bg-gray-100 text-center rounded-b-lg">
                <p class="text-gray-900 font-bold">Nurul Hidayati</p>
              </div>

              <div class="p-5 text-center">
                <a href="" class="text-2xl tracking-tight text-gray-700 dark:text-gray-300">
                  Ketua Pengawas Yayasan Bina Sejahtera 2019-2024
                </a>
              </div>
            </div>

            <!-- Tambahkan box tambahan di sini jika perlu -->
          </div>
        </div>
      </section>


      {{-- Manajemen end --}}
</div>
