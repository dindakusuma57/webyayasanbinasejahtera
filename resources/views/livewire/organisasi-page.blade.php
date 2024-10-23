<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>

<div>
    <div class="bg-[#6B9B55] p-4 text-white text-center">
        <h1 class="text-lg font-semibold">Struktur Organisasi</h1>
    </div>

    <section data-aos="fade-up" class="py-5 px-4 sm:px-6 lg:px-8 mx-auto">
        <div class="max-w-xl mx-auto">
            @foreach($strukturs as $struktur)
            <div class="text-center">
                <div class="relative flex flex-col items-center">
                    <h1 class="text-4xl font-bold text-[#002500]">{{ $struktur->judul }}</h1>

                    <div class="py-5 md:w-1/3 md:pl-6">
                        @foreach($strukturs as $struktur)
                            @if(!empty($struktur->image)) 
                                <img src="{{ asset('storage/' . $struktur->image) }}" alt="Struktur Yayasan" class="w-full h-auto rounded-lg shadow-lg">
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
            @endforeach
        </div>


    </section>
</div>
