<div class="container h-p100">
	<div class="row align-items-center justify-content-md-center h-p100">

		<div class="col-12">
			<div class="row justify-content-center no-gutters">
				<div class="col-lg-4 col-md-5 col-12">
					<div class="content-top-agile p-10">
						<img src="<?php echo base_url('assets/login/logo.png') ?>" style="width: 50%;" alt="">
						<h2 class="text-white">PORTAL LOGIN</h2>
					</div>
					<?php $this->load->view('components/flash') ?>
					<div class="p-30 rounded30 box-shadowed b-2 b-dashed">
						<form action="<?php echo base_url('auth/login'); ?>" method="POST">
							<div class="form-group">
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<span class="input-group-text bg-transparent text-white"><i class="ti-user"></i></span>
									</div>
									<input type="email" name="email" class="form-control pl-15 bg-transparent text-white plc-white" placeholder="Username" required>
								</div>
							</div>
							<div class="form-group">
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<span class="input-group-text  bg-transparent text-white" id="mybutton" onclick="change()"><i class="glyphicon glyphicon-eye-open"></i></span>
									</div>
									<input type="password" name="password" class="form-control pl-15 bg-transparent text-white plc-white" placeholder="Password" id="pass" required>
								</div>
							</div>
							<div class="row">
								<!-- /.col -->
								<div class="col-12 text-center">
									<button type="submit" class="btn btn-info btn-rounded mt-10">SIGN IN</button>
								</div>
								<!-- /.col -->
							</div>
						</form>

						<script>
							function change() {
								var x = document.getElementById('pass').type;

								if (x == 'password') {
									document.getElementById('pass').type = 'text';
									document.getElementById('mybutton').innerHTML = '<i class="glyphicon glyphicon-eye-close"></i>';
								} else {
									document.getElementById('pass').type = 'password';
									document.getElementById('mybutton').innerHTML = '<i class="glyphicon glyphicon-eye-open"></i>';
								}
							}
						</script>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>