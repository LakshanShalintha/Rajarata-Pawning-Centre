<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <title>About Us</title>
</head>
<body>
    @include('common_pages.navbar')

    <div class="container mt-5">
        <h1 class="display-4 text-center">{{ __('messages.About-title') }}</h1>
        
        <div class="mt-4 text-center">
            <p class="lead">{{ __('messages.About-description') }}</p>
        </div>

        <!-- History Section -->
        <div class="mt-5">
            <h2>Our History</h2>
            <p>Founded in [Year], [Pawning Center Name] has been committed to providing reliable and accessible pawn services to our community. With years of experience, we have built a reputation for trust and excellence.</p>
        </div>

        <!-- Mission and Values Section -->
        <div class="mt-4">
            <h2>Our Mission & Values</h2>
            <p>Our mission is to offer fair and transparent pawn services while upholding our values of integrity, respect, and community support. We believe in empowering our clients by providing flexible solutions tailored to their needs.</p>
        </div>

        <!-- Customer Commitment Section -->
        <div class="mt-4">
            <h2>Our Commitment to You</h2>
            <p>At [Pawning Center Name], we strive to make your experience with us smooth and hassle-free. Our dedicated team is always ready to assist with any questions or guidance you may need throughout the process.</p>
        </div>

        <!-- Contact Information -->
        <div class="text-center mt-5">
            <p>For more information, feel free to reach us at:</p>
            <p>Phone: 076-1515169 | 075-0945520 | 0788-722740</p>
            <p>Email: info@[yourdomain].com</p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
