<?php
session_start();
if ($_SESSION['role'] !== 'officer') {
    header("Location: ../login.php");
    exit();
}
include '../db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Officer Dashboard</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #1e1e1e;
            color: #fff;
            padding-top: 80px;
        }
        .navbar {
            width: 95%;
            background-color: #111;
            padding: 15px;
            position: fixed;
            top: 15px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 1000;
            border-radius: 10px;
            border: 2px solid #444;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.5);
        }
        .navbar .logo {
            font-size: 20px;
            font-weight: bold;
            padding-left: 20px;
        }
        .navbar .menu a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
            padding: 8px 12px;
            border-radius: 5px;
            background-color: #333;
            margin-right: 10px;
        }
        .navbar .menu a:hover {
            background-color: #555;
        }
        .content {
            max-width: 600px;
            margin: 100px auto;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
        }
        h1 {
            margin-bottom: 20px;
            font-size: 50px;
            color: #fff;
        }
        p {
            font-size: 25px;
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <div class="navbar">
        <div class="logo">E-Lend - Officer</div>
        <div class="menu">
            <a href="manage_profile.php">Edit Profile</a>
            <a href="manage_equipment.php">Manage Equipment Data</a>
            <a href="manage_categories.php">Manage Equipment Categories</a>
            <a href="manage_loan_status.php">Loan Status</a>
            <a href="../logout.php" class="logout-link" style="color: #ff4d4d; background-color: #333;">Logout</a>
        </div>
    </div>

    <!-- Officer Dashboard Content -->
    <div class="content">
        <h1>Officer Dashboard</h1>
        <p>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?> (Officer)</p>
    </div>
</body>
</html>
