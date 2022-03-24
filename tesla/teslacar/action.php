
<html lang="en">
  <head>
      <meta charset="utf-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta name="description" content="About the site"/>
      <meta name="author" content="Author name"/>
      <title> THE TITLE </title>

      <!-- core CSS -->
      <link href="css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <link href="css/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
      <link href="css/animate.min.css" rel="stylesheet"/>
      <link href="css/main.css" rel="stylesheet"/>
  </head>

  <body>
    <!-- following section is used for creating the menubar in the webpage -->
	<section id="header">
		<div class="row">
			<div class="col-md-2" style="font-size: 30px;color:#F2674A;"> ACE SHOWROOM </div>
			<div class="col-md-10" style="text-align: right">
				<a href="home.php"> Home </a>
				<a href="show_cars.php" style="margin-left: 20px;"> CARS </a>
				<a href="add.php" style="margin-left: 20px;"> ADD </a>
			</div>
		</div>
	</section>

	<section id = "section1">
		<div class="title"> ELECTRIC WORLD </div>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
    </section>
    <h1>Action </h1>
    <table class="table">
    <thead class="">
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Manufacturer</th>
        <th scope="col">Features</th>
        <th scope="col">Price</th>
        <th scope="col">Edit</th>
        <th scope="col">Delete</th>
    </tr>
    </thead>

    <tbody>
    <?php
    include "DBconnect.php";
    $result = mysqli_query($conn,"SELECT * FROM car");
    while($row = mysqli_fetch_array($result)) {
    ?>
    <tr>
        <td><?php echo $row["Car_No"]; ?></td>
        <td><?php echo $row["Model"]; ?></td>
        <td><?php echo $row["Manufacturer"]; ?></td>
        <td><textarea name="" id="" cols="3" rows="5"><?php echo $row["Features"]; ?></textarea></td>
        <td><?php echo $row["Price"]; ?></td>
        <td><a class="btn btn-primary" href="update.php?carid=<?php echo $row["Car_No"]; ?>">Edit</a></td>
        <td><a class="btn btn-danger" href="delete-process.php?carid=<?php echo $row["Car_No"]; ?>">Delete</a></td>
    </tr>
    <?php
    }
    ?>
    </tbody>
    </table>

  </body>
</html>
