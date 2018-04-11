<!DOCTYPE html>
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <title>Admin</title>
    <link href="<?php echo base_url(); ?>img/favicon.ico" rel="shortcut icon" type="image/x-icon">

    <!-- js -->
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>includes/js/jquery-ui.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>includes/js/script.js"></script>
    <script src="<?php echo base_url(); ?>includes/js/sb-admin-2.js"></script>
    <script src="<?php echo base_url(); ?>vendor/raphael/raphael.min.js"></script>
    <script src="<?php echo base_url(); ?>vendor/morrisjs/morris.min.js"></script>
    <script src="<?php echo base_url(); ?>includes/js/morris-data.js"></script>
    <script src="<?php echo base_url(); ?>vendor/metisMenu/metisMenu.min.js"></script>
    <script src="<?php echo base_url(); ?>vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- DataTables Links (Leave these alone) -->
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <link href="<?php echo base_url();?>vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url();?>vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">
    <link href="<?php echo base_url();?>css/sb-admin-2.css" rel="stylesheet">
    <script src="<?php echo base_url();?>vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>vendor/metisMenu/metisMenu.min.js"></script>
    <script src="<?php echo base_url();?>vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url();?>vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>vendor/datatables-responsive/dataTables.responsive.js"></script>
    <script src="<?php echo base_url();?>js/sb-admin-2.js"></script>

    <!-- css -->
    <link href="<?php echo base_url(); ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css"
          href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="<?php echo base_url(); ?>includes/css/jquery-ui.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url(); ?>includes/css/style.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url(); ?>vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>includes/css/sb-admin-2.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>vendor/morrisjs/morris.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

</head>
<body>

<?php if (current_url() == base_url()): ?>

<?php else: ?>
<div id="wrapper">
    <?php $this->load->view('templates/top_navbar'); ?>
    <div id="page-wrapper">
        <?php endif; ?>

