<?php echo $this->extend('partials/layout', [$title]) ?>

<?php echo $this->section('content') ?>

<?php echo $this->include('partials/header.php', [$header]) ?>
<?php echo $this->include('partials/navbar.php') ?>

<div class="bg-[#1B1E25] text-white flex justify-center items-center">
  <div class="flex flex-col gap-y-4">
    <h2 class="text-xl text-center py-1 font-bold">Berikan Ulasan Anda!</h2>
    <form action="/user/auth" method="POST" class="flex flex-col gap-y-4">
      <div class="flex flex-col py-1">
        <label for="email" class="text-sm py-1">Email</label>
        <input type="text" id="email" name="email" required class="rounded-lg px-3 py-2 bg-[#2F323A] text-[#C5C5C5]">
      </div>

      <div class="flex flex-col py-1">
        <label for="password" class="text-sm py-1">Ulasan</label>
        <textarea type="password" id="password" name="password" required class="rounded-lg px-3 py-2 bg-[#2F323A] text-[#C5C5C5]"></textarea>
      </div>

      <button type="submit" name="loginform" class="bg-[#54A8E5] py-2 px-3 rounded-lg">Submit</button>
    </form>
  </div>
</div>

<?php echo $this->endSection() ?>
