<?php echo $this->extend('partials/layout', [$title]) ?>

<?php echo $this->section('content') ?>

<?php echo $this->include('partials/header-user.php', [$user]) ?>
<?php echo $this->include('partials/navbar.php') ?>

    <h1 class="bg-red-100">Home</h1>
<?php echo $this->endSection() ?>
