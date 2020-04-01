<!DOCTYPE html>
<html lang="<?=session('setting.dir')?>" dir="<?=session('setting.dir')?>">
<head>
	<meta charset="utf-8">
	<title><?=session('setting.doc-title')?></title>
  <link type="text/css" rel="stylesheet" href="<?=base_url('assets/css/'.session('setting.css'))?>"  media="screen,projection"/>
	<script src="<?=base_url('assets/js/jquery341.min.js')?>" charset="utf-8"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<style media="screen">
	</style>
</head>
<body>

  <?= $this->renderSection('content') ?>

</body>
</html>
