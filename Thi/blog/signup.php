<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sign Up</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<style>
		/* Nền gradient màu hồng nhạt */
		body {
			background: linear-gradient(to right, #ffe6f0, #fff);
			font-family: 'Arial', sans-serif;
			color: #333;
		}

		/* Card form */
		.shadow {
			background: #fff;
			border-radius: 10px;
			padding: 30px;
			box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
		}

		/* Tiêu đề */
		.display-4 {
			font-family: 'Poppins', sans-serif;
			color: #ff8fb1;
			font-weight: bold;
			text-align: center;
		}

		/* Nút bấm */
		.btn-primary {
			background: #ff8fb1;
			border: none;
			padding: 10px 20px;
			border-radius: 30px;
			font-size: 16px;
			font-weight: bold;
			text-transform: uppercase;
			transition: all 0.3s ease;
			width: 100%;
		}

		.btn-primary:hover {
			background: #ff7299;
			color: #fff;
		}

		/* Liên kết */
		.link-secondary {
			font-size: 14px;
			text-decoration: none;
			color: #ff8fb1;
			font-weight: bold;
			display: block;
			text-align: center;
			margin-top: 10px;
			transition: color 0.3s ease;
		}

		.link-secondary:hover {
			color: #ff7299;
		}

		/* Form field */
		.form-control {
			border-radius: 30px;
			padding: 10px 15px;
			border: 1px solid #ddd;
			transition: border-color 0.3s ease;
		}

		.form-control:focus {
			border-color: #ff8fb1;
			box-shadow: none;
		}

		/* Alert */
		.alert {
			border-radius: 30px;
			padding: 10px;
			font-size: 14px;
			text-align: center;
		}

		.alert-danger {
			background-color: #ffe6f0;
			color: #ff8fb1;
			border: 1px solid #ff8fb1;
		}

		.alert-success {
			background-color: #e6ffe6;
			color: #5cb85c;
			border: 1px solid #5cb85c;
		}
	</style>
</head>
<body>
    <div class="d-flex justify-content-center align-items-center vh-100">
    	<form class="shadow w-450" action="php/signup.php" method="post">
    		<h4 class="display-4 fs-1">Create Account</h4><br>
    		
    		<!-- Hiển thị lỗi -->
    		<?php if(isset($_GET['error'])){ ?>
    		<div class="alert alert-danger" role="alert">
			  <?php echo htmlspecialchars($_GET['error']); ?>
			</div>
		    <?php } ?>

			<!-- Hiển thị thành công -->
		    <?php if(isset($_GET['success'])){ ?>
    		<div class="alert alert-success" role="alert">
			  <?php echo htmlspecialchars($_GET['success']); ?>
			</div>
		    <?php } ?>

			<div class="mb-3">
			    <label class="form-label">Full Name</label>
			    <input type="text" class="form-control" name="firstname" value="<?php echo (isset($_GET['firstname']))? htmlspecialchars($_GET['firstname']):"" ?>">
			</div>

			<div class="mb-3">
			    <label class="form-label">User name</label>
			    <input type="text" class="form-control" name="username" value="<?php echo (isset($_GET['username']))? htmlspecialchars($_GET['username']):"" ?>">
			</div>

			<div class="mb-3">
			    <label class="form-label">Password</label>
			    <input type="password" class="form-control" name="pass">
			</div>
			  
			<button type="submit" class="btn btn-primary">Sign Up</button>
			<a href="login.php" class="link-secondary">Login</a>
		</form>
    </div>
</body>
</html>
