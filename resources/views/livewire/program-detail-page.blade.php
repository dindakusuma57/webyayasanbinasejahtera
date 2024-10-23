<link rel="stylesheet" href="css/style.css">

<div class="bg-gray-100">
    <div class="bg-[#6B9B55] p-4 text-white text-center mb-4">
        <h1 class="text-lg font-semibold">
            <a href="{{ route('program.index') }}" class="text-white hover:underline">
                Program
            </a>
            &gt;
            <span>{{ $program->judul }}</span>
        </h1>

    </div>

    <div class="container mx-auto px-4 py-4 max-w-screen-lg">
        <div class="flex flex-wrap -mx-4">

            <div class="w-full bg-white rounded-lg shadow-lg p-8">
                <div class="flex flex-wrap -mx-4">

                    <div class="w-full md:w-1/2 px-4 mb-8">
                        @php
                            $images = is_array($program->image) ? $program->image : explode(',', $program->image);
                        @endphp

                        {{-- Gambar Utama --}}
                        <img src="{{ asset('storage/' . $images[0]) }}" alt="{{ $program->judul }}"
                            class="w-full h-auto rounded-lg shadow-md mb-4" id="mainImage"
                            style="width: 800px; height: 400px">

                        {{-- Thumbnail Gambar --}}
                        <div class="flex gap-4 py-4 justify-center overflow-x-auto">
                            @foreach ($images as $image)
                                <img src="{{ asset('storage/' . trim($image)) }}" alt="Thumbnail"
                                    class="size-16 sm:size-20 object-cover rounded-md cursor-pointer opacity-60 hover:opacity-100 transition duration-300"
                                    onclick="changeImage(this.src)">
                            @endforeach
                        </div>
                    </div>

                    <div class="w-full md:w-1/2 px-4">
                        <h2 class="text-3xl font-bold mb-2">{{ $program->judul }}</h2>
                        <p class="text-gray-700 mb-6">{!! nl2br(e($program->deskripsi)) !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function changeImage(src) {
            document.getElementById('mainImage').src = src;
        }
    </script>
</div>
