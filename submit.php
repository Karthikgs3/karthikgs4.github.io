<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collecting data from the form
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $address = htmlspecialchars($_POST['address']);

    // Formatting the output for display
    echo "<h2>Registration Successful!</h2>";
    echo "<p><strong>Name:</strong> $name</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Phone:</strong> $phone</p>";
    echo "<p><strong>Address:</strong> $address</p>";
} else {
    echo "<p>Error: Form submission failed.</p>";
}
?>
