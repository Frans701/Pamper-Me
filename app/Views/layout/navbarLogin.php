<!-- Navbar Start -->
<header class="bg-[#ffffff] fixed w-full z-40 shadow-md">
  <div class="relative z-20 px-3 xl:px-[80px] xl:px-[80px] py-[16px]">
    <nav class="lg:flex lg:items-center lg:justify-between">
      <div class="flex justify-between items-center">
        <a href="/"><img class="w-[140px]" src="/images/logo.png" alt=""></a>
        <span class="text-3xl cursor-pointer mx-2 lg:hidden block">
          <ion-icon name="menu" onclick="Menu(this)"></ion-icon>
        </span>
      </div>
      <ul class="lg:flex bg-[#ffffff] lg:items-center z-[-1] lg:z-auto lg:static absolute w-full left-0 lg:w-auto lg:py-0 py-4 lg:pl-0 pl-7 lg:opacity-100 opacity-0 top-[-400px] transition-all ease-in duration-500">
        <li class="mx-4 my-6 lg:my-0">
          <a
            href=""
            class="xl:text-sm lg:text-xs hover:text-pink-500 duration-500 font-semibold"
            >Buat Reservasi</a
          >
        </li>
        <li class="mx-4 my-6 lg:my-0">
          <a
            href="<?= url_to('user.antrian.index') ?>"
            class="xl:text-sm lg:text-xs hover:text-pink-500 duration-500 font-semibold"
            >Lihat Antrian</a
          >
        </li>
        <li class="mx-4 my-6 lg:my-0">
          <a
            href="<?= url_to('user.anak.index') ?>"
            class="xl:text-sm lg:text-xs hover:text-pink-500 duration-500 font-semibold"
            >Data Anak</a
          >
        </li>
        <li class="mx-4 my-6 lg:my-0">
          <a
            href=""
            class="xl:text-sm lg:text-xs hover:text-pink-500 duration-500 font-semibold"
            >Scan Barcode</a
          >
        </li>
        <li class="mx-4 my-6 lg:my-0">
          <a
            href="<?= url_to('user.keranjang.index') ?>"
            class="xl:text-sm lg:text-xs hover:text-pink-500 duration-500 font-semibold"
            >Keranjang</a
          >
        </li>
        <li class="mx-4 my-6 lg:my-0">
          <a
            href="<?= url_to('user.myorder') ?>"
            class="xl:text-sm lg:text-xs hover:text-pink-500 duration-500 font-semibold"
            >My Order</a
          >
        </li>
        <li class="mx-4 my-6 lg:my-0">
          <a
            href=""
            class="xl:text-sm lg:text-xs hover:text-pink-500 duration-500 font-semibold"
            >Voucher</a
          >
        </li>
        <?php 
        
        $session = session();
        if(empty($session->get('user_id_orangtua'))) :?>
        <div class="flex items-center">
          <a 
          href="<?= url_to('user.login') ?>"
            class="border-2 border-pink-500 px-[16px] py-[6px] rounded-[8px] font-semibold text-sm"
          >
            Masuk
          </a>
          <a
          href="<?= url_to('user.register') ?>"
            class="border-2 border-pink-500  bg-pink-500 px-[16px] py-[6px] rounded-[8px] font-semibold text-white ml-2 text-sm"
          >
            Daftar
          </a>
        </div>
        <?php else: ?>
        <div class="flex items-center ml-4 my-6 lg:my-0">
          <a 
          href="<?= url_to('user.login') ?>"
            class=""
          >
          <img class="rounded-full object-cover w-[48px] h-[48px]" src="/images/dashboardLogo.png" alt="">
          </a>
          <a
          href="<?= url_to('user.logout') ?>"
            class="border-2 border-pink-500  bg-pink-500 px-[16px] py-[6px] rounded-[8px] font-semibold text-white ml-2 text-base"
          >
            logout
          </a>
        </div>
        <?php endif;?>
      </ul>
    </nav>
  </div>
</header>
<!-- Navbar End -->

<script
  src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
  integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
  crossorigin="anonymous"
  referrerpolicy="no-referrer"
></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript">
  function Menu(e) {
    let list = document.querySelector("ul");
    e.name === "menu"
      ? ((e.name = "close"),
        list.classList.add("top-[80px]"),
        list.classList.add("opacity-100"))
      : ((e.name = "menu"),
        list.classList.remove("top-[80px]"),
        list.classList.remove("opacity-100"));
  }
</script>
