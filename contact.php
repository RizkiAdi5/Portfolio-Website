<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullName = $_POST['FullName'];
    $email = $_POST['email'];
    $mobilePhone = $_POST['MobilePhone'];
    $emailSubject = $_POST['Email-subject'];
    $message = $_POST['message'];

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format";
        exit;
    }

    // Send email (example)
    $to = "rizkiadiprasetyo17r@gmail.com";
    $subject = $emailSubject;
    $txt = "Name: $fullName\nEmail: $email\nMobile Phone: $mobilePhone\n\n$message";
    

    mail($to, $subject, $txt,);

    echo "Message sent successfully";
} else {
    // Redirect if accessed directly
    header("Location: index.php");
    exit;
}
?> 
