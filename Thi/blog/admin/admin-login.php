<?php 
session_start();

if(isset($_POST['uname']) && isset($_POST['pass'])){

    include "../db_conn.php";

    $uname = $_POST['uname'];
    $pass = $_POST['pass'];

    $data = "uname=".$uname;
    
    if(empty($uname)){
      $em = "User name is required";
      header("Location: ../admin-login.php?error=$em&$data");
      exit;
    }else if(empty($pass)){
      $em = "Password is required";
      header("Location: ../admin-login.php?error=$em&$data");
      exit;
    }else {

      $sql = "SELECT * FROM admin WHERE username = ?";
      $stmt = $conn->prepare($sql);
      $stmt->execute([$uname]);

      if($stmt->rowCount() == 1){
          $user = $stmt->fetch();

          $username = $user['username'];
          $password = $user['password'];
          $id = $user['id'];

          if($username === $uname){
              // Lưu ý: Chỉ dùng password_verify nếu mật khẩu trong DB đã được mã hóa hash
              if(password_verify($pass, $password)){
                  $_SESSION['admin_id'] = $id;
                  $_SESSION['username'] = $username;

                  // ĐÃ SỬA: Thêm ../ để quay lại thư mục gốc tìm file users.php
                  header("Location: ../users.php");
                  exit;
              }else {
                // Nếu chưa mã hóa mật khẩu, hãy dùng dòng này để test: 
                // if($pass === $password) { ... }
                $em = "Incorrect User name or password (Pass verify fail)";
                header("Location: ../admin-login.php?error=$em&$data");
                exit;
            }

          }else {
            $em = "Incorrect User name or password";
            header("Location: ../admin-login.php?error=$em&$data");
            exit;
         }

      }else {
         $em = "Incorrect User name or password (User not found)";
         header("Location: ../admin-login.php?error=$em&$data");
         exit;
      }
    }
}else {
   header("Location: ../admin-login.php?error=error");
   exit;
}