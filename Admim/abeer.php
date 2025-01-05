<?php
session_start();
include "connection.php"; // ملف الاتصال بقاعدة البيانات

// التحقق من إرسال النموذج
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // الحصول على البيانات من النموذج
    $email = $_POST['email'];
    $password = $_POST['password'];
   if (empty($email)||empty( $password)){
      echo"ادخل البيانات كاملة";
   }
   else{
   
   
    
    // إعداد جملة SQL (تأكد من استخدام اسم الجدول الصحيح)
    $sql = "INSERT INTO admin1 (email, password) VALUES (:email, :password)";
    $stmt = $db->prepare($sql);
    
    // التحقق من نجاح التحضير
    if ($stmt) {
        // ربط المعاملات بالقيم
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        
        // تنفيذ البيان
        $stmt->execute();

        echo "تم إدخال البيانات بنجاح!";
    } else {
        // عرض رسالة خطأ إذا فشلت عملية التحضير
        echo "فشل في تحضير البيان.";
    }
}

}

?>

<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <title>نموذج إدخال البيانات</title>
</head>
<body>
    <h2>نموذج إدخال البريد الإلكتروني وكلمة المرور</h2>
    <form method="POST" action="">
        <label for="email">البريد الإلكتروني:</label>
        <input type="email" id="email" name="email" required>
        <br>
        <label for="password">كلمة المرور:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <button type="submit">إرسال</button>
    </form>
</body>
</html>