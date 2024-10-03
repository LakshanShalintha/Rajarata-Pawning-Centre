<style>
    /* Custom CSS for Navbar */
    .custom-margin {
        margin-left: 120px; /* Set left margin to 150px for RPC */
    }
    .logo-margin {
        margin-right: 120px; /* Set right margin to 150px for logo */
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
            <!-- Add language selection text and logo on the right side -->
            <div class="language-selector">
                <a id="sinhala" onclick="switchLanguage('Sinhala')">Sinhala</a> <!-- Onclick event for Sinhala -->
                <a id="english" onclick="switchLanguage('English')">English</a> <!-- Onclick event for English -->
            </div>
            <a href="{{ route('home') }}">
                <img src="{{ asset('/Images/Home/Logo.webp') }}" alt="Logo" class="logo-margin"> <!-- Adjust the logo path -->
            </a>
        </div>
    </div>
</nav>

<script>
    // JavaScript function to handle language switch
    function switchLanguage(language) {
        if (language === 'Sinhala') {
            // Add your code to switch the website content to Sinhala
            console.log('Switched to Sinhala');
        } else if (language === 'English') {
            // Add your code to switch the website content to English
            console.log('Switched to English');
        }
    }
</script>
