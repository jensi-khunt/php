<?php
        session_start();
        if (!isset($_SESSION['username'])) {
            header("Location: login.php");
            exit();
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music System Dashboard</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<style>
body {
    margin: 0;
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
}

.sidebar {
    width: 250px;
    height: 100vh;
    background-color: #3e403e;
    color: white;
    position: fixed;
    top: 0;
    left: 0;
    padding-top: 20px;
}

.sidebar h2 {
    text-align: center;
    font-size: 24px;
}

.sidebar ul {
    list-style-type: none;
    padding: 0;
}

.sidebar ul li {
    padding: 15px;
    text-align: left;
}

.sidebar ul li a {
    color: white;
    text-decoration: none;
    display: block;
}

.sidebar ul li:hover {
    background-color: #4ca9b5;
}

.main-content {
    margin-left: 250px;
    padding: 20px;
}

.header h1 {
    color: #333;
}

.stats {
    display: flex;
    justify-content: space-around;
    margin-top: 20px;
}

.stat-item {
    background-color: #666;
    color: white;
    padding: 20px;
    border-radius: 10px;
    width: 30%;
    text-align: center;
}

.music-player {
    margin-top: 50px;

}

.music-player audio {
    width: 100%;
}

.charts {
    margin-top: 30px;
    margin-bottom: 50px;
    
}
.charts canvas {
    max-width: 100%; /* Reduce width to fit within the screen */
   
}
</style>
</head>
<body>
    
    <div class="sidebar">
        <h2>Music Dashboard</h2>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="admin.php">admin</a></li>
            <li><a href="#">Top Charts</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </div>

    <div class="main-content">
        <div class="header">
            <h1>Welcome, <?php echo $_SESSION['username']; ?>!</h1>
            <p>Your personalized dashboard</p>
        </div>

        <div class="stats">
            <div class="stat-item" style="background-color: red;">
                <h3>Total Songs Played</h3>
                <p id="total-songs">50</p>
            </div>
            <div class="stat-item" style="background-color: green;">
                <h3>Playlists Created</h3>
                <p id="playlists">5</p>
            </div>
            <div class="stat-item" style="background-color: blue;">
                <h3>Favorites</h3>
                <p id="favorites">12</p>
            </div>
        </div>

        <div class="charts">
            <h2>Monthly Listening Activity</h2>
            <canvas id="activityChart"></canvas>
        </div>

        <div class="music-player">
            <h2>Now Playing</h2>
            <audio controls>
                <source src="./uploads/song.mp3" type="audio/mpeg">
                Your browser does not support the audio element.
            </audio>
        </div>
    </div>

    <script>
        const ctx = document.getElementById('activityChart').getContext('2d');
        const activityChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                datasets: [{
                    label: 'Songs Played',
                    data: [12, 19, 3, 5, 2, 3, 7],
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 2,
                    fill: false,
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</body>
</html>
