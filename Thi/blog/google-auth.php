<?php
session_start();

// Giả lập dữ liệu mà Google sẽ trả về sau khi người dùng xác thực thành công
// Trong thực tế, các dữ liệu này sẽ lấy từ Google API
$_SESSION['user_id'] = "123456789";
$_SESSION['fname'] = "Người dùng";
$_SESSION['username'] = "test_user_google";

// Thông báo đăng nhập thành công và quay lại trang blog hoặc trang chủ
echo "<script>
    alert('Đăng nhập qua Google thành công (Chế độ giả lập)!');
    window.location.href = 'blog.php'; 
</script>";
exit();
?>