<?php echo $this->extend('partials/layout', [$title]) ?>

<?php echo $this->section('content') ?>

<?php echo $this->include('partials/header.php', [$header]) ?>

<div class="p-[30px]">
  <form action="/post_add_transaction" method="POST" class="flex flex-col gap-y-4 text-white">
    <div class="py-2">
      <label for="cinema" class="text-white text-sm p-1">Select Cinema</label>
      <select name="cinema" id="cinema" class="w-full bg-[#2F323A] text-[#C5C5C5] text-[14px] placeholder-[#C5C5C5] placeholder-[14px] outline-none py-2 rounded-lg px-3 my-1">
        <?php foreach ($cinema as $c) : ?>
          <option value="<?php echo $c['id']; ?>"><?php echo $c['name']; ?></option>
        <?php endforeach; ?>
      </select>
    </div>
    <div class="py-2">
      <label for="seat" class="text-white text-sm p-1">Select Seat</label>
      <select name="seat" id="seat" class="w-full bg-[#2F323A] text-[#C5C5C5] text-[14px] placeholder-[#C5C5C5] placeholder-[14px] outline-none py-2 rounded-lg px-3 my-1">
        <?php for ($i = 1; $i <= 30; $i++) : ?>
          <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
        <?php endfor; ?>
      </select>
    </div>

    <div class="pt-4">
      <img src="/images/home/select-seats.png" alt="">
    </div>

    <div class="pt-3">
      <div>
        <h1 class="text-white text-xl py-3">Payment Method</h1>
        <img src="/images/home/card.png" alt="">
      </div>

      <div class="pt-3">
        <h1 class="text-white text-xl">Payment Details</h1>
        <div class="flex flex-col py-1">
          <label for="email" class="text-sm py-1">Email</label>
          <input type="email" id="email" name="email" required class="rounded-lg px-3 py-2 text-black">
        </div>
        <div class="flex flex-col py-1">
          <label for="method" class="text-sm py-1">Method</label>
          <select name="method" id="method" class="w-full bg-[#2F323A] text-[#C5C5C5] text-[14px] placeholder-[#C5C5C5] placeholder-[14px] outline-none py-2 rounded-lg px-3 my-1">
            <option value="BCA">BCA</option>
            <option value="BNI">BNI</option>
            <option value="BRI">BRI</option>
            <option value="Mandiri">Mandiri</option>
          </select>
        </div>
        <div class="flex flex-col py-1">
          <label for="cardholder" class="text-sm py-1">Cardholder</label>
          <input type="text" id="cardholder" name="cardholder" required class="rounded-lg px-3 py-2 text-black">
        </div>
        <div class="flex flex-col py-1">
          <label for="card_number" class="text-sm py-1">card_number</label>
          <input type="text" id="card_number" name="card_number" required class="rounded-lg px-3 py-2 text-black">
        </div>
        <div class="flex flex-col py-1">
          <label for="date" class="text-sm py-1">Date</label>
          <input type="date" id="date" name="date" required class="rounded-lg px-3 py-2 text-black">
        </div>
        <div class="flex flex-col py-1">
          <label for="cvv" class="text-sm py-1">CVV</label>
          <input type="text" id="cvv" name="cvv" required class="rounded-lg px-3 py-2 text-black">
        </div>

        <input type="text" hidden id="user_id" name="user_id" value="<?php echo session()->get('id') ?>">

        <button type="submit" name="pay" class="bg-[#54A8E5] py-2 px-3 rounded-lg">Pay Now | Rp50.000</button>
  </form>
</div>
</div>
</div>

<?php echo $this->endSection() ?>
