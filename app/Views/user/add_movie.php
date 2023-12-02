<?php echo $this->extend('partials/layout', [$title]) ?>

<?php echo $this->section('content') ?>

<div class="bg-[#1B1E25] w-full min-h-screen text-white flex justify-center items-center">
  <div class="flex flex-col gap-y-4">
    <h2 class="text-xl text-center py-1 font-bold">ADD MOVIE</h2>
    <form action="/post_add_cinema" method="POST" class="flex flex-col gap-y-4">
      <div class="flex flex-col py-1">
        <label for="title" class="text-sm py-1">Title</label>
        <input type="title" id="title" name="title" required class="rounded-lg px-3 py-2 text-black">
      </div>
      <div class="flex flex-col py-1">
        <label for="genre" class="text-sm py-1">Genre</label>
        <input type="text" id="genre" name="genre" required class="rounded-lg px-3 py-2 text-black">
      </div>
      <div class="flex flex-col py-1">
        <label for="release_date" class="text-sm py-1">Release Date</label>
        <input type="date" id="release_date" name="release_date" required class="rounded-lg px-3 py-2 text-black">
      </div>
      <div class="flex flex-col py-1">
        <label for="duration" class="text-sm py-1">Duration</label>
        <input type="number" id="duration" name="duration" required class="rounded-lg px-3 py-2 text-black">
      </div>
      <div class="flex flex-col py-1">
        <label for="rating" class="text-sm py-1">Rating</label>
        <input type="number" id="rating" name="rating" required class="rounded-lg px-3 py-2 text-black">
      </div>
      <div class="flex flex-col py-1">
        <label for="poster" class="text-sm py-1">Link Poster</label>
        <input type="text" id="poster" name="poster" required class="rounded-lg px-3 py-2 text-black">
      </div>
      <div class="flex flex-col py-1">
        <label for="synopsis" class="text-sm py-1">Synopsis</label>
        <textarea type="number" id="synopsis" name="synopsis" required class="rounded-lg px-3 py-2 text-black"></textarea>
      </div>

      <button type="submit" name="registerform" class="bg-[#54A8E5] py-2 px-3 rounded-lg">Add MOVIE</button>
    </form>
  </div>
</div>

<?php echo $this->endSection() ?>
