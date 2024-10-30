<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Message</title>
</head>
<body>
<h1>New Message from {{ $firstName }} {{ $lastName }}</h1>
<p><strong>Email:</strong> {{ $email }}</p>
<p><strong>Contact Number:</strong> {{ $contactNumber }}</p>
<p><strong>Message:</strong></p>
<p>{{ $messageBody }}</p> <!-- Changed from $message to $messageBody -->
</body>
</html>
