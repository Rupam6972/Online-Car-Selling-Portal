<html lang="en">
  <head>
      <meta charset="utf-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta name="description" content="About the site"/>
      <meta name="author" content="Author name"/>
      <title> THE TITLE </title>
    
      <!-- core CSS -->
      <link href="css/bootstrap.min.css" rel="stylesheet"/>
      <link href="css/font-awesome.min.css" rel="stylesheet"/>
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
		<div class="title" style="font-size: 20px;color: #d9d9d9;"> Welcome to the world where cars are now automated and now even without the help of human cars can drive.</br> </br> Here come explore the world of automated cars.</div>
		<center>
		<h1> Search Car</h1>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		<input type="text" name="Car_Name" placeholder="ENTER Car_No To Search"/> <br/>
		<input type="submit" name="search" value="Search Data">
		</form>
		<?php
		$connection = mysqli_connect("localhost","root", "");
		$db = mysqli_select_db($connection,'tesla');
		if(isset($_POST['search'])){
			$b = $_POST['Car_Name'];
            $querys= "SELECT * FROM car where Model ='$b'";
            $results = mysqli_query($connection, $querys);
         if($row = $results->fetch_assoc()){
                ?>
             <div class="row" style="padding:5px;">
				<div class="col-md-3">  <?php echo $row['Car_No']; ?> </div>
				<div class="col-md-3">  <?php echo $row['Model']; ?> </div>
				<div class="col-md-3">  <?php echo $row['Manufacturer']; ?> </div>
				<div class="col-md-3">  <?php echo $row['Features']; ?> </div>
				<div class="col-md-3">  <?php echo $row['Price']; ?> </div>
				<div class="col-md-3">  <?php echo $row['Key_word']; ?> </div>
            </div>
            <?php
         }
         else{
             echo "No Data";

         }

		}
		?>
		</center>
		
		
	</section>

  </body>
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.isotope.min.js"></script>
  <script src="js/wow.min.js"></script>
</html>
