
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OnWave Music - About Us</title>
    <link rel="stylesheet" href="style.css">
<style>

/* General Styles */
body, html {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
}
/* About Section */
.about-section {
    position: relative;
    height: 400px;
}

.about-background {
    background: url('./images/a1.jpg') no-repeat center center/cover;
    height: 100%;
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
}       

.about-text {
    color: white;
    text-align: center;
    animation: slide 10s linear infinite;
}

.about-text h1 {
    font-size: 48px;
    margin: 0;
}

.about-text p {
    font-size: 20px;
    margin-top: 10px;
}

/* Content Section */
.content-section {
    padding: 50px 20px;
    text-align: center;
}

.content-section h2 {
    font-size: 36px;
    margin-bottom: 20px;
}

.content-section p {
    font-size: 18px;
    margin-bottom: 20px;
}
    
/* Mission Section */

.mission-section {
    padding: 50px 20px;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #ffffff;
}

.mission-content {
    max-width: 1200px;
    width: 100%;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: flex-start;
}

.mission-text {
    flex: 1;
    margin-right: 50px; /* Space between the text and the stats */
}

.mission-text h3 {
    font-size: 36px;
    font-weight: 600;
    margin-bottom: 20px;
    color: #333;
}

.mission-text p {
    font-size: 16px;
    color: #666;
    margin-bottom: 20px;
    line-height: 1.6;
}

.mission-text .read-more-button {
    background-color: #ff4757;
    color: white;
    border: none;
    padding: 12px 30px;
    font-size: 16px;
    border-radius: 25px;
    cursor: pointer;
    transition: background-color 0.3s ease;
    box-shadow: 0 4px 10px rgba(255, 71, 87, 0.3);
}

.mission-text .read-more-button:hover {
    background-color: #e33e4d;
}

.mission-stats {
    flex: 1;
    display: flex;
    flex-direction: column;
    justify-content: center;
}

.progress-bars {
    margin-top: 30px;
}

.progress-label {
    display: flex;
    justify-content: space-between;
    font-size: 14px;
    color: #666;
    margin-bottom: 5px;
}

.progress-bar {
    width: 100%;
    background-color: #e0e0e0;
    height: 8px;
    border-radius: 4px;
    overflow: hidden;
    margin-bottom: 20px;
}

.progress-bar span {
    display: block;
    height: 100%;
    background-color: #ff4757;
}

/* history */
.History-section{
    text-align: center;
    align-items:center;
}
.timeline {
    display: flex;
    justify-content: space-between;
    padding: 20px;
    background-color: #f9f9f9;
    position: relative;
    margin: 50px auto;
    max-width: 1000px;
}

.timeline::before {
    content: '';
    position: absolute;
    top: 50%;
    left: 0;
    right: 0;
    height: 2px;
    background-color: #ddd;
    z-index: 1;
}

.timeline-event {
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 30%;
    z-index: 2;
    text-align: center;
}

.timeline-date {
    margin-bottom: 10px;
    font-size: 14px;
    color: #666;
}

.timeline-content {
    background-color: #fff;
    border: 1px solid #ddd;
    padding: 15px;
    border-radius: 8px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
}

.timeline-content img {
    width: 100%;
    height: 230px;
    border-radius: 8px;
    margin-bottom: 15px;
}

.timeline-content h3 {
    font-size: 18px;
    margin-bottom: 10px;
    color: #333;
}

.timeline-content p {
    font-size: 14px;
    color: #666;
}


/* viewers */
.viewers-section {
    padding: 50px 20px;
    background-color: #f9f9f9;
    text-align: center;
}

.viewers-section h2 {
    font-size: 36px;
    margin-bottom: 20px;
    color: #333;
}

.viewers-section p {
    font-size: 18px;
    margin-bottom: 40px;
    color: #666;
}

.viewer-stats {
    display: flex;
    justify-content: center;
    gap: 400px;
}

