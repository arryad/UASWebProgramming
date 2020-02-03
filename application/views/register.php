<div class="login-form">
	<form action="<?= base_url('Register/f_register');?>" method="post">
		<h2 class="text-center">Register</h2>    		  		
		<div class="form-group">			
			<?= $this->session->flashdata('message'); ?>
		</div>		
		<div class="form-group">
			<input type="text" name="username" class="form-control" placeholder="Username berdasarkan NPM" required="required">
		</div>
		<div class="form-group">
			<input type="password" name="password" class="form-control" placeholder="Password" required="required" id="txtPassword" onchange="check_pass();">
		</div>
		<div class="form-group">
			<input type="password" name="retype-password" class="form-control" placeholder="retype-password" required="required" id="txtConfirmPassword" onchange="check_pass();">
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-primary btn-block" id="btnSubmit">Register</button>
		</div>
		<div class="clearfix">
			<label class="pull-left checkbox-inline"><input type="checkbox"> Remember me</label>
		</div>        
	</form>
	<p class="text-center"><a href="<?= base_url('Login_c')?>">Login</a></p>
</div>
 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
 <script type="text/javascript">
    $(function () {
        $("#btnSubmit").click(function () {
            var password = $("#txtPassword").val();
            var confirmPassword = $("#txtConfirmPassword").val();
            if (password != confirmPassword) {
                alert("Passwords do not match.");
                return false;
            }
            return true;
        });
    });
</script>