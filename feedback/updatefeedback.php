<?php

include "config.php";

$f_id = $_GET["feedback_id"];
$fd = $_GET["feedback"];

$sql = "UPDATE feedback_list ". "SET feedback='$fd'" . "WHERE feedback_id= $f_id";

echo $sql;

if ($con->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

header("Location:feedbackview.php");

?>