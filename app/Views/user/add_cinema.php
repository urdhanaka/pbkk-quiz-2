<?php echo $this->extend('partials/layout', [$title]) ?>

<?php echo $this->section('content') ?>

<div class="bg-[#1B1E25] w-full min-h-screen text-white flex justify-center items-center">
  <div class="flex flex-col gap-y-4">
    <h2 class="text-xl text-center py-1 font-bold">ADD CINEMA</h2>
    <form action="/post_add_cinema" method="POST" class="flex flex-col gap-y-4">
      <div class="flex flex-col py-1">
        <label for="name" class="text-sm py-1">Name</label>
        <input type="name" id="name" name="name" required class="rounded-lg px-3 py-2 text-black">
      </div>
      <div class="flex flex-col py-1">
        <label for="address" class="text-sm py-1">Address</label>
        <input type="text" id="address" name="address" required class="rounded-lg px-3 py-2 text-black">
      </div>
      <div class="flex flex-col py-1">
        <label for="capacity" class="text-sm py-1">Capacity</label>
        <input type="number" id="capacity" name="capacity" required class="rounded-lg px-3 py-2 text-black">
      </div>
      <div class="flex flex-col py-1">
        <label for="price" class="text-sm py-1">Price</label>
        <input type="number" id="price" name="price" required class="rounded-lg px-3 py-2 text-black">
      </div>

      <button type="submit" name="registerform" class="bg-[#54A8E5] py-2 px-3 rounded-lg">Add MOVIE</button>
    </form>
  </div>
</div>

<?php echo $this->endSection() ?>
