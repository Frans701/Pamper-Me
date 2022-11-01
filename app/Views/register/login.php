<?= $this->extend('layoutRegister/page_layout') ?>

<?= $this->section('content') ?>

<div class="grid gap-4 grid-cols-2">
  <div class="px-[80px]">
    <!-- Start Navbar & Logo -->
    <div class="pt-[32px]">
      <img src="/images/logo.png" alt="" />
      <div class="w-[480px] flex justify-between items-center mt-[32px]">
        <!-- <div class="flex">
          <img class="w-[20px] h-[20px]" src="/icons/checklist.png" alt="" />
          <div class="text-pink-500 ml-2 font-semibold text-base">
            Daftar akun
          </div>
        </div>
        <h2 class="border-pink-500"></h2>
        <div class="flex">
          <img class="w-[20px] h-[20px]" src="/icons/checklist.png" alt="" />
          <div class="ml-2 font-semibold text-base text-pink-500">
            Verifikasi
          </div>
        </div>
        <h2 class="border-gray-400"></h2>
        <div class="flex">
          <img class="w-[20px] h-[20px]" src="/icons/nonCheck.png" alt="" />
          <div class="text-gray-400 ml-2 font-semibold text-base">
            Masuk Akun
          </div>
        </div> -->
      </div>
    </div>
    <!-- End Navbar & Logo -->

    <!-- Start Forms -->
    <div class="pt-[32px]">
      <form class="">
        <h1 class="font-bold text-3xl">Masuk Akun Pamper Me</h1>
        <div class="py-[32px]">
          <div class="mb-4">
            <label
              class="block text-gray-700 text-sm font-bold mb-2"
              for="namaOrangTua"
            >
            Email
            </label>
            <input
              class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
              id="namaOrangTua"
              type="text"
              placeholder="Masukkan nama orang tua"
            />
          </div>
          <div class="mb-4">
            <label
              class="block text-gray-700 text-sm font-bold mb-2"
              for="password"
            >
              Password
            </label>
            <input
              class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
              id="password"
              type="password"
              placeholder="Masukkan Password"
            />
          </div>
          <div class="flex items-center justify-between">
            <button
              class="w-full bg-pink-500 hover:bg-pink-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
              type="button"
            >
              Membuat Akun
            </button>
          </div>
          <div class="flex justify-center mt-4 text-gray-400">
            Belum punya akun? <span> <a href="register" class="text-blue-500 font-semibold">Daftar</a> </span> 
          </div>
        </div>
      </form>
    </div>
    <!-- End Forms  -->
  </div>
  <div>
    <img class="h-screen fixed" src="/images/baby.png" alt="" />
  </div>
</div>

<?= $this->endSection() ?>
