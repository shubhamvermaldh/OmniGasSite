<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OmniGas Technologies PLC - Clean Energy Solutions</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <header class="main-header">
        <div class="container">
            <div class="header-content">
                <div class="logo">
                    <a href="index.php?page=home">
                        <img src="assets/images/logo.jpeg" alt="OmniGas Technologies PLC" class="logo-img">
                        <span class="logo-text">OmniGas Technologies</span>
                    </a>
                </div>
                <nav class="main-nav">
                    <ul>
                        <li><a href="index.php?page=home" class="<?= ($page === 'home') ? 'active' : '' ?>">Home</a></li>
                        <li><a href="index.php?page=about" class="<?= ($page === 'about') ? 'active' : '' ?>">About</a></li>
                        <li><a href="index.php?page=contact" class="<?= ($page === 'contact') ? 'active' : '' ?>">Contact</a></li>
                    </ul>
                </nav>
                <div class="mobile-menu-toggle">
                    <i class="fas fa-bars"></i>
                </div>
            </div>
        </div>
    </header>
    <main class="main-content">
