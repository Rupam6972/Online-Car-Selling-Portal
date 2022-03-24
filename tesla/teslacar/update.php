<?php
global $id;
?>
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
<div class="title"> Update CAR  </div>
<?php
include_once 'DBconnect.php';
if(isset($_GET["carid"])){
    $id = $_GET["carid"];
}
else{
    header('location: index.php');
}
$sql = "SELECT * FROM car WHERE Car_No='$id'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result)
?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" class="form_design" method="POST">

    MODEL: <input type="text" name="model" value="<?php echo $row["Model"]; ?>"> <br/>
    MANUFACTURER: <input type="text" name="manufacturer" value="<?php echo $row["Manufacturer"]; ?>"> <br/>
    FEATURES: <input type="text" name="features" value="<?php echo $row["Features"]; ?>"> <br/>
    PRICE: <input type="text" name="price" value="<?php echo $row["Price"]; ?>"> <br/>
    Key_word <input type="text" name="key_word" value="<?php echo $row["Key_word"]; ?>"> <br/>
    <input type="hidden" name="id" value="<?php echo $id; ?>">

    <input type="submit" name="update" value="Update">
</form>
</section>
<?php
if (isset($_POST['update'])){
    $carID=$_POST['id'];
    $u = $_POST['model'];
    $p = $_POST['manufacturer'];
    $c = $_POST['features'];
    $a = $_POST['price'];
    $d = $_POST['key_word'];
    $sql2 = "UPDATE car SET Model='$u',Manufacturer='$p', Features='$c', Price='$a',Key_word='$d' WHERE Car_No='$carID'";
    $result2 = mysqli_query($conn, $sql2);
    if ($result2){

        header('location: action.php?actionDone');
    }
    else{
        header('location: index.php?id='.$carID);
    }

}
?>


</body>
</html>
