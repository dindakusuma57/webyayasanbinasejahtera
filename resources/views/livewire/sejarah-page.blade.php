<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>

<div>
    <div class="bg-[#6B9B55] p-4 text-white text-center">
        <h1 class="text-lg font-semibold">Sejarah</h1>
    </div>

    {{-- SEJARAH START --}}
    <section class="p-10 bg-white text-gray-500 flex flex-col md:flex-row">
        <div data-aos="fade-up" class="md:w-2/3">
            <h2 class="text-xl font-bold mb-4">Sejarah Yayasan Bina Sejahtera</h2>

            @foreach($sejarahs as $sejarah)
                <p>
                    {{ $sejarah->deskripsi }}
                </p>
            @endforeach
        </div>

        <div class="md:w-1/3 md:pl-6">
            @foreach($sejarahs as $sejarah)
                @if(!empty($sejarah->image))
                    <img src="{{ asset('storage/' . $sejarah->image) }}" alt="Sejarah Yayasan" class="sm:mt-5 sm:ml-5 w-full h-full rounded-3xl object-cover">
                @endif
            @endforeach
        </div>
    </section>
    {{-- SEJARAH END --}}

    {{-- SEJARAH KEPENGURUSAN START --}}
    <section class="py-10">
        <div data-aos="fade-up" class="max-w-6xl mx-auto">
            <div class="text-center">
                <div class="mb-2 p-2 bg-[#6B9B55] border-2 border-[#6B9B55] rounded-full inline-block">
                    <span class="text-white font-semibold">Sejarah Kepengurusan</span>
                </div>
                <h1 class="text-[#6B9B55] text-5xl font-bold dark:text-gray-200">
                    Sejarah<span class="text-[#002500]"> Kepengurusan</span>
                </h1>

                <!-- Kategori Pengurus -->
                <div class="mt-8 p-6 bg-white rounded-full border-2 max-w-4sm mx-auto items-center text-white">
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                        @foreach ($kepengurusans as $index => $kepengurusan)
                        <button onclick="setActive(this)">
                            <div class="p-4 bg-[#6B9B55] rounded-full text-center category-item {{ $index === 0 ? 'bg-[#004d00] text-white' : '' }} hover:bg-[#002500] hover:text-[#FFF] font-bold"
                                 data-category="{{ $kepengurusan->categorypengurus->tahun }}">
                                <span>{{ $kepengurusan->categorypengurus->tahun }}</span>
                            </div>
                        </button>

                        @endforeach
                    </div>
                </div>

                <!-- Detail Kepengurusan -->
                @foreach ($kepengurusans as $index => $kepengurusan)
                <div class="mt-12 p-6 bg-white rounded-lg border-2 shadow-lg max-w-4sm mx-auto kepengurusan-detail" data-category="{{ $kepengurusan->categorypengurus->tahun }}" style="{{ $index === 0 ? 'display: block;' : 'display: none;' }}">
                    <h2 class="text-[#6B9B55] text-3xl font-bold text-left">{{ $kepengurusan->judul }}</h2>
                    @php
                    $points = explode("\n", $kepengurusan->deskripsi);
                    @endphp
                    @foreach ($points as $point)
                        <p class="mt-1 flex items-center">
                        <i class="fab fa-instagram mr-2 text-white"></i>
                            {{ $point }}
                        </p>
                        @endforeach
                    <div class="mt-6 flex justify-left">
                        <img src="{{ asset('storage/' . $kepengurusan->image) }}" alt="{{ $kepengurusan->judul }}" class="rounded-lg shadow-md max-w-full h-auto" style="width: 300px; height:300px" />
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    {{-- SEJARAH END --}}
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const categoryItems = document.querySelectorAll('.category-item');
        const kepengurusanDetails = document.querySelectorAll('.kepengurusan-detail');

        function showCategoryDetails(category) {
            kepengurusanDetails.forEach(detail => {
                detail.style.display = detail.getAttribute('data-category') === category ? 'block' : 'none';
            });
        }

        const firstCategory = categoryItems[0].getAttribute('data-category');
        showCategoryDetails(firstCategory);

        categoryItems.forEach(item => {
            item.addEventListener('click', function () {
                const selectedCategory = this.getAttribute('data-category');

                categoryItems.forEach(item => item.classList.remove('active'));
                this.classList.add('active');

                showCategoryDetails(selectedCategory);
            });
        });
    });

    function setActive(button) {
    document.querySelectorAll('.category-item').forEach(item => {
        item.classList.remove('bg-[#004d00]', 'text-white');
        item.classList.add('bg-[#6B9B55]', 'text-white');
    });

    button.firstElementChild.classList.remove('bg-[#6B9B55]', 'text-white');
    button.firstElementChild.classList.add('bg-[#004d00]', 'text-white');
}
</script>

