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

    <div class="container mt-32">
        <h1 class="text-left" style="font-size: 64px">{{ __('messages.About-title') }}</h1>
        
        <div class=" text-left">
            <p class="lead">{{ __('messages.About-description') }}</p>
        </div>

        <!-- History Section -->
        <div class="card mt-4" id="history">
            <div class="card-body">
                <h2 class="card-title">{{ __('messages.About-history') }}</h2>
                <p class="card-text">{{ __('messages.About-history_desc') }}</p>
            </div>
        </div>

        <!-- Mission and Values Section -->
        <div class="card mt-4" id="mission">
            <div class="card-body">
                <h2 class="card-title">{{ __('messages.About-Mission-&-Values') }}</h2>
                <p class="card-text">{{ __('messages.About-Mission-&-Values_desc') }}</p><br>
                <ul>
                    <li>{{ __('messages.About-Mission-&-Values_descl1') }}</li>
                    <li>{{ __('messages.About-Mission-&-Values_descl2') }}</li>
                    <li>{{ __('messages.About-Mission-&-Values_descl3') }}</li>
                </ul>
            </div>
        </div>

        <!-- Customer Commitment Section -->
        <div class="card mt-4" id="commitment">
            <div class="card-body">
                <h2 class="card-title">{{ __('messages.About-Commitment') }}</h2>
                <p class="card-text">{{ __('messages.About-Commitment_desc') }}</p>
            </div>
        </div>

        <!-- Community Engagement Section -->
        <div class="card mt-4 mb-16" id="community">
            <div class="card-body">
                <h2 class="card-title">{{ __('messages.About-Engagement') }}</h2>
                <p class="card-text">{{ __('messages.About-Engagement_desc') }}</p>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    @include('common_pages.footer')
</body>
</html>
