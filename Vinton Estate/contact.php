<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    $subject = "New Contact Form Submission";
    $to = "vintonrealestategroup@outlook.com";
    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";
    mail($to, $subject, $message, $headers);
    header("Location: index.html");
    exit();
}
?>