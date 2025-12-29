<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Login - Food Review</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <style>
        body {
            background: linear-gradient(135deg, #0f172a, #1e293b);
            font-family: 'Poppins', sans-serif;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0;
        }

        .admin-container {
            background: #fff;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
            max-width: 900px;
            width: 95%;
            display: flex;
            flex-wrap: wrap;
        }

        .admin-image {
            background: url('https://images.unsplash.com/photo-1556910103-1c02745aae4d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80');
            background-size: cover;
            background-position: center;
            min-height: 400px;
            flex: 1.2;
            position: relative;
        }

        .admin-image::after {
            content: "ADMINISTRATOR";
            position: absolute;
            bottom: 20px;
            left: 20px;
            color: white;
            font-weight: bold;
            letter-spacing: 5px;
            font-size: 0.8rem;
            background: rgba(2, 132, 199, 0.7);
            padding: 5px 15px;
            border-radius: 5px;
        }

        .login-form-section {
            padding: 50px 40px;
            flex: 1;
            min-width: 320px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .display-4 {
            color: #0284c7;
            font-weight: 700;
            margin-bottom: 5px;
        }

        .admin-badge {
            background: #e0f2fe;
            color: #0369a1;
            padding: 5px 15px;
            border-radius: 50px;
            font-size: 0.75rem;
            font-weight: 600;
            display: inline-block;
            margin-bottom: 20px;
        }

        .btn-primary {
            background: #0284c7;
            border: none;
            padding: 12px;
            border-radius: 12px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background: #0369a1;
            transform: translateY(-2px);
        }

        .form-control {
            border-radius: 10px;
            padding: 12px 15px;
            border: 1px solid #e2e8f0;
        }

        .form-control:focus {
            border-color: #0284c7;
            box-shadow: 0 0 0 3px rgba(2, 132, 199, 0.1);
        }

        .link-secondary {
            color: #64748b;
            font-size: 14px;
            text-decoration: none;
            transition: color 0.3s;
        }

        .link-secondary:hover {
            color: #0284c7;
            text-decoration: underline;
        }

        @media (max-width: 768px) {
            .admin-image {
                display: none;
            }
        }
    </style>
</head>
<body>

    <div class="admin-container">
        <div class="admin-image"></div>

        <div class="login-form-section">
            <form action="php/admin-login.php" method="post">
                <div class="text-center">
                    <h4 class="display-4 fs-2">ADMIN LOGIN</h4>
                    <span class="admin-badge text-uppercase">Chỉ dành cho quản trị viên</span>
                </div>
                
                <?php if(isset($_GET['error'])){ ?>
                <div class="alert alert-danger py-2 text-center" role="alert" style="border-radius: 10px; font-size: 14px;">
                    <i class="fas fa-shield-alt me-2"></i>
                    <?php echo htmlspecialchars($_GET['error']); ?>
                </div>
                <?php } ?>

                <div class="mb-3">
                    <label class="form-label fw-bold small">Tên đăng nhập</label>
                    <div class="input-group">
                        <span class="input-group-text bg-light border-end-0" style="border-radius: 10px 0 0 10px;">
                            <i class="fas fa-user-shield text-muted"></i>
                        </span>
                        <input type="text" class="form-control border-start-0" 
                               name="uname" style="border-radius: 0 10px 10px 0;"
                               placeholder="Admin username"
                               value="<?php echo (isset($_GET['uname']))? htmlspecialchars($_GET['uname']):"" ?>">
                    </div>
                </div>

                <div class="mb-4">
                    <label class="form-label fw-bold small">Mật khẩu</label>
                    <div class="input-group">
                        <span class="input-group-text bg-light border-end-0" style="border-radius: 10px 0 0 10px;">
                            <i class="fas fa-lock text-muted"></i>
                        </span>
                        <input type="password" class="form-control border-start-0" 
                               name="pass" style="border-radius: 0 10px 10px 0;"
                               placeholder="••••••••">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary w-100 mb-3">
                    <i class="fas fa-sign-in-alt me-2"></i> Đăng nhập hệ thống
                </button>

                <div class="text-center mt-3">
                    <a href="login.php" class="link-secondary">
                        <i class="fas fa-arrow-left me-1"></i> Quay lại trang User Login
                    </a>
                </div>
            </form>
        </div>
    </div>

</body>
</html>