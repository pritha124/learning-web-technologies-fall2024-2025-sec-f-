<?php
// Include the database connection file
require_once('../Model/userModel.php');

// Check if the search query is set
if (isset($_GET['search_query'])) {
    $search_query = $_GET['search_query'];

    // Connect to the database
    $conn = getConnection();

    // Query to search for employees (changed table name to 'employee')
    $sql = "SELECT * FROM employee WHERE name LIKE ?";
    $stmt = $conn->prepare($sql);
    $search_term = "%" . $search_query . "%"; // Adding wildcards for partial search
    $stmt->bind_param("s", $search_term);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if there are any results
    if ($result->num_rows > 0) {
        echo "<ul>";
        while ($row = $result->fetch_assoc()) {
            echo "<li>";
            echo "<strong>Name:</strong> " . htmlspecialchars($row['name']) . "<br>";
            echo "<strong>Phone:</strong> " . htmlspecialchars($row['phone']) . "<br>";
            echo "<strong>Username:</strong> " . htmlspecialchars($row['user_name']) . "<br>";
            echo "</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>No users found matching your search.</p>";
    }

    // Close connection
    $stmt->close();
    $conn->close();
}
?>
