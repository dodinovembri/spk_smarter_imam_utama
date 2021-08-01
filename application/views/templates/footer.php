		<!-- Vendor JS -->
		<script src="<?php echo base_url('assets/main/js/vendors.min.js') ?>"></script>
		<script src="<?php echo base_url('assets/main/css/icons/feather-icons/feather.min.js') ?>"></script>

		<script src="<?php echo base_url('assets/assets/vendor_components/apexcharts-bundle/dist/apexcharts.js') ?>"></script>

		<!-- Aqua Admin App -->
		<?php if  ($this->session->userdata('logged_in') == 1) { ?>
			<script src="<?php echo base_url('assets/main/js/template.js') ?>"></script>
			<script src="<?php echo base_url('assets/main/js/pages/dashboard2.js') ?>"></script>
			
			<script src="<?php echo base_url('assets/assets/vendor_components/datatable/datatables.min.js') ?>"></script>
			<script src="<?php echo base_url('assets/main/js/pages/data-table.js') ?>"></script>
		<?php } ?>

	</body>

</html>