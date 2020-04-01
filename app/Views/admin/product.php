<?= $this->extend('admin/template/layout') ?>

<?= $this->section('content') ?>
<?= $this->include('admin/template/_header') ?>

<section id="content">
  <main>
    <div class="heading-main">
      <h1>Product</h1>
      <hr>
    </div>
    <div class="">
      <ul>
        <li><a href="<?=base_url('admin/prod_add')?>">Add Product</a></li>
      </ul>
    </div>
    <div class="list-container">
      <?php
      
      ?>
    </div>
  </main>
</section>

<?= $this->include('admin/template/_footer') ?>
<?= $this->endSection() ?>
