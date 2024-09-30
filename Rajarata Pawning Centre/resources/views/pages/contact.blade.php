<!-- resources/views/contact.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <style>
        body {
            background-color: black;
            color: white;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        .contact-container {
            max-width: 600px;
            margin: auto;
            padding: 20px;
        }

        .form-control {
            background-color: gray;
            color: white;
        }

        .form-control::placeholder {
            color: lightgray;
        }

        .map {
            width: 100%;
            height: 400px;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <!-- Include the Navbar -->
    @include('common_pages.navbar')
    <!-- Main Content -->
    <div class="container mt-5 contact-container">
    <h1>Contact Us</h1>

    <form>

    </form>


<!-- Map Section -->
<h2 class="mt-5">Our Location</h2>
        <iframe class="map" 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.0356147060277!2d144.95373531578593!3d-37.81720997975173!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642af0f95b8a3%3A0xa1b93c8f64f3c2b6!2sSiripura%20New%20Town%2C%20Polonnaruwa%2C%20Sri%20Lanka!5e0!3m2!1sen!2slk!4v1636012222042!5m2!1sen!2slk" 
                allowfullscreen="" 
                loading="lazy"></iframe>

        <!-- Shop Address -->
        <h3 class="mt-5">Address</h3>
        <p>Rajarata Pawning Centre,</p>
        <p>Siripura New Town,</p>
        <p>Polonnaruwa, </p>
        <p>Sri Lanka.</p>
    </div>

    <!-- Include Bootstrap JS -->
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
