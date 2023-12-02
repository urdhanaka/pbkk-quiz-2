<?php echo $this->extend('partials/layout', [$title]) ?>

<?php echo $this->section('content') ?>

<?php echo $this->include('partials/header.php', [$header]) ?>


<?php echo $this->include('partials/navbar.php') ?>

<div class="grid grid-cols-2 gap-3 px-2 py-5 bg-[#1B1E25] overflow-y-auto overflow-x-hidden min-h-screen">
  <?php foreach ($movies as $movie) : ?>
    <a href="movie_detail/<?php echo $movie['id']; ?>" class="flex flex-col gap-0.5 py-2 justify-center items-center hover:opacity-90 hover:scale-110 ease-in-out transition-all">
      <img src="/images/home/movie-1.png" alt="" width="150px">
      <div class="text-center">
        <h1 class="text-white"><?php echo $movie['title']; ?></h1>
        <p class="text-sm text-gray-500"><?php echo $movie['genre']; ?></p>
      </div>
    </a>
  <?php endforeach; ?>
</div>

<?php echo $this->endSection() ?>
