<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('template/head'); ?>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="<?php echo base_url() ?>assets/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
 <?php $this->load->view('template/header'); ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
<?php $this->load->view('template/sidebar'); ?>
  <!-- Content Wrapper. Contains page content -->
 <?php $this->load->view($isi) ?>
  <!-- /.content-wrapper -->
 <?php $this->load->view('template/footer') ?>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<?php $this->load->view('template/script') ?>
</body>
</html>
