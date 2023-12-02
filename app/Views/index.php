<?php echo $this->extend('partials/layout', [$title]) ?>

<?php echo $this->section('content') ?>

<?php echo $this->include('partials/header-user.php', [$user]) ?>

<div class="bg-[#1B1E25] h-full w-full">
  <!-- search input for movie -->
  <div class="flex justify-center flex-col gap-8 mx-[30px]">
    <div class="flex justify-center items-center h-full bg-[#2F323A] rounded-[12px] overflow-hidden mt-[10px]">

      <img src="/images/home/icon_search.png" alt="" class="w-6 m-2" />
      <input type="text" class="w-[80%] h-[40px] bg-[#2F323A] text-[#C5C5C5] text-[14px] placeholder-[#C5C5C5] placeholder-[14px] outline-none" placeholder="Search Movie">
      <button class="w-[20%] h-[40px] bg-[#2F323A] text-[#C5C5C5] text-[14px] outline-none pr-1">Search</button>
    </div>

    <div class="w-full h-full">
      <h1 class="text-white font-medium text-2xl">Coming Soon</h1>
      <div class="mt-4 flex flex-col">
        <img src="/images/home/movie-1.png" alt="" class="w-[100%] h-[100%]">
        <h1 class="text-white text-2xl font-medium mt-2">Resident Evil - Racoon City</h1>
        <h2 class="text-[#AFAFAF] text-lg font-medium">November 2023</h2>
      </div>
    </div>

    <div class="w-full h-full">
      <div class="flex items-center justify-between w-full">

        <h1 class="text-white font-medium text-2xl">Cinema Near You</h1>
        <p class="text-[#696D74]">See all</p>

      </div>
      <div class="mt-4">
        <div class="w-full flex items-center gap-4">
          <img src="/images/home/img-cinema.png" alt="" class="w-20">
          <div class="flex flex-col justify-between">
            <div class="flex items-center gap-1">
              <img src="/images/home/icon-location.png" class="w-6" alt="">
              <p class="text-[#54A8E5]">
                5 Kilometers
              </p>
            </div>
            <h3 class="text-lg font-medium text-white mt-1">
              Viva Cinemas
            </h3>
            <p class="text-[#BABFC9] text-sm">
              Closed 10.00 PM
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php echo $this->endSection() ?>
