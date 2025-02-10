<?php
session_start();

if (!isset($_SESSION['username']) || $_SESSION['role'] !== 'admin') {
    header('Location: login.php');
    exit();
}

require 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Fetch the music record
    $sql = "SELECT * FROM music WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $music = $result->fetch_assoc();
    $stmt->close();

     // Fetch the music record
     $sql = "SELECT * FROM music WHERE id = ?";
     $stmt = $conn->prepare($sql);
     $stmt->bind_param("i", $id);
     $stmt->execute();
     $result = $stmt->get_result();
     $music = $result->fetch_assoc();
     $stmt->close();

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $title = $_POST['title'];
        $artist = $_POST['artist'];
        $album = $_POST['album'];
        $genre = $_POST['genre'];
        
        $sql = "UPDATE music SET title=?, artist=?, album=?, genre=? WHERE id=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssi", $title, $artist, $album, $genre, $id);
        
        if ($stmt->execute()) {
            echo "Music updated successfully!";
            header('Location: admin.php');
        } else {
            echo "Error updating record: " . $stmt->error;
        }
        $stmt->close();
    }
} else {
    echo "No ID provided.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Music</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Edit Music</h1>
    <form action="edit.php?id=<?php echo $id; ?>" method="post">
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" value="<?php echo htmlspecialchars($music['title']); ?>" required>
        
        <label for="artist">Artist:</label>
        <input type="text" id="artist" name="artist" value="<?php echo htmlspecialchars($music['artist']); ?>" required>
        
        <label for="album">Album:</label>
        <input type="text" id="album" name="album" value="<?php echo htmlspecialchars($music['album']); ?>">
        
        <label for="genre">Genre:</label>
        <input type="text" id="genre" name="genre" value="<?php echo htmlspecialchars($music['genre']); ?>">
        
        <button type="submit">Save Changes</button>
    </form>
</body>
</html>
