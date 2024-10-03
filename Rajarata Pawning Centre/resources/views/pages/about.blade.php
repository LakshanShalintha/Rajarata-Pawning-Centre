<!-- resources/views/about.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <title>About Us</title>
</head>
<body>
    @include('common_pages.navbar')
    <h1 class="mt-32" style="font-size: 52px; margin-left: 130px;">{{ __('messages.About-title') }}</h1>

    <p class="mt-4" style="font-size: 20px; margin-left: 130px;">{{ __('messages.About-description') }}</p>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>
