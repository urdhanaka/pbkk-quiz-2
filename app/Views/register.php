<?php echo $this->extend('partials/layout', [$title]) ?>

<?php echo $this->section('content') ?>

<div class="bg-[#1B1E25] min-h-screen text-white flex justify-center items-center">
  <div class="flex flex-col gap-y-4">
    <h2 class="text-xl text-center py-1 font-bold">REGISTER</h2>
    <form action="/user/save" method="POST" class="flex flex-col gap-y-4">
      <div class="flex flex-col py-1">
        <label for="name" class="text-sm py-1">Name</label>
        <input type="name" id="name" name="name" required class="rounded-lg px-3 py-2 text-black">
      </div>
      <div class="flex flex-col py-1">
        <label for="username" class="text-sm py-1">Username</label>
        <input type="text" id="username" name="username" required class="rounded-lg px-3 py-2 text-black">
      </div>
      <div class="flex flex-col py-1">
        <label for="password" class="text-sm py-1">Password</label>
        <input type="password" id="password" name="password" required class="rounded-lg px-3 py-2 text-black">
      </div>
      <div class="flex flex-col py-1">
        <label for="email" class="text-sm py-1">Email</label>
        <input type="email" id="email" name="email" required class="rounded-lg px-3 py-2 text-black">
      </div>

      <button type="submit" name="registerform" class="bg-[#54A8E5] py-2 px-3 rounded-lg">REGISTER</button>
      <p>Already have an account? <a href="/login" class="text-gray-200">Login here!</a></p>
    </form>
  </div>
</div>

<?php echo $this->endSection() ?>
