<?= $this->extend('_layout') ?>

<?= $this->section('content') ?>
<?= $this->include('_header') ?>

<section id="content">
  <main>
    <div class="heading-main">
      <h1>Products List</h1>
      <hr>
      <?php var_dump($products); ?>
    </div>
  </main>
</section>

<?= $this->include('_footer') ?>
<?= $this->endSection() ?>
