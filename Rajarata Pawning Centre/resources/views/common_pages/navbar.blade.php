<style>
    /* Custom CSS for Navbar */
    .custom-margin {
        margin-left: 120px; /* Set left margin for RPC */
    }
    .logo-margin {
        margin-right: 120px; /* Set right margin for logo */
        height: 60px;
        width: 60px; /* Adjust logo height and width as needed */
    }
    /* Add gap specifically between RPC and Home text */
    .home-link {
        margin-left: 70px; /* Adjust this value for desired gap */
    }
    .language-selector {
        margin-right: 15px; /* Adjust spacing between text and logo */
        cursor: pointer;
        color: black; /* Set the text color to black */
    }
    .language-selector a {
        margin-right: 10px; /* Spacing between Sinhala and English */
    }
    .language-selector a:hover {
        text-decoration: underline; /* Optional: Add underline on hover */
    }

    /* Sticky Navbar */
    .navbar {
        position: fixed;
        top: 0;
        width: 100%;
        z-index: 1000; /* Ensure it stays on top of other content */
        background-color: white; /* Ensure the navbar has a background color when scrolling */
        box-shadow: 0 4px 2px -2px gray; /* Optional: Add shadow for better visibility */
    }

    /* Add padding to the body content to avoid content being hidden behind the fixed navbar */
    body {
        padding-top: 70px; /* Adjust the padding according to the height of your navbar */
    }
</style>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <!-- Use the custom-margin class for RPC logo -->
        <a class="navbar-brand custom-margin" href="{{ route('home') }}">RPC</a>

        <!-- Button for toggling the navbar in smaller screens -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar links and content -->
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

            <!-- Language selection links on the right side -->
            <div class="language-selector">
                <a id="english" onclick="switchLanguage('English')" href="{{ url('language/en') }}">English</a>
                <a id="sinhala" onclick="switchLanguage('Sinhala')" href="{{ url('language/si') }}">සිංහල</a>
            </div>

            <!-- Logo on the right side of the navbar -->
            <a href="{{ route('home') }}">
                <img src="{{ asset('/Images/Home/Logo.webp') }}" alt="Logo" class="logo-margin">
            </a>
        </div>
    </div>
</nav>

<script>
    // JavaScript function to handle language switch
    function switchLanguage(language) {
        if (language === 'Sinhala') {
            // Code to switch the website content to Sinhala
            console.log('Switched to Sinhala');
        } else if (language === 'English') {
            // Code to switch the website content to English
            console.log('Switched to English');
        }
    }
</script>
