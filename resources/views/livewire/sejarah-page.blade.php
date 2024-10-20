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
    <section class="p-6 bg-white text-gray-800 flex flex-col md:flex-row">
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
                @if(!empty($sejarah->image)) <!-- Memeriksa apakah gambar tidak kosong -->
                    <img src="{{ asset('storage/' . $sejarah->image) }}" alt="Sejarah Yayasan" class="w-full h-auto rounded-lg shadow-lg">
                @endif
            @endforeach
        </div>
    </section>

    {{-- SEJARAH END --}}

    {{-- SEJARAH KEPENGURUSAN START --}}
    <section class="py-20">
        <div data-aos="fade-up" class="max-w-6xl mx-auto">
            <div class="text-center">
                <div class="mb-2 p-2 bg-[#6B9B55] border-2 border-[#6B9B55] rounded-full inline-block">
                    <span class="text-white font-semibold">Sejarah Kepengurusan</span>
                </div>
                <h1 class="text-[#6B9B55] text-5xl font-bold dark:text-gray-200">
                    Sejarah<span class="text-[#002500]"> Kepengurusan</span>
                </h1>

                <!-- Container for categories -->
                <div class="mt-8 p-6 bg-white rounded-full border-2 max-w-4sm mx-auto">
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                        <div class="p-4 bg-[#f0f0f0] rounded-full text-center">
                            <span class="text-[#6B9B55] font-semibold">Kategori 1</span>
                        </div>
                        <div class="p-4 bg-[#f0f0f0] rounded-full text-center">
                            <span class="text-[#6B9B55] font-semibold">Kategori 2</span>
                        </div>
                        <div class="p-4 bg-[#f0f0f0] rounded-full text-center">
                            <span class="text-[#6B9B55] font-semibold">Kategori 3</span>
                        </div>
                    </div>
                </div>

                <!-- New Container for Title, Description, and Image -->
                <div class="mt-12 p-6 bg-white rounded-lg border-2 shadow-lg max-w-4sm mx-auto">
                    <h2 class="text-[#6B9B55] text-3xl font-bold text-left">Tahun</h2>
                    <p class="mt-4 text-gray-700 text-center">
                        Ini adalah deskripsi singkat mengenai sejarah kepengurusan.
                        Di sini Anda dapat menjelaskan lebih lanjut tentang topik yang Anda angkat dan memberikan informasi yang relevan.
                    </p>
                    <div class="mt-6 flex justify-center">
                        <img src="path/to/your/image.jpg" alt="Deskripsi Gambar" class="rounded-lg shadow-md max-w-full h-auto" />
                    </div>
                </div>
            </div>
        </div>
    </section>



    {{-- SEJARAH END --}}

</div>
