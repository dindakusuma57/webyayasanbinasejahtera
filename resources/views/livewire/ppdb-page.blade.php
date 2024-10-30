<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
<link rel="stylesheet" href="css/style.css">

<div>
    <div class="bg-[#6B9B55] p-4 text-white text-center mb-4">
        <h1 class="text-lg font-semibold">Program Yayasan Bina Sejahtera</h1>
    </div>

    {{-- PENJELASAN PPDB START --}}
    <section data-aos="fade-up" class="py-5 px-4 sm:px-6 lg:px-8 mx-auto">
        <div class="max-w-xl mx-auto">
            @if($ppdbs->isEmpty())
                <div class="text-center">
                    <h1 class="text-4xl font-bold text-[#002500]">Tidak ada PPDB</h1>
                </div>
            @else
                @foreach($ppdbs as $ppdb)
                <div class="text-center">
                    <div class="relative flex flex-col items-center">
                        <h1 class="text-4xl font-bold text-[#002500]">{{ $ppdb->judul }}</h1>
                    </div>
                </div>
                @endforeach
            @endif
        </div>

        <div class="py-5">
            @php
                $fullText = $ppdb->deskripsi ?? ''; // Pastikan ini aman jika $ppdb tidak ada
                $limit = 1000;
                $shortText = strlen($fullText) > $limit ? substr($fullText, 0, $limit) . '...' : $fullText;
            @endphp

            <p id="short-text" class="mt-2 text-gray-700 text-justify">{{ $shortText }}</p>
            <p id="more-text" class="hidden mt-2 text-gray-700 text-justify">{{ $fullText }}</p>
        </div>

        <button id="toggle-btn" class="mt-4 text-white focus:outline-none">Baca Selengkapnya</button>
        <button id="hide-btn" class="hidden mt-4 text-white focus:outline-none">Baca Lebih Sedikit</button>
    </section>

    {{-- PENJELASAN PPDB END --}}

    {{-- Unit ppdb start --}}
    <section class="py-10 bg-[#6B9B55]">
        <div data-aos="fade-up" class="max-w-xl mx-auto">
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

        <div data-aos="fade-up" class="justify-center max-w-6xl px-4 py-4 mx-auto lg:py-0">
            <div class="grid grid-cols-1 gap-6 lg:grid-cols-4 md:grid-cols-2">
                @foreach($ppdbdetails as $ppdbdetail)
                    <div class="bg-white rounded-lg shadow-md dark:bg-gray-800 h-40 flex items-center justify-center transition-transform transform hover:scale-105 hover:bg-[#002500] group">
                        <a href="{{ $ppdbdetail->link }}" class="flex flex-col items-center justify-center w-full h-full p-5 text-center">
                            <span class="text-1xl font-bold tracking-tight text-gray-900 dark:text-gray-300 group-hover:text-[#fff]">
                                {{ $ppdbdetail->judul }}
                            </span>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    {{-- Unit ppdb End --}}
</div>

<script>
    const moreTextEl = document.getElementById('more-text');
    const shortTextEl = document.getElementById('short-text');
    const toggleBtnEl = document.getElementById('toggle-btn');
    const hideBtnEl = document.getElementById('hide-btn');

    toggleBtnEl.addEventListener('click', () => {
        shortTextEl.classList.add('hidden');
        moreTextEl.classList.remove('hidden');
        toggleBtnEl.classList.add('hidden');
        hideBtnEl.classList.remove('hidden');
    });

    hideBtnEl.addEventListener('click', () => {
        shortTextEl.classList.remove('hidden');
        moreTextEl.classList.add('hidden');
        toggleBtnEl.classList.remove('hidden');
        hideBtnEl.classList.add('hidden');
    });
</script>
