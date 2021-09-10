<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="<?php echo base_url('assets/images/logo.png') ?>">

	<?php if ($this->session->userdata('logged_in') != 1) { ?>
		<title>Authentication - SPK-PLPP </title>
		<?php } else {
		if ($this->session->userdata('role_id') == 0) { ?>
			<title>Pimpinan - SPK-PLPP </title>
		<?php } elseif ($this->session->userdata('role_id') == 1) { ?>
			<title>Surveyor - SPK-PLPP </title>
		<?php } ?>
	<?php } ?>

	<!-- Vendors Style-->
	<link rel="stylesheet" href="<?php echo base_url('assets/main/css/vendors_css.css') ?>">

	<!-- Style-->
	<link rel="stylesheet" href="<?php echo base_url('assets/main/css/style.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/main/css/skin_color.css') ?>">

</head>
<?php if ($this->session->userdata('logged_in') != 1) { ?>

	<body class="hold-transition theme-primary bg-gradient-primary">
	<?php } else { ?>

		<body class="hold-transition light-skin sidebar-mini theme-primary">
		<?php } ?>