<?= $this->extend('_layout') ?>

<?= $this->section('content') ?>
<?= $this->include('_header') ?>

<section id="content">
  <main>
    <div class="heading-main">
      <h1>Home</h1>
      <hr>
    </div>
    <img src="<?=base_url('uploads/product/no-img.png')?>" alt="">
  </main>
</section>

<?= $this->include('_footer') ?>
<?= $this->endSection() ?>
