<?= $this->extend('_layout') ?>

<?= $this->section('content') ?>
<?= $this->include('_header') ?>

<section id="content">
  <main>
    <div class="heading-main">
      <h1>Product Details</h1>
      <hr>
      <?php var_dump($product); ?>
    </div>
  </main>
</section>

<?= $this->include('_footer') ?>
<?= $this->endSection() ?>
