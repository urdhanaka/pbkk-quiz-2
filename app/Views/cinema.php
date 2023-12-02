<?php echo $this->extend('partials/layout', [$title]) ?>

<?php echo $this->section('content') ?>

<?php echo $this->include('partials/header.php', [$header]) ?>


<?php echo $this->include('partials/navbar.php') ?>

<div class="grid grid-cols-2 gap-3 px-2 py-5 bg-[#1B1E25] overflow-y-auto overflow-x-hidden">
  <?php foreach ($cinemas as $cinema) : ?>
    <a href="cinema_detail/<?php echo $cinema['id']; ?>" class="flex flex-col gap-0.5 py-2 justify-center items-center hover:opacity-90 hover:scale-110 ease-in-out transition-all">
      <img src="/images/home/img-cinema.png" alt="" >
      <div class="text-center">
        <h1 class="text-white"><?php echo $cinema['name']; ?></h1>
        <p class="text-sm text-gray-500"><?php echo $cinema['capacity']; ?> Seats</p>
        <p class="text-sm text-gray-500">Rp<?php echo $cinema['price']; ?></p>
      </div>
    </a>
  <?php endforeach; ?>
</div>

<?php echo $this->endSection() ?>
