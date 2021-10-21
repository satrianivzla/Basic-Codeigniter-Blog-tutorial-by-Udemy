<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?= $title; ?></title>

  <link rel="stylesheet" type="text/css"
    href="<?php echo base_url();?>assets/css/bootstrap.min.css" />

    <link rel="stylesheet" type="text/css"
      href="<?php echo base_url();?>assets/css/spacing.css" />

      <link rel="stylesheet" type="text/css"
        href="<?php echo base_url();?>assets/css/custom.css" />
<link href="https://fonts.googleapis.com/css?family=Bitter|Sunflower:300" rel="stylesheet">

</head>
<body>

<?php $this->load->view('elements/navigation'); ?>

<div class="container m-top-50">
  <div class="row">
    <div class="col-8">
  <?php $this->load->view($module.'/'.$view_file);?>
</div>

<div class="col-4">
  <h3>Sidebar</h3>
<?php echo Modules::run('categories/categories/get_cat_sidebar'); ?>
</div>

</div>
</div>

<?php $this->load->view('elements/footer'); ?>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>

</body>
</html>
