<?php
session_start();

if (!isset($_SESSION['username']) || $_SESSION['role'] !== 'admin') {
    header('Location: login.php');
    exit();
}

require 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Delete the record
    $sql = "DELETE FROM music WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    
    if ($stmt->execute()) {
        echo "Music deleted successfully!";
        header('Location: admin.php');
    } else {
        echo "Error deleting record: " . $stmt->error;
    }
    $stmt->close();
} else {
    echo "No ID provided.";
    exit();
}
?>
