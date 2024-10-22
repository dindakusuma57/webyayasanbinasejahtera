<div>
    <div class="bg-[#6B9B55] p-4 text-white text-center mb-4">
        <h1 class="text-lg font-semibold">Program Yayasan Bina Sejahtera</h1>
    </div>

<div class="max-w-7xl mx-auto py-5 px-4 sm:px-6 lg:px-8">
    <div class="bg-white rounded-lg shadow-md p-6">
        <div class="mb-4">
            <img src="{{ asset('storage/' . $program->image) }}" alt="{{ $program->judul }}" class="w-full h-80 rounded-lg">
        </div>
        <h1 class="text-3xl font-bold mb-4">{{ $program->judul }}</h1>
        <div class="prose max-w-none text-gray-700">
            {!! nl2br(e($program->deskripsi)) !!}
        </div>
        <a href="{{ route('program.index') }}" class="inline-block mt-4 text-blue-500 hover:underline">Kembali ke daftar program</a>
    </div>
</div>
</div>
