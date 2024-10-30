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
    <section class="p-10 bg-[#FFF] text-[#6B9B55] flex flex-col md:flex-row">
        <section class="overflow-hidden">
            <div data-aos="fade-up" class="mx-auto max-w-7xl px-6 lg:px-8">
                @foreach($visis as $visi)
                <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2">
                    <div class="lg:pr-8 lg:pt-4">
                        <div class="lg:max-w-lg">
                            <p class="mt-2 text-3xl font-bold tracking-tight text-[#002500] sm:text-4xl">{{ $visi->judul }}</p>
                            <dl class="mt-10 max-w-xl space-y-8 text-base leading-7 text-[#002500] lg:max-w-none">
                                @php
                                    $points = explode("\n", $visi->deskripsi);
                                @endphp
                                @foreach($points as $index => $point)
                                <div class="relative pl-9">
                                    <dt class="inline font-semibold text-[#002500]">
                                        <span class="absolute left-1 top-1 h-5 w-5 text-[#002500]">{{ $index + 1 }}.</span>
                                    </dt>
                                    <dd class="inline">{{ $point }}</dd>
                                </div>
                                @endforeach
                            </dl>
                        </div>
                    </div>
                    <img src="{{ $visi ? asset('storage/' . $visi->image) : '' }}" alt="Visi Yayasan" class="lg:mx-0 mx-auto h-full rounded-3xl object-cover">
                </div>
                @endforeach
            </div>
        </section>
    </section>
    {{-- Visi End --}}

    <!-- View Blade Template -->
    <section class="p-10 bg-[#6B9B55] text-white flex flex-col md:flex-row">
        <section class="overflow-hidden">
            <div data-aos="fade-up" class="mx-auto max-w-7xl px-6 lg:px-8">
                @foreach($misis as $misi)
                <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2">
                    <img src="{{ $misi ? asset('storage/' . $misi->image) : '' }}" alt="Visi Yayasan" class="lg:mx-0 mx-auto h-full rounded-3xl object-cover">
                    <div class="lg:pr-8 lg:pt-4">
                        <div class="lg:max-w-lg">
                            <p class="mt-2 text-3xl font-bold tracking-tight text-white sm:text-4xl">{{ $misi->judul }}</p>
                            <dl class="mt-10 max-w-xl space-y-8 text-base leading-7 text-white lg:max-w-none">
                                @php
                                    $points = explode("\n", $misi->deskripsi);
                                @endphp
                                @foreach($points as $index => $point)
                                <div class="relative pl-9">
                                    <dt class="inline font-semibold text-white">
                                        <span class="absolute left-1 top-1 h-5 w-5 text-[#FFF]  ">{{ $index + 1 }}.</span>
                                    </dt>
                                    <dd class="inline">{{ $point }}</dd>
                                </div>
                                @endforeach
                            </dl>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </section>
    </section>



    {{-- MISI END --}}

</div>
