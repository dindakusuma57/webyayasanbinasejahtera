<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
@livewireStyles

<div>
    <div class="bg-[#6B9B55] p-4 text-white text-center mb-4">
        <h1 class="text-lg font-semibold">Kontak Kami</h1>
    </div>

    <section class="py-10 px-4 sm:px-6 lg:px-8 mx-auto">
        <section class="bg-gray-100 py-10 px-4 sm:px-6 lg:px-8">
            <div style="margin-top:-140px; margin-bottom:-80px" data-aos="fade-up" class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:py-20 lg:px-8">
                <div class="mt-16 lg:mt-20">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="rounded-lg overflow-hidden">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31708.832311780945!2d106.74320719477167!3d-6.571554625569635!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c5b2995b3a81%3A0xdcd49de93e3d9f19!2sSMK%20Bina%20Sejahtera%201!5e0!3m2!1sid!2sid!4v1730080331200!5m2!1sid!2sid"
                                width="100%" height="240" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.6149752394385!2d106.74054647362662!3d-6.570182193423148!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c57a0fb2730f%3A0x4147e5cc562f6ba6!2sSMK%20Bina%20Sejahtera%203%20Kota%20Bogor!5e0!3m2!1sen!2sid!4v1729242450185!5m2!1sen!2sid"
                                width="100%" height="240" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>

                        <div class="bg-[#6B9B55] text-white rounded-lg p-6" style="border-radius: 0px 20px 20px 0px;">
                            <div class="max-w-full mx-auto rounded-lg overflow-hidden">
                                <div class="px-6 py-4">
                                    <h3 class="text-lg font-medium">Alamat Kami</h3>
                                    <p class="mt-1">Jl. Radar Baru No.08 Dramaga</p>
                                    <p class="mt-1">Jl. Ledeng Sindangsari No.5</p>
                                </div>

                                <div class="border-t border-gray-200 px-6 py-4">
                                    <h3 class="text-lg font-medium">Sosial Media</h3>
                                    <p class="mt-1">@smabinasejahtera_</p>
                                    <p class="mt-1">@smk_bina_sejahtera</p>
                                    <p class="mt-1">@smkbinasejahtera34</p>
                                </div>
                                <div class="border-t border-gray-200 px-6 py-4">
                                    <h3 class="text-lg font-medium">Kontak</h3>
                                    <p class="mt-1">Email: smkbinasejahtera34@gmail.com</p>
                                    <p class="mt-1">Telepon: 0812 8938 1652</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>

    {{-- Form Kontak --}}
    <section class="py-10">
        <div data-aos="fade-up" class="font-[sans-serif]">
            <div class="bg-gradient-to-r bg-[#6B9B55] w-full h-36">
                <div class="px-6 py-6 text-center" style="color:white">
                    <h1 class="text-lg font-bold">Kirimkan Kami Sebuah Pesan</h1>
                    {{-- <p class="mt-1">123 Main St, San Francisco, CA 94105</p> --}}
                </div>
            </div>
            <div class="-mt-20 mb-6 px-4 py-10">
                <div class="mx-auto max-w-6xl shadow-lg p-8 relative bg-white rounded-lg">

                    <form id="my-form" action="https://formspree.io/f/myzykjlg" method="POST" class="mt-8 grid sm:grid-cols-2 gap-6">
                        <div>
                            <label for="nama_depan" class="block text-sm">Nama Depan</label>
                            <input wire:model='nama_depan' type='text' id="nama_depan" name="nama_depan" placeholder='Nama Depan' required
                                class="w-full rounded-lg py-2.5 px-4 border border-gray-300 text-sm outline-[#6B9B55]" />
                            @error('nama_depan') <span class="text-red-500">{{ $message }}</span> @enderror
                        </div>

                        <div>
                            <label for="nama_belakang" class="block text-sm">Nama Belakang</label>
                            <input wire:model='nama_belakang' type='text' id="nama_belakang" name="nama_belakang" placeholder='Nama Belakang' required
                                class="w-full rounded-lg py-2.5 px-4 border border-gray-300 text-sm outline-[#6B9B55]" />
                            @error('nama_belakang') <span class="text-red-500">{{ $message }}</span> @enderror
                        </div>

                        <div>
                            <label for="email" class="block text-sm">Email</label>
                            <input wire:model='email' type='email' id="email" name="email" placeholder='Email' required
                                class="w-full rounded-lg py-2.5 px-4 border border-gray-300 text-sm outline-[#6B9B55]" />
                            @error('email') <span class="text-red-500">{{ $message }}</span> @enderror
                        </div>

                        <div>
                            <label for="no_telp" class="block text-sm">Nomor Telepon</label>
                            <input wire:model='no_telp' type='tel' id="no_telp" name="no_telp" placeholder='Nomor Telepon' required
                                class="w-full rounded-lg py-2.5 px-4 border border-gray-300 text-sm outline-[#6B9B55]" />
                            @error('no_telp') <span class="text-red-500">{{ $message }}</span> @enderror
                        </div>

                        <div>
                            <label for="pesan" class="block text-sm">Pesan</label>
                            <textarea wire:model='pesan' id="pesan" name="message" placeholder='Pesan' rows="6" required
                                class="col-span-full w-full rounded-lg px-4 border border-gray-300 text-sm pt-3 outline-[#6B9B55]"></textarea>
                            @error('pesan') <span class="text-red-500">{{ $message }}</span> @enderror
                        </div>

                        <div class="flex items-center col-span-full">
                            <input id="checkbox1" type="checkbox" wire:model="setuju" required class="w-4 h-4 mr-3" />
                            <label for="checkbox1" class="text-sm text-gray-400">Saya setuju dengan <a href="javascript:void(0);" class="underline">Syarat dan Ketentuan</a> serta <a href="javascript:void(0);" class="underline">Kebijakan Privasi</a></label>
                        </div>

                        <button id="my-form-button" type="submit"
                            class="text-white w-max bg-[#6B9B55] hover:bg-[#002500] rounded-lg text-sm px-6 py-3 mt-4 tracking-wide">
                            Kirim Pesan
                        </button>

                        <p id="my-form-status"></p>
                    </form>
                </div>
            </div>
        </div>
    </section>
    {{-- FORM CONTACT END --}}
</div>

<script>
    var form = document.getElementById("my-form");

    async function handleSubmit(event) {
      event.preventDefault();
      var status = document.getElementById("my-form-status");
      var data = new FormData(event.target);
      fetch(event.target.action, {
        method: form.method,
        body: data,
        headers: {
            'Accept': 'application/json'
        }
      }).then(response => {
        if (response.ok) {
          status.innerHTML = "Thanks for your submission!";
          form.reset()
        } else {
          response.json().then(data => {
            if (Object.hasOwn(data, 'errors')) {
              status.innerHTML = data["errors"].map(error => error["message"]).join(", ")
            } else {
              status.innerHTML = "Oops! There was a problem submitting your form"
            }
          })
        }
      }).catch(error => {
        status.innerHTML = "Oops! There was a problem submitting your form"
      });
    }
    form.addEventListener("submit", handleSubmit)
  </script>
