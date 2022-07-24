<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<!-- Meta, title, CSS, favicons, etc. -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image" href="<?php echo base_url(); ?>assets/img/Icon Dapurtani 5.png">
	<title>Dapurtani</title>

	<!-- Bootstrap -->
	<link href="<?php echo base_url(); ?>admin_assets/css/bootstrap.min.css" rel="stylesheet">
	<!-- Font Awesome -->
	<link href="<?php echo base_url(); ?>admin_assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<!-- Data Tables -->
	<link href="<?php echo base_url(); ?>admin_assets/css/dataTables.bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>admin_assets/css/responsive.bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.0/css/buttons.dataTables.min.css">

	<!-- Custom Theme Style -->
	<link href="<?php echo base_url(); ?>admin_assets/css/custom.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>admin_assets/css/datepicker.css" rel="stylesheet">
</head>

<body class="nav-md">
	<div class="container body">
		<div class="main_container">
			<?= $nav; ?>
			<!-- page content -->
			<div class="right_col" role="main">
				<?= $content ?>
			</div>
			<!-- /page content -->

			<!-- footer content -->
			<footer>
				<div class="pull-right">
					Dapurtani 2018-2019
				</div>
				<div class="clearfix"></div>
			</footer>
			<!-- /footer content -->
		</div>
	</div>

	<!-- jQuery -->
	<script src="<?php echo base_url(); ?>admin_assets/js/jquery.min.js"></script>

	<script src="<?php echo base_url(); ?>admin_assets/js/bootstrap-datepicker.js"></script>
	<!-- Bootstrap -->
	<script src="<?php echo base_url(); ?>admin_assets/js/bootstrap.min.js"></script>
	<!-- Data Tables -->
	<script src="<?php echo base_url(); ?>admin_assets/js/jquery.dataTables.min.js"></script>
	<script src="<?php echo base_url(); ?>admin_assets/js/dataTables.bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>admin_assets/js/dataTables.responsive.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.6.0/js/dataTables.buttons.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.6.0/js/buttons.flash.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.6.0/js/buttons.html5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.6.0/js/buttons.print.min.js"></script>

	<!-- Custom Theme Scripts -->
	<script src="<?php echo base_url(); ?>admin_assets/js/custom.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function () {
			$('#datatable').DataTable();

			// datatable for export data
			$('#tabelUser').DataTable({
        dom: '<"top"Bf>rt<"bottom"lp><"clear">',
				buttons: [
					'copy', 'csv', 'excel', 'pdf', 'print'
				]
			});

      // datatable for export data
			$('#tabelPemesanan').DataTable({
        dom: '<"top"Bf>rt<"bottom"lp><"clear">',
				buttons: [
					'copy', 'csv', 'excel', 'pdf', 'print'
				]
			});

      $('.alert-message').alert().delay(3000).slideUp('slow');

		});
	</script>
	<script>
		$(function () {
			$('#datepicker').datepicker({
				autoclose: true
			});
		});

	</script>
	<script>
		$(function () {
			$('#datepicker1').datepicker({
				autoclose: true
			});
		});

	</script>
</body>

</html>
