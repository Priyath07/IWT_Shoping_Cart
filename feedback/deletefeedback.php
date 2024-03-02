<?php
include "config.php";

$f_id = $_GET["feedback_id"];

$sql = "delete from feedback_list where feedback_id = " . $f_id ;
$con->query($sql);

if ($con->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

header("Location:feedbackview.php");

?>