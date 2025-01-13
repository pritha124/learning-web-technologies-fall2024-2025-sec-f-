<?php
session_start();
if (isset($_COOKIE['flag'])) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Search Users</title>
    <link rel="stylesheet" type="text/css" href="../Static/css/search.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <div class="container">
        <h1>Search Users</h1>

        <!-- Search Box -->
        <input type="text" id="search_query" placeholder="Enter name to search..." />
        <button id="search_btn">Search</button>

        <!-- Search results will appear here -->
        <div id="searchResults"></div>

        <a href="welcome.php">Back</a> |
        <a href="../controller/logout.php">Logout</a>
    </div>

    <script>
        $(document).ready(function() {
            $('#search_btn').click(function() {
                var searchQuery = $('#search_query').val();

                if (searchQuery.trim() !== "") {
                    // Send AJAX request to search_action.php
                    $.ajax({
                        url: 'search_action.php',
                        type: 'GET',
                        data: { search_query: searchQuery },
                        success: function(response) {
                            $('#searchResults').html(response);
                        },
                        error: function() {
                            $('#searchResults').html("<p>There was an error processing the request.</p>");
                        }
                    });
                } else {
                    $('#searchResults').html("<p>Please enter a name to search.</p>");
                }
            });
        });
    </script>
</body>
</html>
<?php
} else {
    header('Location: login.html');
    exit();
}
?>
