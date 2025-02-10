<?php
session_start();

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    // Hardcoded username and password for demo purposes
    $valid_username = 'user';
    $valid_password = 'password';

    if ($username === $valid_username && $password === $valid_password) {
        $_SESSION['username'] = $username;
    } else {
        // Redirect back to login page with error message
        $error = urlencode("Invalid username or password");
        header("Location: login.php?error=" . $error);
        exit();
    }
}

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    // Redirect to login page
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music Website</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav>
            <ul class="nav-list">
                <li><a href="index.php">Home</a></li>
                <li><a href="music.php">Music</a></li>
                <li><a href="#">Artists</a></li>
                <li><a href="about.php">About us</a></li>
                <li><a href="contact.php">Contact us</a></li>
                <li class="dropdown user-dropdown">
                    <a href="#">Hi, User</a>
                    <ul class="dropdown-content">
                        <li><a href="Dashboard.php">Dashboard</a></li>
                        <li><a href="admin.php">Admin</a></li>
                        <li><a href="#">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="background-image">
            <img src="./images/i1.jpeg" alt="Guitar Player">
        </div>
    </main>
    <h3 class="section-title">Featured</h3>
    <section class="content">
        <!-- start music card -->
        <div class="music-card">
            <div style="overflow: hidden;">
                <img src="./images/i2.jpg" alt="">
            </div>
            <div class="card-content">
                <div class="card-title">Purva Mantri</div>
                <div class="card-subtitle">POP</div>
            </div>
        </div>
        <!-- end music card -->

        <!-- start music card -->
        <div class="music-card">
            <div style="overflow: hidden;">
                <img src="./images/i3.jpeg" alt="">
            </div>
            <div class="card-content">
                <div class="card-title">Kim Tae-hyung</div>
                <div class="card-subtitle">Dancer | Sub Vocalist</div>
            </div>
        </div> 
        <!-- end music card -->

        <!-- start music card -->
        <div class="music-card">
            <div style="overflow: hidden;">
                <img src="./images/i4.jpg" alt="">
            </div>
            <div class="card-content">
                <div class="card-title">Min Yoon-gi</div>
                <div class="card-subtitle">Rapper | Songwriter</div>
            </div>
        </div> 
        <!-- end music card -->

        <!-- start music card -->
        <div class="music-card">
            <div style="overflow: hidden;">
                <img src="./images/i5.avif" alt="">
            </div>
            <div class="card-content">
                <div class="card-title">Justin Drew Bieber</div>
                <div class="card-subtitle">Singer</div>
            </div>
        </div> 
        <!-- end music card -->

        <!-- start music card -->
        <div class="music-card">
            <div style="overflow: hidden;">
                <img src="./images/i6.webp" alt="">
            </div>
            <div class="card-content">
                <div class="card-title">Kinjal Dave</div>
                <div class="card-subtitle">Gujarati Singer</div>
            </div>
        </div> 
        <!-- end music card -->

        <!-- start music card -->
        <div class="music-card">
            <div style="overflow: hidden;">
                <img src="./images/i7.jpg" alt="">
            </div>
            <div class="card-content">
                <div class="card-title">Darshan Raval</div>
                <div class="card-subtitle">Singer | Composer</div>
            </div>
        </div>
        <!-- end music card -->

        <!-- start music card -->
        <div class="music-card">
            <div style="overflow: hidden;">
               <img src="./images/i8.jpeg" alt="">
            </div>
            <div class="card-content">
                <div class="card-title">Ed Sheeran</div>
                <div class="card-subtitle">POP</div>
            </div>
        </div>
        <!-- end music card -->
    </section>
    <footer>
        <div class="footer-container">
            <div class="footer-links">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Music</a></li>
                    <li><a href="#">Artists</a></li>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Contact us</a></li>
                </ul>
            </div>
            <div class="footer-search">
                <input type="text" placeholder="search">
                <button type="button">search</button>
            </div>
            <div class="footer-social">
                <span>Follow us:</span>
                <a href="#"><img src="./images/fac.png" alt="Facebook"></a>
                <a href="#"><img src="./images/twitt.png" alt="Twitter"></a>
                <a href="#"><img src="./images/insta.png" alt="Instagram"></a>
            </div>
        </div>
    </footer>

    <!-- JavaScript for search functionality -->
    <script>
        document.querySelector('.footer-search button').addEventListener('click', function() {
            var input = document.querySelector('.footer-search input').value.toLowerCase();
            var cards = document.querySelectorAll('.music-card');

            cards.forEach(function(card) {
                var title = card.querySelector('.card-title').textContent.toLowerCase();
                if (title.includes(input)) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    </script>
</body> 
</html>
