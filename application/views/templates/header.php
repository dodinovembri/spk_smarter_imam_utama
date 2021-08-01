<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="https://html.psdtohtmlexpert.com/admin/aqua-admin-template/html/images/favicon.ico">

  <title>Aqua Admin - Log in </title>

  <!-- Vendors Style-->
  <link rel="stylesheet" href="<?php echo base_url('assets/main/css/vendors_css.css') ?>">

  <!-- Style-->
  <link rel="stylesheet" href="<?php echo base_url('assets/main/css/style.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/main/css/skin_color.css') ?>">

</head>
<?php if ($this->session->userdata('logged_in') != 1){ ?>
  <body class="hold-transition theme-primary bg-gradient-primary">
<?php }else{ ?>
  <body class="hold-transition light-skin sidebar-mini theme-primary">
<?php } ?>