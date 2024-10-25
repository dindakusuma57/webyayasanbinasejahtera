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
        <div class="absolute inset-0 z-0">
            <div class="slider h-full w-full relative">
                @foreach($heroes as $hero)
                    @foreach($hero->image as $image)
                        <div class="slide h-full w-full absolute bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset('storage/' . $image) }}');"></div>
                    @endforeach
                @endforeach
            </div>

            <div class="absolute inset-0 bg-gradient-to-r from-[rgba(4,9,30,0.7)] to-[rgba(4,9,30,0.7)] z-10"></div>
        </div>
        <div class="relative z-20 max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 py-10">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                @if($heroes->isNotEmpty())
                    @foreach($heroes as $hero)
                        <div class="flex-1">
                            <h1 style="width: 750px" class="block text-3xl font-bold text-white sm:text-4xl lg:text-6xl lg:leading-tight">
                                {{ $hero->judul }}
                            </h1>
                            <p style="width: 750px" class="mt-3 text-lg text-white">
                                {{ $hero->deskripsi }}
                            </p>

                            <div class="mt-7">
                                <a class="py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg bg-[#fff] text-[#002500] hover:bg-[#002500] hover:text-[#fff]" href="/ppdb">
                                    Daftar Sekarang
                                    <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="m9 18 6-6-6-6" />
                                    </svg>
                                </a>
                            </div>

                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
      {{-- Hero end --}}

      {{-- Statistik Pengunjung Start --}}
      <section>
      <div data-aos="fade-up" >
        <div class="pt-12 bg-gray-50 dark:bg-gray-900 sm:pt-20">
          <div class="max-w-screen-xl px-4 mx-auto sm:px-6 lg:px-8">
            <div class="max-w-4xl mx-auto text-center">
              <h2 class="text-3xl font-extrabold leading-9 text-[#002500] dark:text-white sm:text-4xl sm:leading-10">
                Trusted by developers
              </h2>
              <p class="mt-3 text-xl leading-7 text-gray-600 dark:text-gray-400 sm:mt-4">
                This package powers many production applications on many different hosting platforms.
              </p>
            </div>
          </div>
          <div class="pb-12 mt-10 bg-gray-50 dark:bg-gray-900 sm:pb-16">
            <div class="relative">
              <div class="absolute inset-0 h-1/2 bg-gray-50 dark:bg-gray-900"></div>
              <div class="relative max-w-screen-xl px-4 mx-auto sm:px-6 lg:px-8">
                <div class="max-w-4xl mx-auto">
                  <dl class="bg-white dark:bg-gray-800 rounded-lg shadow-lg sm:grid sm:grid-cols-3">
                    <div
                      class="flex flex-col p-6 text-center border-b border-gray-100 dark:border-gray-700 sm:border-0 sm:border-r">
                      <dt class="order-2 mt-2 text-lg font-medium leading-6 text-gray-500 dark:text-gray-400" id="item-1">
                        Stars on GitHub
                      </dt>
                      <dd class="order-1 text-5xl font-extrabold leading-none text-[#6B9B55] dark:text-indigo-100"
                        aria-describedby="item-1" id="starsCount">
                        0
                      </dd>
                    </div>
                    <div
                      class="flex flex-col p-6 text-center border-t border-b border-gray-100 dark:border-gray-700 sm:border-0 sm:border-l sm:border-r">
                      <dt class="order-2 mt-2 text-lg font-medium leading-6 text-gray-500 dark:text-gray-400">
                        Downloads
                      </dt>
                      <dd class="order-1 text-5xl font-extrabold leading-none text-[#6B9B55] dark:text-indigo-100"
                        id="downloadsCount">
                        0
                      </dd>
                    </div>
                    <div
                      class="flex flex-col p-6 text-center border-t border-gray-100 dark:border-gray-700 sm:border-0 sm:border-l">
                      <dt class="order-2 mt-2 text-lg font-medium leading-6 text-gray-500 dark:text-gray-400">
                        Sponsors
                      </dt>
                      <dd class="order-1 text-5xl font-extrabold leading-none text-[#6B9B55] dark:text-indigo-100"
                        id="sponsorsCount">
                        0
                      </dd>
                    </div>
                  </dl>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </section>
      {{-- Statistik Pengunjung end --}}

      {{-- Tentang section start --}}
      <section class="py-10 relative xl:mr-0 lg:mr-5 mr-0">
        <div data-aos="fade-up" class="w-full max-w-7xl px-4 md:px-5 lg:px-5 mx-auto">
            <div class="w-full justify-start items-center xl:gap-12 gap-10 grid lg:grid-cols-2 grid-cols-1">
                <div class="w-full flex-col justify-center lg:items-start items-center gap-10 inline-flex">
                    <div class="w-full flex-col justify-center items-start gap-8 flex">
                        <div class="flex-col justify-start lg:items-start items-center gap-4 flex">
                            <h6 class="text-gray-400 text-base font-normal leading-relaxed">Tentang Kami</h6>
                            <div class="w-full flex-col justify-start lg:items-start items-center gap-3 flex">
                                <h2
                                    class="text-[#002500] text-4xl font-bold font-manrope leading-normal lg:text-start text-center">
                                    {{ $tentang ? $tentang->judul : 'Judul tidak tersedia.' }}</h2>
                                <p
                                    class="text-gray-500 text-base font-normal leading-relaxed lg:text-start text-center">
                                    {{ $tentang ? $tentang->deskripsi : 'Deskripsi tidak tersedia.' }}</p>
                            </div>
                        </div>
                        <div class="py-10 w-full flex-col justify-center items-start gap-6 flex">
                            <div class="w-full justify-start items-center gap-8 grid md:grid-cols-2 grid-cols-1">
                                <div
                                    class="w-full h-full p-3.5 rounded-xl border border-gray-200 hover:border-gray-400 transition-all duration-700 ease-in-out flex-col justify-start items-start gap-2.5 inline-flex">
                                    <h4 class="text-[#002500] text-2xl font-bold font-manrope leading-9">20+ Tahun</h4>
                                    <p class="text-gray-500 text-base font-normal leading-relaxed">Berkomitmen untuk menciptakan generasi muda yang cerdas, berkarakter, dan siap menghadapi tantangan masa depan.</p>
                                </div>
                                <div
                                    class="w-full h-full p-3.5 rounded-xl border border-gray-200 hover:border-gray-400 transition-all duration-700 ease-in-out flex-col justify-start items-start gap-2.5 inline-flex">
                                    <h4 class="text-[#002500] text-2xl font-bold font-manrope leading-9">6+ Unit Sekolah
                                    </h4>
                                    <p class="text-gray-500 text-base font-normal leading-relaxed">Terdiri dari enam unit sekolah, termasuk SMP, SMA, serta SMK 1, SMK 2, SMK 3, dan SMK 4, berkomitmen menciptakan generasi muda yang cerdas dan berkarakter.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full lg:justify-start justify-center items-start flex">
                    <div
                        class="sm:w-[564px] w-full sm:h-[646px] h-full sm:bg-gray-100 rounded-3xl sm:border border-gray-200 relative">
                        <img class="sm:mt-5 sm:ml-5 w-full h-full rounded-3xl object-cover"
                        src="{{ $tentang ? asset('storage/' . $tentang->image) : '' }}" alt="Tentang Yayasan" />
                    </div>
                </div>
            </div>
        </div>
    </section>
                                            

      {{-- Tentang section end --}}

      {{-- Unit start --}}
      <section class="py-10 bg-[#6B9B55]">
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

        <!-- Slider -->
        <div data-hs-carousel='{
            "loadingClasses": "opacity-0",
            "dotsItemClasses": "hs-carousel-active:bg-blue-700 hs-carousel-active:border-blue-700 size-3 border border-gray-400 rounded-full cursor-pointer dark:border-neutral-600 dark:hs-carousel-active:bg-blue-500 dark:hs-carousel-active:border-blue-500",
            "slidesQty": {
            "xs": 1,
            "lg": 3
            }
            }' class="relative px-20" data-aos="fade-up">
        <div class="hs-carousel w-full overflow-hidden rounded-lg">
            <div class="relative min-h-72 -mx-1">
                <div class="hs-carousel-body absolute top-0 bottom-0 start-0 flex flex-nowrap opacity-0 transition-transform duration-700">
                    @foreach($units as $unit)
                    <div class="hs-carousel-slide px-1">
                        <div class="relative group overflow-hidden bg-gray-100 p-6 dark:bg-neutral-900 h-full flex justify-center items-center">
                            <a href="{{ $unit->link }}" class="absolute inset-0 z-10" style="display: block;"></a> <!-- Link di sini membungkus seluruh card -->

                            <a href="{{ $unit->link }}" class="relative text-2xl font-bold tracking-tight text-[#002500] z-10 transition-colors duration-300 group-hover:text-gray-200">
                                {{ $unit->judul }}
                            </a>

                            @if(!empty($unit->image))
                            <img src="{{ asset('storage/' . $unit->image) }}" alt="Unit Yayasan" class="absolute inset-0 w-full h-full object-cover transition-opacity duration-300 opacity-0 group-hover:opacity-100">
                            @endif

                            <div class="absolute inset-0 bg-[#002500] opacity-0 transition-opacity duration-300 group-hover:opacity-80"></div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <button type="button" class="hs-carousel-prev hs-carousel-disabled:opacity-50 hs-carousel-disabled:pointer-events-none absolute inset-y-0 start-0 inline-flex justify-center items-center w-[46px] h-full text-gray-800 hover:bg-gray-800/10 focus:outline-none focus:bg-gray-800/10 rounded-s-lg dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"
        style="margin-left: 20px">
            <span class="text-2xl" aria-hidden="true">
                <svg class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="m15 18-6-6 6-6"></path>
                </svg>
            </span>
            <span class="sr-only">Previous</span>
        </button>
        <button type="button" class="hs-carousel-next hs-carousel-disabled:opacity-50 hs-carousel-disabled:pointer-events-none absolute inset-y-0 end-0 inline-flex justify-center items-center w-[46px] h-full text-gray-800 hover:bg-gray-800/10 focus:outline-none focus:bg-gray-800/10 rounded-e-lg dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"
        style="margin-right: 20px">
            <span class="sr-only">Next</span>
            <span class="text-2xl" aria-hidden="true">
                <svg class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="m9 18 6-6-6-6"></path>
                </svg>
            </span>
        </button>
        <div class="hs-carousel-pagination flex justify-center absolute bottom-3 start-0 end-0 space-x-2"></div>
    </div>
    </section>
      {{-- Unit End --}}

      {{-- Manajemen Start --}}
      <section class="py-10">
            <div data-aos="fade-up" class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
                <div class="text-center">
                    <div class="relative flex flex-col items-center">
                        <h1 class="text-5xl font-bold dark:text-gray-200">Manajemen dan Pengurus<span class="text-[#6B9B55]"> Yayasan Bina Sejahtera</span></h1>
                        <div class="flex w-40 mt-2 mb-6 overflow-hidden rounded">
                            <div class="flex-1 h-2" style="background-color: #A3C1DA;"></div>
                            <div class="flex-1 h-2" style="background-color: #6B9B55;"></div>
                            <div class="flex-1 h-2" style="background-color: #002500;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div data-aos="fade-up" class="grid gap-10 sm:grid-cols-2 lg:grid-cols-3" style="margin-right:40px; margin-left: 40px">
                @foreach($manajemens as $manajemen)
                    <div>
                        <div class="relative overflow-hidden transition duration-300 transform rounded shadow-lg lg:hover:-translate-y-2 hover:shadow-2xl">
                            <a href="{{ $manajemen->link }}" class="block overflow-hidden h-64 rounded-lg">
                                <img src="{{ $manajemen ? asset('storage/' . $manajemen->image) : '' }}" alt="Manajemen Yayasan" class="object-cover w-full h-56 md:h-64 xl:h-80">
                            </a>
                            <div class="absolute inset-0 flex flex-col justify-center px-5 py-4 text-center transition-opacity duration-300 bg-black bg-opacity-75 opacity-0 hover:opacity-100">
                                <p class="mb-1 text-lg font-bold text-gray-100">{{ $manajemen->judul }}</p>
                                <p class="mb-4 text-xs text-gray-100">Manajemen Yayasan</p>
                                <p class="mb-4 text-xs tracking-wide text-gray-400">{{ $manajemen->deskripsi }}</p>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
    </section>
    {{-- Manajemen end --}}
</div>


<script>
    const targets = [
      { element: document.getElementById('starsCount'), count: 4670, suffix: '+' },
      { element: document.getElementById('downloadsCount'), count: 80000, suffix: '+' },
      { element: document.getElementById('sponsorsCount'), count: 100, suffix: '+' }
    ];

    const maxCount = Math.max(...targets.map(target => target.count));

    function animateCountUp(target, duration) {
      let currentCount = 0;
      const increment = Math.ceil(target.count / (duration / 10));

      const interval = setInterval(() => {
        currentCount += increment;
        if (currentCount >= target.count) {
          clearInterval(interval);
          currentCount = target.count;
          target.element.textContent = currentCount + target.suffix;
        } else {
          target.element.textContent = currentCount;
        }
      }, 10);
    }

    targets.forEach(target => {
      animateCountUp(target, maxCount / 100);
    });
  </script>


