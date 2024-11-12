<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UMBC Restaurant Information Site</title>
    <link rel="stylesheet" href="restaurant-info.css">
    <link rel="stylesheet" href ="styles.css">
    
</head>
<body>
<!--header for page -->
<?php 
$pageTitle = 'UMBC Restaurant Information Site';
$headerTitle = 'UMBC Campus Food Review';
include 'header.php'; 
?>
        <table>
		<!--creating column headers for restaurant, hours, and reviews on restaurant view screen -->
            <tr>
                <th>Restaurant</th>
                <th>Hours</th>
                <th>Reviews</th>
            </tr>
			<!--cell for each restaurant in each column (name, hours, rating) -->
            <tr>
                <td>Retriever Market</td>
                <td>10-8 pm</td>
                <td>3.7/5</td>
            </tr>
            <tr>
                <td>Halal Shack</td>
                <td>12-8 pm</td>
                <td>2/5</td>
            </tr>
            <tr>
                <td>2mato</td>
                <td>12-8 pm</td>
                <td>3.4/5</td>
            </tr>
            <tr>
                <td>Wild Greens</td>
                <td>12-8 pm</td>
                <td>2.6/5</td>
            </tr>
            <tr>
                <td>Sushi Do</td>
                <td>4-6 pm</td>
                <td>1/5</td>
            </tr>
            <tr>
                <td>Copperhead Jack's</td>
                <td>9-12 pm</td>
                <td>4.5/5</td>
            </tr>
            <tr>
                <td>Absurd Bird</td>
                <td>3-10 pm</td>
                <td>3.7/5</td>
            </tr>
            <tr>
                <td>Indian Kitchen</td>
                <td>12-4 pm</td>
                <td>4.2/5</td>
            </tr>
            <tr>
                <td>Chic-Fil-A</td>
                <td>12-8 pm</td>
                <td>4.4/5</td>
            </tr>
            <tr>
                <td>Starbucks</td>
                <td>6-10 pm</td>
                <td>2.8/5</td>
            </tr>
            <tr>
                <td>Einstein Bros</td>
                <td>8-12 pm</td>
                <td>2.4/5</td>
            </tr>
        </table>
    </div>
	<footer>
        <p>© UMBC Dining Services</p>
    </footer>
</body>
</html>
