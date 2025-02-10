

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OnWave Music - Genres</title>
    <link rel="stylesheet" href="style.css">
    <script defer src="script.js"></script>
    <style>
body, html {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
}
/* Genres Section */
.genres-section {
    text-align: center;
    padding: 50px 20px;
}

.genres-section h2 {
    font-size: 36px;
    margin-bottom: 10px;
}

.genres-section p {
    font-size: 18px;
    margin-bottom: 30px;
}

.genres-container {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
}

.genre-card {
    background-color: #f9f9f9;
    padding: 20px;
    width: 200px;
    margin: 10px;
    border-radius: 10px;
    text-align: center;
    transition: transform 0.3s ease;
}

.genre-card img {
    width: 50px;
    height: 50px;
    margin-bottom: 20px;
}

.genre-card h3 {
    font-size: 24px;
    margin-bottom: 10px;
}

.genre-card p {
    font-size: 16px;
}

.genre-card:hover {
    transform: scale(1.05);
}

/* Sliding Effect */
.genre-card {
    animation: slideLeft 10s infinite alternate;
}

@keyframes slideLeft {
    0% {
        transform: translateX(0);
    }
    100% {
        transform: translateX(-200px);
    }
}

    </style>
</head>
<body>
<header>
        <nav>
            <ul class="nav-list">
                <li><a href="index.php">Home</a></li>
                <li><a href="music.php">Music</a></li>
                <li><a href="#">Artists</a></li>
                <li><a href="about.php">About us</a></li>
                <li><a href="#">Contact us</a></li>
                <li class="dropdown user-dropdown">
                    <a href="#">Hi, User</a>
                    <ul class="dropdown-content">
                        <li><a href="#">Profile</a></li>
                        <li><a href="admin.php">Admin</a></li>
                        <li><a href="#">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>

    <section class="genres-section">
        <h2>A Variety of Music Genres</h2>
        <p>We offer our listeners a wide variety of music genres, from House and Dubstep to Rock and Jazz. Explore the music that we have to offer you below.</p>

        <div class="genres-container">
            <div class="genre-card">
                <img src="./images/m1.png" alt="House Music Icon">
                <h3>House</h3>
                <p>We pick the best House music for our listeners.</p>
            </div>
            <div class="genre-card">
                <img src="./images/m2.png" alt="Drum & Bass Icon">
                <h3>Drum & Bass</h3>
                <p>Enjoy top-notch Liquid D&B and Neurofunk music on our radio.</p>
            </div>
            <div class="genre-card">
                <img src="./images/m3.png" alt="Dubstep Icon">
                <h3>Dubstep</h3>
                <p>Dozens of new Dubstep tracks are aired regularly on OnWave.</p>
            </div>
            <div class="genre-card">
                <img src="./images/m4.png" alt="Trance Icon">
                <h3>Trance</h3>
                <p>Our DJs broadcast various Trance tracks on OnWave.</p>
            </div>
        </div>
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

</body>
</html>
