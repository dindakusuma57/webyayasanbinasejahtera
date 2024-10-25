<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>

<div>
    <div class="bg-[#6B9B55] p-4 text-white text-center mb-4">
        <h1 class="text-lg font-semibold">Program Yayasan Bina Sejahtera</h1>
    </div>

    <div data-aos="fade-up" class="py-10 px-4 sm:px-6 lg:px-8 mx-auto bg-gray-50 sm:py-16 ">
        @if($programs->count())
            <div class="flex flex-wrap justify-center gap-4">
                @foreach ($programs as $program)
                    <div class="max-w-sm w-full sm:w-1/2 lg:w-1/4 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 flex flex-col">
                        <a href="{{ route('program.show', ['slug' => $program->slug]) }}">
                            <div class="h-48 overflow-hidden">
                                @php
                                    $images = $program->image ?? null;
                                @endphp

                                @if ($images && isset($images[0]))
                                    <img src="{{ asset('storage/' . $images[0]) }}" alt="{{ $program->judul }}" class="w-full h-full object-cover rounded-t-lg card-image">
                                @else
                                    <img src="{{ asset('storage/default-image.jpg') }}" alt="Default image" class="w-full h-full object-cover rounded-t-lg card-image">
                                @endif
                            </div>
                        </a>
                        <div class="p-5 flex-1">
                            <a href="{{ route('program.show', ['slug' => $program->slug]) }}">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $program->judul }}</h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 overflow-wrap break-words">{{ Str::limit($program->keterangan, 100) }}</p>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="mt-6">
                {{ $programs->links('pagination::tailwind') }}
            </div>
        @else
            <p class="text-center">Belum ada program yang tersedia.</p>
        @endif
    </div>

    {{-- Card Image End --}}
</div>
