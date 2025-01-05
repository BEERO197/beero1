<?php
session_start();
include "../include/connection.php"; // تأكد من أن الاتصال بقاعدة البيانات باستخدام PDO
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">  
    <link rel="stylesheet" href="">    
    <style>    
        <?php include "../style2.css"; ?>   
    </style>
    <meta charset="UTF-8">
    <title>صفحة تسجيل دخول الادمن</title>
</head>
<body>
    <main class="container_card">
        <?php
        if (isset($_POST["add"])) {
            $AD_email = $_POST["email"];
            $AD_password = $_POST["password"];
            
            if (empty($AD_email) || empty($AD_password)) {
                echo "<script>alert('ادخل البريد الالكتروني وكلمة المرور')</script>";
            } else {
                if ($db) { // التحقق من أن الاتصال بقاعدة البيانات موجود
                    // إعداد استعلام PDO
                    $stmt = $db->prepare("SELECT * FROM admin WHERE email = :email");
                    $stmt->execute(['email' => $AD_email]);
                    $user = $stmt->fetch(PDO::FETCH_ASSOC);

                    // التحقق من كلمة المرور
                    if ($user && password_verify($AD_password, $user['password'])) {
                        // تعيين جلسة للمستخدم
                        $_SESSION['user_email'] = $user['email'];
                        echo "<script>alert('مرحبا بك ايها المدير سيتم تحويلك الى لوحة التحكم')</script>";
                        header("Refresh:2; URL=../index.php");
                        exit();
                    } else {
                        echo "<script>alert('عفواً لايمكنك الدخول الى هذه الصفحة سيتم تحويلك الى المتجر')</script>";
                        header("Refresh:2; URL=../index.php");
                        exit();
                    }
                } else {
                    echo "<script>alert('فشل في الاتصال بقاعدة البيانات')</script>";
                }
            }
        }
        ?>
        <div class="product_card1">
            <div class="logo">
                <h1>تسجيل الدخول</h1>
            </div>
            <form action="Admin.php" method="post">
                <label class="label1" for="em">: البريد الإلكتروني </label>
                <input type="email" name="email" id="em" required>
                
                <label class="label1" for="pass">: كلمة السر</label>
                <input type="password" name="password" id="pass" required>
                
                <button type="submit" name="add" class="button_searsh1">تسجيل الدخول</button>
            </form>
        </div>
    </main>
</body>
</html>