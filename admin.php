<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music Website</title>
    <link rel="stylesheet" href="style.css?233">
</head>
<body>
    
    <header style="background-color: #8888ee;">
        <nav>
            <ul class="nav-list">
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Music</a></li>
                <li><a href="#">Artists</a></li>
                <li><a href="#">About us</a></li>
                <li><a href="#">Contact us</a></li>
                <li class="dropdown user-dropdown">
                    <a href="#">Hi, User</a>
                    <ul class="dropdown-content">
                        <li><a href="#">Profile</a></li>
                        <li><a href="#">Admin</a></li>
                        <li><a href="#">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>

    <section class="admin-content" style="min-height: 200px;">
        <h3>Dashboard</h3>
    </section>
    <footer style="display: block;">
        <center>copyright @2022</center>
    </footer>
</body>
<script src="./js/menu-popper.js"></script>
</html> -->

<?php
session_start();

if (!isset($_SESSION['username']) || $_SESSION['role'] !== 'admin') {
    header('Location: login.php');
    exit();
}

require 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_music'])) {
    $title = $_POST['title'];
    $artist = $_POST['artist'];
    $album = $_POST['album'];
    $genre = $_POST['genre'];
    $file_path = 'uploads/' . basename($_FILES['file']['name']);

    // Debugging: Check if the file was uploaded
    if (!isset($_FILES['file']) || $_FILES['file']['error'] !== UPLOAD_ERR_OK) {
        echo "File upload error: " . $_FILES['file']['error'];
        exit();
    }

    // Move uploaded file to the uploads directory
    if (move_uploaded_file($_FILES['file']['tmp_name'], $file_path)) {
        $sql = "INSERT INTO music (title, artist, album, genre, file_path) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssss", $title, $artist, $album, $genre, $file_path);
        if ($stmt->execute()) {
            echo "New music added successfully!";
        } else {
            echo "Error: " . $stmt->error;
        }
        $stmt->close();
    } else {
        // Debugging: Get more information about the failure
        echo "Failed to upload file. Debugging info:<br>";
        echo "Target path: $file_path<br>";
        echo "Is writable: " . (is_writable(dirname($file_path)) ? 'Yes' : 'No') . "<br>";
        echo "File exists: " . (file_exists($_FILES['file']['tmp_name']) ? 'Yes' : 'No') . "<br>";
    }
}

// Fetch music list from the database
$music_list = [];
$sql = "SELECT * FROM music";
$result = $conn->query($sql);

if ($result) {
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $music_list[] = $row;
        }
    }
} else {
    echo "Error fetching music list: " . $conn->error;
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Area - Music System</title>
    <link rel="stylesheet" href="style.css">
     <style>
       
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

    <main>
        <h1>Admin Area</h1>
        <section class="admin-controls">
            <h2>Manage Music</h2>
            <button onclick="showAddForm()">Add New Song/Album</button>

            <div id="add-form" class="hidden">
                <h3>Add New Song/Album</h3>
                <form action="admin.php" method="post" enctype="multipart/form-data">
                    <label for="title">Title:</label>
                    <input type="text" id="title" name="title" required>
                    
                    <label for="artist">Artist:</label>
                    <input type="text" id="artist" name="artist" required>
                    
                    <label for="album">Album:</label>
                    <input type="text" id="album" name="album">
                    
                    <label for="genre">Genre:</label>
                    <input type="text" id="genre" name="genre">
                    
                    <label for="file">Upload Music File:</label>
                    <input type="file" id="file" name="file" required>
                    
                    <button type="submit" name="add_music">Add Music</button>
                    <button type="button" onclick="hideAddForm()">Cancel</button>
                </form>
            </div>

            <h2>Existing Music</h2>
            <table>
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Artist</th>
                        <th>Album</th>
                        <th>Genre</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($music_list as $music): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($music['title']); ?></td>
                            <td><?php echo htmlspecialchars($music['artist']); ?></td>
                            <td><?php echo htmlspecialchars($music['album']); ?></td>
                            <td><?php echo htmlspecialchars($music['genre']); ?></td>
                            <td>
                                <a href="edit.php?id=<?php echo $music['id']; ?>">Edit</a>
                                <a href="delete.php?id=<?php echo $music['id']; ?>" onclick="return confirm('Are you sure you want to delete this item?')">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </section><br><br><br><br><br><br><br><br>
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
    </main>
    <script src="./js/admin.js"></script>
</body>
</html>
