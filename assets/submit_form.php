<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $project = $_POST["project"];
    
    $to = "yashpanchal2322@gmail.com"; // Replace with your email address
    $subject = "New Project Inquiry";
    $message = "Name: $name\nEmail: $email\nProject: $project";
    
    mail($to, $subject, $message);
}
?>
