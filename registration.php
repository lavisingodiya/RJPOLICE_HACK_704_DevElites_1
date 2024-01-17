<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
	<div class="container">
		<a class="navbar-brand d-flex" href="index.php">
			<img src="images/rjlogo.png" alt="Emblem image" />
			<div class="ms-1">
				<h4>Rajasthan</h4>
				<h4>Police</h4>
			</div>
		</a>

		<img src="images/rjlogo2.png" alt="G-20 Logo" class="G20-logo" style="width: 9%;" />
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
				<li class="nav-item">
					<a class="nav-link Navactive" id="Home" aria-current="page" href="index.php">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="About" href="index.php?info=about">About</a>
				</li>
				<li class="nav-item">
					<a href="index.php?info=registration" id="Service" class="nav-link">Registration</a>
				</li>
				<li class="nav-item">
					<a href="index.php?info=login" id="Service" class="nav-link">Login</a>
				</li>
				<li class="nav-item">
					<a href="index.php?info=faculty_login" id="Service" class="nav-link">Station Login </a>
				</li>
				<li class="nav-item">
					<a href="admin" id="Service" class="nav-link">Admin Login</a>
				</li>
				<li class="nav-item">
					<a href="index.php?info=contact" id="Contact" class="nav-link">Contact</a>
				</li>

			</ul>

		</div>
	</div>
</nav>


<?php
extract($_POST);
if (isset($save)) {
	//check user alereay exists or not
	$sql = mysqli_query($conn, "select * from user where email='$e'");

	$r = mysqli_num_rows($sql);

	if ($r == true) {
		$err = "<font color='red'><h3 align='center'>This user already exists</h3></font>";
	} else {
		//dob
		$dob = $yy . "-" . $mm . "-" . $dd;

		//hobbies
		//$hob=implode(",",$hob);

		//image
		$imageName = $_FILES['img']['name'];


		//encrypt your password
		$pass = md5($p);


		$query = "insert into user values('','$n','$e','$pass','$mob','$sem','$gen','$imageName','$dob',now())";
		mysqli_query($conn, $query);

		//upload image

		mkdir("images/$e");
		move_uploaded_file($_FILES['img']['tmp_name'], "images/$e/" . $_FILES['img']['name']);


		$err = "<font color='blue'><h3 align='center'>Registration successfull !!<h3></font>";
	}
}




?>


<div class="row">
	<div class="col-sm-2"></div>
	<div class="col-sm-8">
		<form method="post" enctype="multipart/form-data">
			<table class="table table-bordered" style="margin-bottom:50px">
				
					<h2 align="center">Registration Form</h2>
				<br>
				<Tr>
					<Td colspan="2"><?php echo @$err; ?></Td>
				</Tr>

				<tr>
					<td>Enter Your Name</td>
					<Td><input type="text" name="n" class="form-control" required /></td>
				</tr>
				<tr>
					<td>Enter Your email </td>
					<Td><input type="email" name="e" class="form-control" required /></td>
				</tr>

				<tr>
					<td>Enter Your Password </td>
					<Td><input type="password" name="p" class="form-control" required /></td>
				</tr>

				<tr>
					<td>Enter Your Mobile </td>
					<Td><input type="text" name="mob" class="form-control" required /></td>
				</tr>

				<!--<tr>
					<td>Select Your Programme</td>
					<Td><select name="pro" class="form-control" required>
					
					<option>BCA</option>
					<option>MCA</option>
					<option>B.Tech</option>
					<option>M.Tech</option>
					</select>
					</td>
				</tr>-->

				<tr>
					<td>Select Your Region type: </td>
					<Td><select name="sem" class="form-control" required>

							<option>Rural</option>
							<option>Urban</option>
						</select>
					</td>
				</tr>

				<tr>
					<td>Select Your Gender</td>
					<Td>
						Male<input type="radio" name="gen" value="m" />
						Female<input type="radio" name="gen" value="f" />
					</td>
				</tr>

				<!--<tr>
					<td>Choose Your hobbies</td>
					<Td>
					Reading<input value="reading" type="checkbox" name="hob[]"/>
					Singing<input value="singin" type="checkbox" name="hob[]"/>
					
					Playing<input value="playing" type="checkbox" name="hob[]"/>
					</td>
				</tr>-->


				<tr>
					<td>Upload Your Image </td>
					<Td><input type="file" name="img" class="form-control" required /></td>
				</tr>

				<tr>
					<td>Enter Your DOB</td>
					<Td>
						<select style="width:100px;float:left" name="yy" class="form-control" required>
							<option value="">Year</option>
							<?php
							for ($i = 1950; $i <= 2016; $i++) {
								echo "<option>" . $i . "</option>";
							}
							?>

						</select>

						<select style="width:100px;float:left" name="mm" class="form-control" required>
							<option value="">Month</option>
							<?php
							for ($i = 1; $i <= 12; $i++) {
								echo "<option>" . $i . "</option>";
							}
							?>

						</select>


						<select style="width:100px;float:left" name="dd" class="form-control" required>
							<option value="">Date</option>
							<?php
							for ($i = 1; $i <= 31; $i++) {
								echo "<option>" . $i . "</option>";
							}
							?>

						</select>

					</td>
				</tr>

				<tr>


					<Td colspan="2" align="center">
						<input type="submit" value="Save" class="btn btn-info" name="save" />
						<input type="reset" value="Reset" class="btn btn-info" />

					</td>
				</tr>
			</table>
		</form>
	</div>
	<div class="col-sm-2"></div>
</div>
</body>
<!-- FOOTER -->
<div class="container-fluid Copyright text-center">

	<small class="text-white">
		&copy; Created with ❤️ from team DevElites
		<a href='https://github.com/lavisingodiya/RJPOLICE_HACK_704_DevElites_1' class="btn btn-warning ms-2 pb-0 pt-0" style="background-color: #f0941e !important; border-color: #f0941e !important;"><b>Visit Us
			</b></a>
	</small>
</div>
</footer>

</html>