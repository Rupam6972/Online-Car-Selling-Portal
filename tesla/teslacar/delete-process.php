<?php
include_once 'DBconnect.php';
$sql = "DELETE FROM car WHERE Car_No='" . $_GET["carid"] . "'";
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>