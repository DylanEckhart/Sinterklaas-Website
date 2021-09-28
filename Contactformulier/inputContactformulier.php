<?php

if (isset($_POST['submit'])) {
    $to  = "dylaneckhart09@gmail.com";
    $from  = $_POST['email'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = "Form Submission";
    $subject2 = "Copy of your form submission";
    $message = $first_name . "" . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to, $subject, $message, $headers);
    mail($from, $subject2, $message2, $headers2);
    echo "Mail sent. Thank you " . $first_name . ", we will contact you shortly.";
}

