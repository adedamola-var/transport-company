<?php 

 include('config/db_connect.php');

	$email = $location = $destination = $time_of_travel = '';
	$errors = array('email' => '', 'location' => '', 'destination' => '','time_of_travel' =>'');

	if(isset($_POST['submit'])){
		
		// check email
		if(empty($_POST['email'])){
			$errors['email'] = 'An email is required';
		} else{
			$email = $_POST['email'];
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
				$errors['email'] = 'Email must be a valid email address';
			}
		}

		// check location
		if(empty($_POST['location'])){
			$errors['location'] = 'A location is required';
		} else{
			$location = $_POST['location'];
  			if(!preg_match('/^[a-zA-Z\s]+$/', $location)){
				$errors['location'] = 'location must be letters and spaces only';
			}
		}

		// check destination
		if(empty($_POST['destination'])){
			$errors['destination'] = 'At least one destination is required';
		} else{
			$destination = $_POST['destination'];
			if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $destination)){
				$errors['destination'] = 'destination must be a comma separated list';
			}
		}
    
		// check time_of_travel
		if(empty($_POST['time_of_travel'])){
			$errors['time_of_travel'] = 'At least one time of travel is required';
		} else{
			$time_of_travel = $_POST['time_of_travel'];
			if(!preg_match('/^[0-9a-zA-Z\s]+$/', $time_of_travel)){
				$errors['time_of_travel'] = 'time of travel must be a comma seprated list and either numeric,alphabets or alphanumeric';
			}
		}
		if(array_filter($errors)){
			echo 'errors in the form';
		}else{
            
            $email = mysqli_real_escape_string($conn, $_POST['email']);
            $location = mysqli_real_escape_string($conn, $_POST['location']);
            $destination = mysqli_real_escape_string($conn, $_POST['destination']);
             $time_of_travel = mysqli_real_escape_string($conn, $_POST['time_of_travel']);

            //create sql
            $sql = "INSERT INTO transport(email,location,destination,time_of_travel) VALUES('$email','$location','$destination','$time_of_travel')";

            //save to db and check;
            if(mysqli_query($conn, $sql)){
            	//success
            	header('Location: index.php');

            }else {

            	//error
            	echo 'query error:' . mysqli_error($conn);
            }

            
		
		}

	} // end POST check

?>

<!DOCTYPE html>
<html>
	

<?php include('header.php'); ?>
	<section class="container grey-text">
		 <div class="row">
    	<div class="col push-s4 push-l5">
		<h4 class="center">Add a Trip</h4>
	</div>
</div>
		<form class="white" action="add.php" method="POST">
			<label>Your Email</label>
			<input type="text" name="email" value="<?php echo htmlspecialchars($email) ?>">
			<div class="red-text"><?php echo $errors['email']; ?></div>
			<label>Current location</label>
			<input type="text" name="location" value="<?php echo htmlspecialchars($location) ?>">
			<div class="red-text"><?php echo $errors['location']; ?></div>
			<label>Final destination (comma separated)</label>
			<input type="text" name="destination" value="<?php echo htmlspecialchars($destination) ?>">
			<div class="red-text"><?php echo $errors['destination']; ?></div>
				<label>Time of Trip</label>
				<input type="text" name="time_of_travel" value="<?php echo htmlspecialchars($time_of_travel) ?>">
			<div class="red-text"><?php echo $errors['time_of_travel']; ?></div>
			<div class="center">
				<input type="submit" name="submit" value="Submit" class="btn brand z-depth-0">
			</div>
		</form>
	</section>
	<?php include('footer.php'); ?>

</html>