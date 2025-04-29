<?php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'Employee') {
    header("Location: login.php");
    exit();
}
$username = htmlspecialchars($_SESSION['username']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Employee Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: url('zam1.jpeg') no-repeat center center fixed;
            background-size: cover;
            color: #fff;
        }

        header {
            background: rgba(0, 0, 0, 0.6);
            padding: 20px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            backdrop-filter: blur(10px);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
        }

        header h1 {
            margin: 0;
            font-size: 28px;
            font-weight: 700;
            color: #ffffff;
        }

        .user-info {
            font-size: 16px;
            margin-top: 5px;
            color: #f0f0f0;
        }

        .logout-btn {
            background: #e74c3c;
            padding: 10px 18px;
            color: #fff;
            border: none;
            border-radius: 6px;
            text-decoration: none;
            font-size: 15px;
            transition: background 0.3s ease;
        }

        .logout-btn:hover {
            background: #c0392b;
        }

        .container {
            padding: 60px 20px;
            display: flex;
            justify-content: center;
        }

        .card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(20px);
            border-radius: 20px;
            padding: 40px;
            max-width: 800px;
            width: 100%;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            text-align: center;
        }

        .card p {
            font-size: 20px;
            margin-bottom: 30px;
            color:black;
        }

        nav {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }

        nav a {
            background: linear-gradient(135deg, #2f80ed, #1c5db8);
            color: white;
            padding: 12px 28px;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 500;
            text-decoration: none;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
            transition: transform 0.2s ease, box-shadow 0.3s ease;
        }

        nav a:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.3);
        }

        @media (max-width: 768px) {
            header {
                flex-direction: column;
                align-items: flex-start;
                gap: 10px;
            }

            nav {
                flex-direction: column;
                align-items: stretch;
            }

            nav a {
                width: 100%;
                text-align: center;
            }
        }
    </style>
</head>
<body>

<header>
    <div>
        <h1>Employee Dashboard</h1>
        <div class="user-info">Logged in as: <strong><?= $username ?></strong></div>
    </div>
    <a href="logout.php" class="logout-btn">Logout</a>
</header>

<div class="container">
    <div class="card">
        <p>Welcome, <strong><?= $username ?></strong>! This is your dashboard.</p>

        <nav>
            <a href="apply_leave.php">Apply for Leave</a>
            <a href="cab.php">Cab</a>
            <a href="settings.php">Settings</a>
        </nav>
    </div>
</div>

</body>
</html>
