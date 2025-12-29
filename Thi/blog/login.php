<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - Food Review</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    
    <style>
        /* Nền gradient xanh dương hiện đại */
        body {
            background: linear-gradient(135deg, #e0f2fe, #f0f9ff);
            font-family: 'Poppins', sans-serif;
            color: #334155;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0;
        }

        /* Container chính bo góc và đổ bóng */
        .login-container {
            background: #fff;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
            max-width: 900px;
            width: 95%;
            display: flex;
            flex-wrap: wrap;
        }

        /* Hình ảnh ẩm thực bên trái */
        .login-image {
            background: url('https://images.unsplash.com/photo-1504674900247-0877df9cc836?ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80');
            background-size: cover;
            background-position: center;
            min-height: 400px;
            flex: 1.2;
        }

        /* Phần form nhập liệu bên phải */
        .login-form-section {
            padding: 40px;
            flex: 1;
            min-width: 320px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .display-4 {
            color: #0284c7;
            font-weight: 600;
            margin-bottom: 5px;
        }

        /* Nút đăng nhập hệ thống */
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
            transform: translateY(-1px);
        }

        /* Nút Google giả lập */
        .btn-google {
            background: #fff;
            border: 1px solid #e2e8f0;
            color: #475569;
            padding: 10px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            text-decoration: none !important;
            transition: all 0.3s ease;
            margin-top: 15px;
            font-weight: 500;
        }

        .btn-google:hover {
            background: #f8fafc;
            border-color: #cbd5e1;
            color: #1e293b;
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
            color: #0284c7;
            font-size: 14px;
            text-decoration: none;
            font-weight: 600;
        }

        .link-secondary:hover {
            text-decoration: underline;
        }

        /* Ẩn ảnh khi màn hình nhỏ (Mobile) */
        @media (max-width: 768px) {
            .login-image {
                display: none;
            }
        }
    </style>
</head>
<body>

    <div class="login-container">
        <div class="login-image"></div>

        <div class="login-form-section">
            <form action="php/login.php" method="post">
                <div class="text-center mb-4">
                    <h4 class="display-4 fs-2">FOOD LOGIN</h4>
                    <p class="text-muted small">Chào mừng bạn đến với trang đánh giá ẩm thực</p>
                </div>
                
                <?php if(isset($_GET['error'])){ ?>
                <div class="alert alert-danger py-2 text-center" role="alert" style="border-radius: 10px;">
                    <?php echo htmlspecialchars($_GET['error']); ?>
                </div>
                <?php } ?>

                <div class="mb-3">
                    <label class="form-label fw-bold">Username</label>
                    <input type="text" class="form-control" name="username" 
                           placeholder="Nhập tên đăng nhập" autocomplete="username"
                           value="<?php echo (isset($_GET['username']))? htmlspecialchars($_GET['username']):"" ?>">
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Password</label>
                    <input type="password" class="form-control" name="pass" 
                           placeholder="••••••••" autocomplete="current-password">
                </div>

                <button type="submit" class="btn btn-primary w-100 mb-3">Đăng nhập</button>

                <div class="text-center">
                    <p class="small text-muted mb-0">Hoặc tiếp tục với</p>
                    
                    <a href="google-auth.php" class="btn-google">
                        <img src="img/icongg.png" width="20" height="20" alt="Google">
                        <span>Đăng nhập với Google</span>
                    </a>
                </div>

                <div class="mt-4 text-center">
                    <a href="admin-login.php" class="link-secondary">Admin Login</a> |
                    <a href="blog.php" class="link-secondary">Blog</a> |
                    <a href="signup.php" class="link-secondary">Đăng ký</a>
                </div>
            </form>
        </div>
    </div>

</body>
</html>