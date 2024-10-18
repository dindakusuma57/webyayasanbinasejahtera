<div>
    <div class="bg-[#6B9B55] p-4 text-white text-center">
        <h1 class="text-lg font-semibold">Visi dan Misi</h1>
    </div>
    {{-- VISI START --}}
            <section class="p-6 bg-white text-gray-800 flex flex-col md:flex-row">
                <div class="md:w-2/3">
                    <h2 class="text-xl font-bold mb-4">Visi Yayasan Bina Sejahtera</h2>

                    @foreach($visis as $visi)
                        <!-- Memisahkan deskripsi per baris (poin) -->
                        @php
                            $visiPoints = explode("\n", $visi->deskripsi); // Memisahkan berdasarkan newline
                        @endphp

                        <ul class="list-disc pl-5">
                            @foreach($visiPoints as $point)
                                <li>{{ $point }}</li>
                            @endforeach
                        </ul>
                    @endforeach
                </div>

                <div class="md:w-1/3 md:pl-6">
                    @foreach($visis as $visi)
                        @if(!empty($visi->image)) <!-- Memeriksa apakah gambar tidak kosong -->
                            <img src="{{ asset('storage/' . $visi->image) }}" alt="Sejarah Yayasan" class="w-full h-auto rounded-lg shadow-lg">
                        @endif
                    @endforeach
                </div>
            </section>
    {{-- VISI END --}}

    {{-- MISI START --}}
    <section class="p-6 bg-white text-gray-800 flex flex-col md:flex-row">
        <div class="md:w-2/3">
            <h2 class="text-xl font-bold mb-4">Misi Yayasan Bina Sejahtera</h2>

            @foreach($misis as $misi)
                <!-- Memisahkan deskripsi per baris (poin) -->
                @php
                    $visiPoints = explode("\n", $misi->deskripsi); // Memisahkan berdasarkan newline
                @endphp

                <ul class="list-disc pl-5">
                    @foreach($visiPoints as $point)
                        <li>{{ $point }}</li>
                    @endforeach
                </ul>
            @endforeach
        </div>

        <div class="md:w-1/3 md:pl-6">
            @foreach($misis as $misi)
                @if(!empty($misi->image)) <!-- Memeriksa apakah gambar tidak kosong -->
                    <img src="{{ asset('storage/' . $misi->image) }}" alt="Sejarah Yayasan" class="w-full h-auto rounded-lg shadow-lg">
                @endif
            @endforeach
        </div>
    {{-- MISI END --}}

</div>
