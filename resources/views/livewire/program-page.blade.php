<div>
    <!-- Bagian Header -->
    <div class="bg-[#6B9B55] p-4 text-white text-center mb-4">
        <h1 class="text-lg font-semibold">Program Yayasan Bina Sejahtera</h1>
    </div>

    {{-- Card Image Start --}}
    <div data-aos="fade-up" class="py-10 px-4 sm:px-6 lg:px-8 mx-auto">
        @if($programs->count())
        <!-- Grid Card Program -->
        <div class="flex flex-wrap justify-center gap-4">
            @foreach ($programs as $program)
            <div class="max-w-sm w-full sm:w-1/2 lg:w-1/4 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 flex flex-col">
                <!-- Link ke halaman detail -->
                <a href="{{ route('program.show', ['slug' => $program->slug]) }}">
                    <div class="h-48 overflow-hidden">
                        <img src="{{ asset('storage/' . $program->image) }}" alt="{{ $program->judul }}" class="w-full h-full object-cover rounded-t-lg card-image">
                    </div>
                </a>
                <div class="p-5 flex-1">
                    <!-- Judul program -->
                    <a href="{{ route('program.show', ['slug' => $program->slug]) }}">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $program->judul }}</h5>
                    </a>
                    <!-- Deskripsi program -->
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 overflow-wrap break-words">{{ Str::limit($program->deskripsi, 100) }}</p>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Pagination Links -->
        <div class="mt-6">
            {{ $programs->links('pagination::tailwind') }} <!-- Tampilkan pagination -->
        </div>
        @else
        <!-- Jika tidak ada program yang tersedia -->
        <p class="text-center">Belum ada program yang tersedia.</p>
        @endif
    </div>
    {{-- Card Image End --}}
</div>
