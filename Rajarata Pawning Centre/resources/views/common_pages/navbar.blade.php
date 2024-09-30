<!-- resources/views/partials/navbar.blade.php -->

<style>
    /* Custom CSS for Navbar */
    .custom-margin {
        margin-left: 150px; /* Set left margin to 150px for RPC */
    }
    .logo-margin {
        margin-right: 150px; /* Set right margin to 150px for logo */
        height: 60px;
        width: 60px; /* Adjust logo height and width as needed */
    }
    /* Add gap specifically between RPC and Home text */
    .home-link {
        margin-left: 70px; /* Adjust this value for desired gap */
    }
</style>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand custom-margin" href="{{ route('home') }}">RPC</a> <!-- Use the custom-margin class -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link home-link" href="{{ route('home') }}">Home</a> <!-- Use home-link class for gap -->
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('services') }}">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                </li>
            </ul>
            <!-- Add logo on the right side -->
            <a href="{{ route('home') }}">
                <img src="{{ asset('/Images/Home/Logo.webp') }}" alt="Logo" class="logo-margin"> <!-- Adjust the logo path -->
            </a>
        </div>
    </div>
</nav>
