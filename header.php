<?php
// /includes/header.php
if (!isset($_SESSION)) { session_start(); }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Invoice Generator</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <style>
    :root {
      --primary: #4a63d9;
      --accent: #f1f5ff;
      --text: #2c2f4a;
      --btn-gradient: linear-gradient(135deg, #4a63d9, #6c8bfa);
    }

    body {
      margin: 0;
      font-family: 'Poppins', sans-serif;
      background-color: var(--accent);
      color: var(--text);
    }

    .navbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background: white;
      padding: 20px 40px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.06);
      position: sticky;
      top: 0;
      z-index: 10;
    }

    .logo a {
      color: var(--primary);
      font-size: 1.5rem;
      font-weight: 600;
      text-decoration: none;
    }

    nav ul {
      list-style: none;
      display: flex;
      gap: 20px;
    }

    nav ul li a {
      text-decoration: none;
      color: var(--text);
      font-weight: 500;
      padding: 8px 16px;
      border-radius: 6px;
      transition: background 0.3s;
    }

    nav ul li a:hover {
      background: var(--accent);
    }
  </style>
</head>
<body>
  <header class="navbar">
    <div class="logo">
      <a href="home.php">Invoice Generator</a>
    </div>
    <nav>
      <ul>
        <?php if(isset($_SESSION['user_id'])): ?>
          <li><a href="home.php">Dashboard</a></li>
          <li><a href="index.php">Create Invoice</a></li>
          <li><a href="history.php">Invoices</a></li>
          <li><a href="logout.php">Logout</a></li>
        <?php else: ?>
          <li><a href="login.php">Login</a></li>
          <li><a href="register.php">Register</a></li>
        <?php endif; ?>
      </ul>
    </nav>
  </header>
