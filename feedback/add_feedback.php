<?php

    include 'config.php';

    $fname = $_POST["firstname"];
    $lname = $_POST["lastname"];
    $email = $_POST["emailaddress"];
    $feedback = $_POST["enterfeedback"];

    #add to feedback table sql 
    $add_feedback = "INSERT INTO feedback_list(f_name,l_name,email,feedback)
    VALUES('$fname','$lname','$email','$feedback')";

    
    if ($con->query($add_feedback) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $add_feedback . "<br>" . $con->error;
    }

    #running the sql on the server
    $con->close();

    header("Location:feedbackview.php");

?>