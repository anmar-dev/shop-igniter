<?= $this->extend('_layout') ?>

<?= $this->section('content') ?>
<?= $this->include('_header') ?>

<section id="content">
  <main>
    <div class="heading-main">
      <h1>Home</h1>
      <hr>
    </div>
    <div class="products">
      <img src="<?=base_url('uploads/product/no-img.png')?>" alt="">
        <?php var_dump($products); ?>
    </div>

  </main>
</section>

<?= $this->include('_footer') ?>
<?= $this->endSection() ?>
