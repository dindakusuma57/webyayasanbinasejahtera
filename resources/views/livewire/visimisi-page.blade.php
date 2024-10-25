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
    <section class="py-10 relative">
        <div data-aos="fade-up" class="w-full max-w-7xl px-4 md:px-5 lg:px-5 mx-auto">
            <div class="w-full justify-start items-center gap-8 grid lg:grid-cols-2 grid-cols-1">
                @foreach($visis as $visi)
                <div class="w-full flex-col justify-start lg:items-start items-center gap-10 inline-flex">
                    <div class="w-full flex-col justify-start lg:items-start items-center gap-4 flex">
                        <h2 class="text-[#002500] text-4xl font-bold font-manrope leading-normal lg:text-start text-center">{{ $visi->judul }}</h2>
                        <p class="text-gray-500 text-base font-normal leading-relaxed lg:text-start text-center">{{ $visi->deskripsi }}</p>
                    </div>
                </div>
                <img class="lg:mx-0 mx-auto h-full rounded-3xl object-cover" src="{{ $visi ? asset('storage/' . $visi->image) : '' }}" alt="about Us image" />
            </div>
            @endforeach
        </div>
    </section>
                                            
    
    {{-- Visi End --}}
    
    <section class="p-10 bg-[#6B9B55] text-white flex flex-col md:flex-row">
        <section class="overflow-hidden">
        <div data-aos="fade-up" class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2">
                <div class="lg:pr-8 lg:pt-4">
                    <div class="lg:max-w-lg">
                        @foreach($misis as $misi)
                        <p class="mt-2 text-3xl font-bold tracking-tight text-white sm:text-4xl">{{ $misi->judul }}</p>
                        <dl class="mt-10 max-w-xl space-y-8 text-base leading-7 text-white lg:max-w-none">
                             <!-- Loop through each Visi -->
                                <div class="relative pl-9">
                                    <dt class="inline font-semibold text-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="absolute left-1 top-1 h-5 w-5 text-[#002500]">
                                            <path d="M3.196 12.87l-.825.483a.75.75 0 000 1.294l7.25 4.25a.75.75 0 00.758 0l7.25-4.25a.75.75 0 000-1.294l-.825-.484-5.666 3.322a2.25 2.25 0 01-2.276 0L3.196 12.87z"></path>
                                            <path d="M3.196 8.87l-.825.483a.75.75 0 000 1.294l7.25 4.25a.75.75 0 00.758 0l7.25-4.25a.75.75 0 000-1.294l-.825-.484-5.666 3.322a2.25 2.25 0 01-2.276 0L3.196 8.87z"></path>
                                            <path d="M10.38 1.103a.75.75 0 00-.76 0l-7.25 4.25a.75.75 0 000 1.294l7.25 4.25a.75.75 0 00.76 0l7.25-4.25a.75.75 0 000-1.294l-7.25-4.25z"></path>
                                        </svg>
                                        
                                    </dt>
                                    <dd class="inline">{{ $misi->deskripsi }}</dd> 
                                </div>
                            
                        </dl>
                    </div>
                </div>
                <img src="{{ $misi ? asset('storage/' . $misi->image) : '' }}" alt="Visi Yayasan" class="lg:mx-0 mx-auto h-full rounded-3xl object-cover" >
            </div>
            @endforeach
        </div>
        </section>
    </section>
    {{-- MISI END --}}

</div>
