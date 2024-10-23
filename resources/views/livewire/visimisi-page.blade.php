<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<link rel="stylesheet" href="css/style.css">
<script>
    AOS.init();
</script>

<div>
    <div class="bg-[#6B9B55] p-4 text-white text-center">
        <h1 class="text-lg font-semibold">Visi dan Misi</h1>
    </div>
    {{-- VISI START --}}
    <section class="p-6 bg-white text-gray-800 flex flex-col md:flex-row">
        <div data-aos="fade-up" class="md:w-2/3">
            <h2 class="text-xl font-bold mb-4">Visi Yayasan Bina Sejahtera</h2>

            @foreach($visis as $visi)
                @php
                    $visiPoints = explode("\n", $visi->deskripsi);
                @endphp

                <ul class="list-disc pl-5">
                    @foreach($visiPoints as $point)
                        <li>{{ $point }}</li>
                    @endforeach
                </ul>
            @endforeach
        </div>

        <div class="md:w-1/3 md:pl-6 flex items-center justify-center">
            @foreach($visis as $visi)
                @if(!empty($visi->image))
                    <img src="{{ asset('storage/' . $visi->image) }}" alt="Sejarah Yayasan" class="h-48 w-full object-cover rounded-lg shadow-lg fixed-image">
                @endif
            @endforeach
        </div>
    </section>

    <section class="p-6 bg-white text-gray-800 flex flex-col md:flex-row">
        <div data-aos="fade-up" class="md:w-2/3">
            <h2 class="text-xl font-bold mb-4">Misi Yayasan Bina Sejahtera</h2>

            @foreach($misis as $misi)
                @php
                    $misiPoints = explode("\n", $misi->deskripsi); 
                @endphp

                <ul class="list-disc pl-5">
                    @foreach($misiPoints as $point)
                        <li>{{ $point }}</li>
                    @endforeach
                </ul>
            @endforeach
        </div>

        <div class="md:w-1/3 md:pl-6 flex items-center justify-center">
            @foreach($misis as $misi)
                @if(!empty($misi->image))
                    <img src="{{ asset('storage/' . $misi->image) }}" alt="Sejarah Yayasan" class="h-48 w-full object-cover rounded-lg shadow-lg fixed-image">
                @endif
            @endforeach
        </div>
    </section>
    {{-- MISI END --}}

</div>
