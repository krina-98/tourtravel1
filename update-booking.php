<?php

include 'db.php';

// Retrieve form data
$id = $_POST['id'];
$userName = $_POST['userName'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$tourType = $_POST['tourType'];

// Prepare and execute SQL statement to update the booking
$sql = "UPDATE bookings SET user_name='$userName', email='$email', phone='$phone', tour_type='$tourType' WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    echo "Booking updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();

?>
