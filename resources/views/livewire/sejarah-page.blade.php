<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>

<div>
    <div class="bg-[#6B9B55] p-4 text-white text-center">
        <h1 class="text-lg font-semibold">Sejarah</h1>
    </div>

    {{-- SEJARAH START --}}
    <section class="p-10 bg-white text-black-500 flex flex-col md:flex-row">
        <div data-aos="fade-up" class="md:w-2/3">
            <h2 class="text-xl font-bold mb-4">Sejarah Yayasan Bina Sejahtera</h2>

            @foreach($sejarahs as $sejarah)
                <p>
                    {{ $sejarah->deskripsi }}
                </p>
            @endforeach
        </div>

        <div class="md:w-1/3 md:pl-6">
            @foreach($sejarahs as $sejarah)
                @if(!empty($sejarah->image))
                    <img src="{{ asset('storage/' . $sejarah->image) }}" alt="Sejarah Yayasan" class="w-full h-auto rounded-lg shadow-lg">
                @endif
            @endforeach
        </div>
    </section>
    {{-- SEJARAH END --}}

    {{-- SEJARAH KEPENGURUSAN START --}}
    <section class="py-10">
        <div data-aos="fade-up" class="max-w-6xl mx-auto">
            <div class="text-center">
                <div class="mb-2 p-2 bg-[#6B9B55] border-2 border-[#6B9B55] rounded-full inline-block">
                    <span class="text-white font-semibold">Sejarah Kepengurusan</span>
                </div>
                <h1 class="text-[#6B9B55] text-5xl font-bold dark:text-gray-200">
                    Sejarah<span class="text-[#002500]"> Kepengurusan</span>
                </h1>

                <!-- Kategori Pengurus -->
                <div class="mt-8 p-6 bg-white rounded-full border-2 max-w-4sm mx-auto">
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4" >
                        @foreach ($kepengurusans as $kepengurusan)
                            <div class="p-4 bg-[#f0f0f0] rounded-full text-center" style="margin-inline-end: auto">
                                <span class="text-[#6B9B55] font-bold">{{ $kepengurusan->categorypengurus->tahun }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Detail Kepengurusan -->
                @foreach ($kepengurusans as $kepengurusan)
                <div class="mt-12 p-6 bg-white rounded-lg border-2 shadow-lg max-w-4sm mx-auto">
                    <h2 class="text-[#6B9B55] text-3xl font-bold text-left">{{ $kepengurusan->judul }}</h2>
                    <p class="mt-4 text-gray-700 text-left">
                        {{ $kepengurusan->deskripsi }}
                    </p>
                    <div class="mt-6 flex justify-left">
                        <img src="{{ asset('storage/' . $kepengurusan->image) }}" alt="{{ $kepengurusan->judul }}" class="rounded-lg shadow-md max-w-full h-auto" style="width: 300px; height:300px" />
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- SEJARAH END --}}

</div>
