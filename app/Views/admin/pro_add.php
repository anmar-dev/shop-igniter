<?= $this->extend('admin/template/layout') ?>

<?= $this->section('content') ?>
<?= $this->include('admin/template/_header') ?>

<section id="content">
  <main>
    <div class="heading-main">
      <h1>Add Product</h1>
      <hr>
    </div>
    <div class="">
      <?= session('status')?>
      <?php
        var_dump(session('errors'));
      ?>
      <form action="<?=base_url('admin/pro_add')?>" enctype="multipart/form-data" method="post" accept-charset="utf-8">

      <label for="title">Title:</label>
      <input type="text" name="title" value="<?=old('title')?>" required>
      <label for="description">Description:</label>
      <input type="text" name="description" value="<?=old('description')?>" required>
      <label for="stock">Stock:</label>
      <input type="number" name="stock" value="<?=old('stock')?>" placeholder="provide a number of stock available..." required>
      <label for="price">Price:</label>
      <input type="number" name="price" value="<?=old('price')?>" placeholder="provide product price..." required>
      <label for="img">Image:</label>
      <br>
      <input type="file" name="img" required>
      <br>
      <br>
      <input type="submit" name="add-btn" value="Add">
      </form>
    </div>
  </main>
</section>

<?= $this->include('admin/template/_footer') ?>
<?= $this->endSection() ?>
