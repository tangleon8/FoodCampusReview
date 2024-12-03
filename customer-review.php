<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Reviews</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to external stylesheet -->
    <script src="customer-reviews.js" defer></script> <!-- Link to external JavaScript -->
</head>
<body>
    <header>
        <!-- Header section with UMBC logo and title -->
        <div class="header-container">
            <img src="https://styleguide.umbc.edu/wp-content/uploads/sites/113/2019/03/UMBC-retriever-social-media.png" alt="UMBC Logo" class="logo">
            <h1 class="header-title">Customer Reviews</h1>
        </div>
    </header>

    <?php
    // Connect to the UMBC database
    $db = mysqli_connect("studentdb-maria.gl.umbc.edu", "leont1", "leont1", "leont1");
    if (mysqli_connect_errno()) {
        echo "Error - could not connect to MySQL";
        exit; // Stop execution if the connection fails
    }

    // SQL query to retrieve all reviews from the database
    $reviews = [];
    $review_query = "SELECT r.name AS restaurant_name, re.reviewer_name, re.review_text, 
                     re.rating, re.review_date 
                     FROM reviews re 
                     JOIN restaurants r ON re.restaurant_id = r.id 
                     ORDER BY re.review_date DESC";
    $review_result = $db->query($review_query);

    // Check if there are any reviews to display
    if ($review_result->num_rows > 0) {
        while ($row = $review_result->fetch_assoc()) {
            $reviews[] = $row; // Add each review to the reviews array
        }
    } else {
        echo "<p>No reviews found.</p>"; // Show a message if no reviews are found
    }
    $db->close(); // Close the database connection
    ?>

    <!-- Main content section -->
    <main class="content">
        <div class="review-container">
            <!-- Back button to navigate back to the homepage -->
            <a href="index.php" class="back-button">← Back to Home</a>

            <!-- Section for displaying all customer reviews -->
            <section class="all-reviews">
                <h2>All Customer Reviews</h2>

                <!-- Sorting options -->
                <div class="sort-options">
                    <label for="sort-select">Sort By:</label>
                    <select id="sort-select" style="margin-bottom: 20px; padding: 10px;">
                        <option value="most-recent">Most Recent</option>
                        <option value="highest-rating">Highest Rating</option>
                        <option value="lowest-rating">Lowest Rating</option>
                        <option value="restaurant">Restaurant</option>
                    </select>
                </div>

                <!-- Check if there are reviews to display -->
                <?php if (!empty($reviews)): ?>
                    <div id="reviews-container">
                        <!-- Loop through each review and display its details -->
                        <?php foreach ($reviews as $review): ?>
                            <div class="review-item" data-rating="<?= (int)$review['rating'] ?>" data-restaurant="<?= htmlspecialchars($review['restaurant_name']) ?>" data-date="<?= $review['review_date'] ?>">
                                <p><strong><?= htmlspecialchars($review['reviewer_name']) ?></strong> reviewed 
                                   <strong><?= htmlspecialchars($review['restaurant_name']) ?></strong> on 
                                   <?= date('F j, Y, g:i a', strtotime($review['review_date'])) ?></p>
                                <blockquote>"<?= htmlspecialchars($review['review_text']) ?>"</blockquote>

                                <!-- Display the ratings as stars -->
                                <p class="rating"><?= str_repeat("★", (int)$review['rating']) . 
                                                 str_repeat("☆", 5 - (int)$review['rating']) ?></p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php else: ?>
                    <!-- Message displayed if no reviews are found -->
                    <p>No recent reviews found.</p>
                <?php endif; ?>
            </section>
        </div>
    </main>

    <!-- Footer section -->
    <footer>
        <p>© UMBC Dining Services</p>
    </footer>
</body>
</html>
