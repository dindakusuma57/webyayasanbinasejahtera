<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>

<div>
    <div class="bg-[#6B9B55] p-4 text-white text-center mb-4">
        <h1 class="text-lg font-semibold">Kontak Kami</h1>
    </div>

    <section class="py-10 px-4 sm:px-6 lg:px-8 mx-auto">
        <section class="bg-gray-100 py-10 px-4 sm:px-6 lg:px-8 mx-auto" >
            <div style="margin-top:-140px; margin-bottom:-80px" data-aos="fade-up" class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:py-20 lg:px-8">
                <div class="mt-16 lg:mt-20" >
                    <div class="grid grid-cols-1 md:grid-cols-2" >
                        <div class="rounded-lg overflow-hidden" >
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.6149752394385!2d106.74054647362662!3d-6.570182193423148!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c57a0fb2730f%3A0x4147e5cc562f6ba6!2sSMK%20Bina%20Sejahtera%203%20Kota%20Bogor!5e0!3m2!1sen!2sid!4v1729242450185!5m2!1sen!2sid"
                                width="100%" height="240" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                <iframe

                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.6149752394385!2d106.74054647362662!3d-6.570182193423148!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c57a0fb2730f%3A0x4147e5cc562f6ba6!2sSMK%20Bina%20Sejahtera%203%20Kota%20Bogor!5e0!3m2!1sen!2sid!4v1729242450185!5m2!1sen!2sid"
                                width="100%" height="240" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>

                        <div class="bg-[#6B9B55] text-white rounded-lg p-6 " style="border-radius: 0px 20px 20px 0px;">
                            <div class="max-w-full mx-auto rounded-lg overflow-hidden">
                                <div class="px-6 py-4">
                                    <h3 class="text-lg font-medium">Our Address</h3>
                                    <p class="mt-1">123 Main St, San Francisco, CA 94105</p>
                                </div>

                                <div class="border-t border-gray-200 px-6 py-4">
                                    <h3 class="text-lg font-medium">Hours</h3>
                                    <p class="mt-1">Monday - Friday: 9am - 5pm</p>
                                    <p class="mt-1">Saturday: 10am - 4pm</p>
                                    <p class="mt-1">Sunday: Closed</p>
                                </div>
                                <div class="border-t border-gray-200 px-6 py-4">
                                    <h3 class="text-lg font-medium">Contact</h3>
                                    <p class="mt-1">Email: info@example.com</p>
                                    <p class="mt-1">Phone: +1 23494 34993</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>

    {{-- Form Contact --}}
    <section class="py-10">
        <div data-aos="fade-up" class="font-[sans-serif]">
            <div class="bg-gradient-to-r bg-[#6B9B55] w-full h-36">
                <div class="px-6 py-6 text-center" style="color:white">
                    <h1 class="text-lg font-bold " >Kirimkan Kami Sebuah Pesan</h1>
                    <p class="mt-1">123 Main St, San Francisco, CA 94105</p>
                </div>
            </div>
            <div class="-mt-20 mb-6 px-4 py-10">
              <div class="mx-auto max-w-6xl shadow-lg p-8 relative bg-white rounded-lg">
                <form wire:submit.prevent="placePesan" class="mt-8 grid sm:grid-cols-2 gap-6">
                  <div>
                    <input wire:model='nama_depan' type='text' placeholder='Nama Depan'
                      class="w-full rounded-lg py-2.5 px-4 border border-gray-300 text-sm outline-[#6B9B55]" />
                  </div>
                  <div>
                    <input wire:model='nama_belakang' type='text' placeholder='Nama Belakang'
                      class="w-full rounded-lg py-2.5 px-4 border border-gray-300 text-sm outline-[#6B9B55]" />
                  </div>
                  <div>
                    <input wire:model='email' type='email' placeholder='email'
                      class="w-full rounded-lg py-2.5 px-4 border border-gray-300 text-sm outline-[#6B9B55]" />
                  </div>
                  <div>
                    <input wire:model='no_telp' type='tel' placeholder='Nomor Telepon'
                      class="w-full rounded-lg py-2.5 px-4 border border-gray-300 text-sm outline-[#6B9B55]" />
                  </div>
                  <div>
                    <textarea placeholder='Pesan' rows="6"
                      class="col-span-full w-full rounded-lg px-4 border border-gray-300 text-sm pt-3 outline-[#6B9B55]"></textarea>
                  </div>
                  <div class="flex items-center col-span-full">
                    <input id="checkbox1" type="checkbox"
                      class="w-4 h-4 mr-3" />
                    <label for="checkbox1" class="text-sm text-gray-400">I agree to the <a href="javascript:void(0);" class="underline">Terms and Conditions</a> and <a href="javascript:void(0);" class="underline">Privacy Policy</a></label>
                  </div>

                  <button type='submit'
                    class="text-white w-max bg-[#6B9B55] hover:bg-[#002500] rounded-lg text-sm px-6 py-3 mt-4 tracking-wide">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" fill='#fff' class="mr-2 inline" viewBox="0 0 548.244 548.244">
                      <path fill-rule="evenodd" d="M392.19 156.054 211.268 281.667 22.032 218.58C8.823 214.168-.076 201.775 0 187.852c.077-13.923 9.078-26.24 22.338-30.498L506.15 1.549c11.5-3.697 24.123-.663 32.666 7.88 8.542 8.543 11.577 21.165 7.879 32.666L390.89 525.906c-4.258 13.26-16.575 22.261-30.498 22.338-13.923.076-26.316-8.823-30.728-22.032l-63.393-190.153z" clip-rule="evenodd" data-original="#000000" />
                    </svg>
                    Kirim Pesan
                  </button>
                </form>
              </div>
            </div>
          </div>
        </section>

    {{-- FORM CONTACT START --}}
    <section class="py-10 px-4 sm:px-6 lg:px-8 mx-auto">

    </section>
</div>
