<?php
session_start();

// Connect to the database
$db = mysqli_connect("studentdb-maria.gl.umbc.edu", "leont1", "leont1", "leont1");

// Check for connection errors
if (mysqli_connect_errno()) {
    die("Error - could not connect to MySQL: " . mysqli_connect_error());
}

// Initialize filters
$rating_filter = isset($_POST['rating']) ? (int)$_POST['rating'] : 0;
$price_filter = isset($_POST['price']) ? (int)$_POST['price'] : 0;

// Build the SQL query dynamically based on filters
$query = "SELECT r.id, r.name, r.price_level, IFNULL(AVG(re.rating), 0) AS avg_rating 
          FROM restaurants r 
          LEFT JOIN reviews re ON r.id = re.restaurant_id 
          WHERE 1 = 1";

if ($rating_filter > 0) {
    $query .= " AND AVG(re.rating) >= $rating_filter";
}
if ($price_filter > 0) {
    $query .= " AND r.price_level <= $price_filter";
}

$query .= " GROUP BY r.id";

// Run the query directly (for debugging)
$result = mysqli_query($db, $query);

if (!$result) {
    die("Error executing query: " . mysqli_error($db));  // Error message to help debug
}

// Store the fetched restaurants
$restaurants = [];
while ($row = mysqli_fetch_assoc($result)) {
    $restaurants[] = $row;
}

// Close the database connection
mysqli_close($db);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UMBC Dining</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="header-container">
            <img src="https://styleguide.umbc.edu/wp-content/uploads/sites/113/2019/03/UMBC-retriever-social-media.png" alt="UMBC Logo" class="logo">
            <h1 class="header-title">UMBC Dining Experience</h1>
        </div>
    </header>

    <main class="content">
        <!-- Filter Form -->
        <div class="filterbar">
            <form method="POST" action="">
                <div class="filter-group">
                    <label for="rating">Average Rating of UMBC restaurants</label>
                    <select id="rating" name="rating" class="rating-filter">
                        <option value="0">All Ratings</option>
                        <option value="5" <?= isset($_POST['rating']) && $_POST['rating'] == '5' ? 'selected' : '' ?>>5 Stars</option>
                        <option value="4" <?= isset($_POST['rating']) && $_POST['rating'] == '4' ? 'selected' : '' ?>>4 Stars</option>
                        <option value="3" <?= isset($_POST['rating']) && $_POST['rating'] == '3' ? 'selected' : '' ?>>3 Stars</option>
                        <option value="2" <?= isset($_POST['rating']) && $_POST['rating'] == '2' ? 'selected' : '' ?>>2 Stars</option>
                        <option value="1" <?= isset($_POST['rating']) && $_POST['rating'] == '1' ? 'selected' : '' ?>>1 Star</option>
                    </select>
                </div>

                <div class="filter-group">
                    <label for="price">Price of UMBC restaurants</label>
                    <select id="price" name="price" class="price-filter">
                        <option value="0">All Prices</option>
                        <option value="3" <?= isset($_POST['price']) && $_POST['price'] == '3' ? 'selected' : '' ?>>$</option>
                        <option value="6" <?= isset($_POST['price']) && $_POST['price'] == '6' ? 'selected' : '' ?>>$$</option>
                        <option value="9" <?= isset($_POST['price']) && $_POST['price'] == '9' ? 'selected' : '' ?>>$$$</option>
                        <option value="15" <?= isset($_POST['price']) && $_POST['price'] == '15' ? 'selected' : '' ?>>$$$$</option>
                    </select>
                </div>

                <button type="submit" class="filter-button">Filter Results</button>
            </form>
        </div>

        <!-- Restaurant List -->
        <div class="restaurant-list-container">
            <h2>UMBC Restaurants</h2>
            <ul class="restaurant-list">
                <?php if (empty($restaurants)): ?>
                    <li>No restaurants found with the selected filters.</li>
                <?php else: ?>
                    <?php foreach ($restaurants as $restaurant): ?>
                    <li>
                        <?= htmlspecialchars($restaurant['name']) ?> 
                        (<?= (int)$restaurant['avg_rating'] ?> Stars) 
                        - <?= str_repeat('$', (int)($restaurant['price_level'] / 3)) ?>
                    </li>
                    <?php endforeach; ?>
                <?php endif; ?>
            </ul>
        </div>
    </main>

    <footer>
        <p>© UMBC Dining Services</p>
    </footer>
</body>
</html>
