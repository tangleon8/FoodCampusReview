
<!DOCTYPE html>
<html lang="en">
<head>
<title> Dining Map </title>
<meta charset="UTF-8">
<meta name="viewport" content="eidth=device-width, initial-scale=1.0">
<link rel="stylesheet" href="styles.css"/>

</head>
<body>
	<?php 
    $pageTitle = 'Dining Map';
    $headerTitle = 'UMBC Dining Map';
    include 'header.php'; 
    ?>
	<div class="map-con">
	<a href="https://dineoncampus.com/UMBC/">
	   <img src="https://umbcactivistparkproject.weebly.com/uploads/1/3/2/1/132157361/2017-parking-map_orig.png" alt="Retrievers dining map" class="map" width="500" height="500">
	   </a>
	   <div class="UMBC-restaurant" id="True Grits">
	</div>
	<!-- The UMBC map when clicked on will redirect users to the Universities dining website which provides all the essestial info needed-->
	<div class="information">
	   <ul id="info" class="Eat">
	   <h1>True Grits</h1>
	   <li>Location:Near Susquehanna Hall</li>
	   <li>Timing:7AM - 8PM</li>
	   <li>Price:$$$$</li>
	   <li>Rating:5</li>
	   </ul>
	   <ul id="info" class="Eat">
	   <h1>Halal Shack</h1>
	   <li>Location:Commons</li>
	   <li>Timing:11AM - 8PM</li>
	   <li>Price:$$$</li>
	   <li>Rating:4</li>
	   </ul>
	   <ul id="info" class="Eat">
	   <h1> Copperhead Jacks</h1>
	   <li>Location:Commons</li>
	   <li>Timing:11AM - 10PM</li>
	   <li>Price:$$</li>
	   <li>Rating:3</li>
	   </ul>
	   <ul id="info" class="Eat">
	   <h1> Chick-fil-A</h1>
	   <li>Location:University Center</li>
	   <li>Timing:9AM - 8PM</li>
	   <li>Price:$$$$</li>
	   <li>Rating:4</li>
	   </ul>
	   <ul id="info" class="Eat">
	   <h1> Starbucks</h1>
	   <li>Location:University Center</li>
	   <li>Timing:8AM - 6PM</li>
	   <li>Price:$$</li>
	   <li>Rating:5</li>
	   </ul>
	   <ul id="info" class="Eat">
	   <h1> The Coffee Shop</h1>
	   <li>Location:Admin Building</li>
	   <li>Timing:7:30AM - 2PM</li>
	   <li>Price:$</li>
	   <li>Rating:4</li>
	   </ul>
	   <ul id="info" class="Eat">
	   <h1> Sushi Do</h1>
	   <li>Location:Commons</li>
	   <li>Timing:11AM - 8PM</li>
	   <li>Price:$$$</li>
	   <li>Rating:3</li>
	   </ul>
	   <ul id="info" class="Eat">
	   <h1> Einstein Bagels</h1>
	   <li>Location:AOK Library</li>
	   <li>Timing:9AM - 10PM</li>
	   <li>Price:$$$</li>
	   <li>Rating:3</li>
	   </ul>
	</div>
</body>
<footer>
	<p>© UMBC Dining Services</p>
</footer>
</html>
