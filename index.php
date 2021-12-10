<?php include'view/header.php'?>

<?php
	require('model/database.php');
	require('model/vehicle_db.php');
	require('model/category_db.php');
	
	$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'list_vehicles';
    }
}

if ($action == 'list_vehicles') {
    $category_id = filter_input(INPUT_GET, 'category_id', 
            FILTER_VALIDATE_INT);
    if ($category_id == NULL || $category_id == FALSE) {
        $category_id = 1;
    }
    $category_name = get_category_name($category_id);
    $categories = get_categories();
    $vehicles = get_vehicles_by_category($category_id);
}

$current_page = substr($_SERVER['REQUEST_URI'], 1);
$current_page = str_replace('carsRUS/?category_id=', '', $current_page);
?>

<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  border: 1px solid #e7e7e7;
  background-color: #f3f3f3;
}

li {
  float: left;
}

li a {
  display: block;
  color: #666;
  text-align: center;
  padding: 1em 3em;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #ddd;
}

li a.active {
  color: white;
  background-color: #333333;
}
</style>


<div class="container">
<!-- Content here -->
<div class="jumbotron">
    <h1 class="display-4">Welcome to Cars R' Us!</h1>
    <p class="lead">We sell the best cars in the city, make sure to come on down and we can talk buisness after you finished having a look at all our cars.</p>
    <hr class="my-4">
    <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
    <p class="lead">
        <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
    </p>
</div>
	<aside>
		<h2>Categories</h2>
		<nav>
			<ul>
				<?php foreach ($categories as $category) : ?>
					<?php if ( $current_page == $category['categoryID'] ) {
						?>
					<li class="nav-item">
						<a class="active" href="?category_id=<?php echo $category['categoryID']; ?>">
						<?php echo $category['categoryName']; ?>
						</a>
					</li>
					<?php } else { ?>
						<li>
						<a href="?category_id=<?php echo $category['categoryID']; ?>">
						<?php echo $category['categoryName']; ?>
						</a>
					</li>
					<?php } ?>
					
				<?php endforeach; ?>
			</ul>
		</nav>
	</aside>

    <div class="card-columns">
	
		
	
		<?php foreach ($vehicles as $vehicle) : ?>
        <div class="card">
			
            <img class="card-img-top" src="images/<?php echo $vehicle['vehicleCode'] ?>.png" alt="<?php echo $vehicle['vehicleCode'] ?>">
			
            <div class="card-body">
            <h5 class="card-title"><?php echo $vehicle['make'], " ", $vehicle['model']; ?></h5>
            <p class="card-text">Year: <?php echo $vehicle['years']; ?>  <br>Transmission: <?php echo $vehicle['transmission']; ?> <br>Trim: <?php echo $vehicle['trims']; ?> <br>Colour: <?php echo $vehicle['colour']; ?> <br>Trunk Space: <?php echo $vehicle['trunkSpace']; ?> <br>MPG: <?php echo $vehicle['mpg']; ?> <br>Horsepower : <?php echo $vehicle['horsePower']; ?> <br>Drivetrain: <?php echo $vehicle['driveTrain']; ?></p>
            </div>
            <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
            </div>
        </div>	
		<?php endforeach; ?>      
    </div>
				
<!--container-->   
</div>

<?php include'view/footer.php'?>