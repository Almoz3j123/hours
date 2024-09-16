<?php
session_start();

// تحقق مما إذا كان المستخدم مسجل الدخول
if (!isset($_SESSION['username'])) {
    header('Location: login.php'); // إعادة توجيه إلى صفحة تسجيل الدخول إذا لم يسجل الدخول
    exit;
}
?>

<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>لوحة التحكم</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            color: #333;
        }
        .dashboard-container {
            width: 300px;
            margin: 100px auto;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            text-align: center;
        }
        button {
            padding: 10px;
            background-color: #f44336;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #e53935;
        }
    </style>
</head>
<body>

<div class="dashboard-container">
    <h2>مرحبًا، <?= $_SESSION['username'] ?></h2>
    <p>أنت الآن في لوحة التحكم.</p>
    <form method="POST" action="logout.php">
        <button type="submit">تسجيل الخروج</button>
    </form>
</div>

</body>
</html>