.stat {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.stat h3 {
    font-size: 48px;
    color: #ff4757;
    margin: 0;
}

.stat p {
    font-size: 18px;
    color: #333;
    margin-top: 10px;
}



@keyframes slide {
    0% {
        transform: translateX(100%);
    }
    50% {
        transform: translateX(-100%);
    }
    100% {
        transform: translateX(100%);
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
                <li><a href="contact.php">Contact us</a></li>
                <li class="dropdown user-dropdown">
                    <a href="#">Hi, User</a>
                    <ul class="dropdown-content">
                        <li><a href="Dashboard.php">Dashboard</a></li>
                        <li><a href="admin.php">Admin</a></li>
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>

    <section class="about-section">
        <div class="about-background">
            <div class="about-text">
                <h1>About</h1>
                <p>Learn more about our mission and values.</p>
            </div>
        </div>
    </section>


    <!-- New Section (from Image) -->
    <section class="mission-section">
    <div class="mission-content">
        <div class="mission-text">
            <h3>Our Mission</h3>
            <p>Velit aliquet sagittis id consectetur. Accumsan sit amet nulla facilisi morbi tempus.</p>
            <p>Vel turpis nunc eget lorem dolor sed viverra ipsum nunc. Tellus integer feugiat scelerisque varius morbi enim nunc. Neque egestas congue quisque egestas diam. Donec enim diam vulputate ut pharetra sit amet. Amet aliquam id diam maecenas.</p>
            <button class="read-more-button">Read More About Us</button>
        </div>
        <div class="mission-stats">
            <div class="progress-bars">
                <div class="progress-label">
                    <span>Music</span>
                    <span>75%</span>
                </div>
                <div class="progress-bar">
                    <span style="width: 75%;"></span>
                </div>

                <div class="progress-label">
                    <span>News</span>
                    <span>50%</span>
                </div>
                <div class="progress-bar">
                    <span style="width: 50%;"></span>
                </div>

                <div class="progress-label">
                    <span>Entertainment</span>
                    <span>75%</span>
                </div>
                <div class="progress-bar">
                    <span style="width: 75%;"></span>
                </div>

                <div class="progress-label">
                    <span>Shows</span>
                    <span>75%</span>
                </div>
                <div class="progress-bar">
                    <span style="width: 75%;"></span>
                </div>
            </div>
        </div>
    </div>
    </section>

    <h1 style="text-align: center;">history</h1>
    <div class="timeline">
    <div class="timeline-event">
        <span class="timeline-date">October 2010</span>
        <div class="timeline-content">
            <img src="./images/a3.jpg" alt="Event 1 Image">
            <h3>First exclusive radioshow broadcast on OnWave</h3>
            <p>
                Faucibus turpis in eu mi bibendum neque egestas congue quisque. Id interdum velit laoreet id donec. Duis at tellus at urna condimentum mattis pellentesque.
            </p>
        </div>
    </div>
    <div class="timeline-event">
        <span class="timeline-date">August 2005</span>
        <div class="timeline-content">
            <img src="./images/a2.jpg" alt="Event 2 Image">
            <h3>Improving the national broadcast quality</h3>
            <p>
                Dapibus ultrices in iaculis nunc sed augue. Amet cursus sit amet dictum sit. Vel pharetra lorem dolor sed. Diam sollicitudin tempor id eu nisl nunc mi.
            </p>
        </div>
    </div>
    <div class="timeline-event">
        <span class="timeline-date">April 1999</span>
        <div class="timeline-content">
            <img src="./images/a4.jpg" alt="Event 3 Image">
            <h3>Hiring new DJs and launching new shows</h3>
            <p>
                Sagittis id consectetur purus ut faucibus pulvinar elementum integer. Diam vel quam elementum pulvinar etiam non quam lacus. Quis varius quam quisque id.
            </p>
        </div>
    </div>
    </div>
    


    <section class="viewers-section">
    <div class="container">
        <h2>Our Viewers</h2>
        <p>We’ve had the pleasure of working with and gaining the trust of viewers worldwide.</p>
        <div class="viewer-stats">
            <div class="stat">
                <h3 id="viewer-count">1000000</h3>
                <p>Active Viewers</p>
            </div>
            <div class="stat">
                <h3 id="country-count">50</h3>
                <p>Countries</p>
            </div>
            <div class="stat">
                <h3 id="client-count">500</h3>
                <p>Clients</p>
            </div>
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

     <script>
        // JavaScript for potential interactivity
        document.querySelector('.read-more-button').addEventListener('click', function() {
            window.location.href = 'about.php';
        });
    </script>
   
    <script>
        document.addEventListener("DOMContentLoaded", function() {
    let viewerCount = 1000000;
    let countryCount = 50;
    let clientCount = 500;

    function decreaseCount() {
        if (viewerCount > 0) {
            viewerCount -= Math.floor(Math.random() * 10) + 1;
            document.getElementById('viewer-count').textContent = viewerCount.toLocaleString();
        }

        if (countryCount > 0) {
            countryCount -= Math.floor(Math.random() * 2) + 1;
            document.getElementById('country-count').textContent = countryCount.toLocaleString();
        }

        if (clientCount > 0) {
            clientCount -= Math.floor(Math.random() * 5) + 1;
            document.getElementById('client-count').textContent = clientCount.toLocaleString();
        }

        setTimeout(decreaseCount, 1000); // Decrease every second
    }

    decreaseCount();
});

</script>
        
</body>
</html>
