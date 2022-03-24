'<html lang="en">
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
			<div class="col-md-2" style="font-size: 30px;color:#ffffff;"> ACE SHOWROOM </div>
			<div class="col-md-10" style="text-align: right"> 
				<a href="home.php"> Home </a> 
				<a href="show_cars.php" style="margin-left: 20px;"> CARS </a> 
				<a href="add.php" style="margin-left: 20px;"> ADD </a>
			</div>
		</div>
	</section>
	
	<section id = "section1">
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
	
		<div class="title" style="font-size: 30px;color:#ffffff;"> LIST OF CARS </div>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
	
				<div class="col-md-2" style="font-size: 30px;color:#ffffff;">  Car No </div>
				<div class="col-md-2" style="font-size: 30px;color:#ffffff;">  Model </div>
				<div class="col-md-3" style="font-size: 30px;color:#ffffff;"> Manufacturer </div>
				<div class="col-md-3"style="font-size: 30px;color:#ffffff;">  Features </div>
				<div class="col-md-2"style="font-size: 30px;color:#ffffff;"> Price </div>
				<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		
		</div>
			<?php 
			require_once("DBconnect.php");
			$sql = "SELECT * FROM car";
			$result = mysqli_query($conn, $sql);
			if(mysqli_num_rows($result) > 0){
				
				while($row = mysqli_fetch_array($result)){
				
			?>
			<div class="row" style="padding:5px;"> 
				<div class="col-md-3">  <?php echo $row[0]; ?> </div>
				<div class="col-md-3">  <?php echo $row[1]; ?> </div>
				<div class="col-md-3">  <?php echo $row[2] ?> </div>
				<div class="col-md-3">  <?php echo $row[3] ?> </div>
			</div>
			
			<?php 
				}					
			}
			?>
			
		</div>
		
		
			
		
			
	
	</section>

	
	<!----- Footer ----->
	<section id="footer"> 
	
	</section>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/wow.min.js"></script>
  </body> 
</html>
