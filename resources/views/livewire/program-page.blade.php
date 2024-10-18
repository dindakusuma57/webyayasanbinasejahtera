<div>
    <div class="bg-[#6B9B55] p-4 text-white text-center mb-4">
        <h1 class="text-lg font-semibold">Program Yayasan Bina Sejahtera</h1>
    </div>

    {{-- Card Image Start --}}
    <div class="py-10 px-4 sm:px-6 lg:px-8 mx-auto">
        <div class="flex flex-wrap justify-center gap-4"> <!-- Menggunakan Flexbox untuk mengatur card -->
            @foreach ($programs as $program) <!-- Menggunakan foreach untuk menampilkan setiap program -->
            <div class="max-w-sm w-full sm:w-1/2 lg:w-1/4 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 flex flex-col">
                <a href="#">
                    <div class="h-48 overflow-hidden"> <!-- Kontainer untuk gambar dengan tinggi tetap -->
                        <img src="{{ asset('storage/' . $program->image) }}" alt="{{ $program->judul }}" class="w-full h-full object-cover rounded-t-lg"> <!-- Gambar dengan ukuran konsisten -->
                    </div>
                </a>
                <div class="p-5 flex-1"> <!-- Menggunakan flex-1 untuk membuat area konten fleksibel -->
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $program->judul }}</h5> <!-- Mengambil judul dari field judul -->
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 overflow-wrap break-words">{{ $program->deskripsi }}</p> <!-- Mengambil deskripsi dari field deskripsi -->
                </div>
            </div>
            @endforeach
        </div>
    </div>
    {{-- Card Image End --}}
</div>
