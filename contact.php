<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    

    $to = "abdullahisiyad328@gmail.com"; 
    $subject = "Contact Form Submission";
    $body = "Name: $name\nEmail: $email\nMessage:\n$message";

    // Send email
    if (mail($to, $subject, $body)) {
        echo "Thank you for contacting us. We will get back to you soon!";
    } else {
        echo "Sorry, there was an error sending your message.";
    }
} else {
    
    header("Location: contact.php");
    exit();
}
?>

</html>