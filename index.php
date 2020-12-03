<?php 

	include('config/db_connect.php');

	// write query for all pizzas
	$sql = 'SELECT location, destination, time_of_travel, id FROM transport ORDER BY created_at';

	// get the result set (set of rows)
	$result = mysqli_query($conn, $sql);

	// fetch the resulting rows as an array
	$trasportation = mysqli_fetch_all($result, MYSQLI_ASSOC);

	// free the $result from memory (good practise)
	mysqli_free_result($result);

	// close connection
	mysqli_close($conn);


?>

<!DOCTYPE html>
<html>
	
	<?php include('header.php'); ?>
    <div class="row">
    	<div class="col push-s5 push-l5">
	<h4 class="center grey-text">Trips!</h4>
</div>
</div>

	<div class="container">
		<div class="row">

			<?php foreach($trasportation as $trans): ?>

				<div class="col s6 m4">
					<div class="card z-depth-0">
						<div class="card-content center">
							<h6><?php echo htmlspecialchars($trans['location']); ?></h6>
							<h6><?php echo htmlspecialchars($trans['destination']); ?></h6>
							<h6><?php echo htmlspecialchars($trans['time_of_travel']); ?></h6>
							
						</div>
						<div class="card-action right-align">
							<a class="brand-text" href="details.php?id=<?php echo $trans['id'] ?>">more info</a>
						</div>
					</div>
				</div>

			<?php endforeach; ?>

		</div>
	</div>

	<?php include('footer.php'); ?>

</html>