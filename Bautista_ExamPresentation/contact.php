<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

echo "
<!DOCTYPE html>
<html>
<head>
<title>Message Sent</title>
<style>
body{
    font-family:Arial,sans-serif;
    text-align:center;
    padding:50px;
}
</style>
</head>
<body>

<h1>Thank You!</h1>

<p>Your message has been received.</p>

<h3>Details:</h3>

<p><strong>Name:</strong> $name</p>
<p><strong>Email:</strong> $email</p>
<p><strong>Message:</strong> $message</p>

<a href='index.html'>Go Back</a>

</body>
</html>
";
?>