<div id="login-form" class="container-fluid">
	<form action="<?php echo URL_BASE. '?controller=users&action=login_process';?>" method="POST">
		<h1>Trang đăng nhập</h1>
		<table class="table table-hover table-bordered">
			<tr>
				<td>Địa chỉ Email</td>
				<td>
					<input type="text" name="txtEmail" class="form-controller">
				</td>
			</tr>
			<tr>
				<td>Mật khẩu</td>
				<td>
					<input type="password" name="txtPass" class="form-controller">
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" name="txtLogin" class="form-controller btn btn-success">
				</td>
			</tr>
		</table>
	</form>
</div>