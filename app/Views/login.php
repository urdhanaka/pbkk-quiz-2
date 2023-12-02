<?php echo $this->extend('partials/layout', [$title]) ?>

<?php echo $this->section('content') ?>
<div class="bg-[#1B1E25] min-h-screen text-white flex justify-center items-center">
  <div class="flex flex-col gap-y-4">
    <h2 class="text-xl text-center py-1 font-bold">LOGIN</h2>
    <form action="/user/auth" method="POST" class="flex flex-col gap-y-4">
      <div class="flex flex-col py-1">
        <label for="username" class="text-sm py-1">Username</label>
        <input type="text" id="username" name="username" required class="rounded-lg px-3 py-2 text-black">
      </div>

      <div class="flex flex-col py-1">
        <label for="password" class="text-sm py-1">Password</label>
        <input type="password" id="password" name="password" required class="rounded-lg px-3 py-2 text-black">
      </div>

      <button type="submit" name="loginform" class="bg-[#54A8E5] py-2 px-3 rounded-lg">Login</button>
      <p>Do not have an account? <a href="/register" class="text-gray-200">Register here!</a></p>
    </form>
  </div>
</div>

<?php echo $this->endSection() ?>
