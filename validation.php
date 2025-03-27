<?php
// validation.php

// Function to validate email
function validate_email($email) {
    // Using PHP filter_var function with FILTER_VALIDATE_EMAIL filter
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

// Function to validate contact number (assuming a simple format)
function validate_contact($phonno) {
    // Using regular expression to match a pattern of 10 digits
    // You can modify the pattern based on your requirements
    return preg_match("/^[0-9]{10}$/", $phonno);
}
?>
