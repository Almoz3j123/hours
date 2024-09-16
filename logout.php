<?php
session_start();
session_unset(); // حذف جميع المتغيرات الخاصة بالجلسة
session_destroy(); // إنهاء الجلسة
header('Location: login.php'); // إعادة توجيه إلى صفحة تسجيل الدخول
exit;
?>