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
                <p class="card-text">{{ __('messages.About-Mission-&-Values_desc') }}</p>
                <ul>
                    <li>Integrity: Acting with honesty in all our interactions.</li>
                    <li>Respect: Valuing each client and treating them with dignity.</li>
                    <li>Community Support: Engaging with and supporting our local community through various initiatives.</li>
                </ul>
            </div>
        </div>

        <!-- Customer Commitment Section -->
        <div class="card mt-4" id="commitment">
            <div class="card-body">
                <h2 class="card-title">{{ __('messages.About-Commitment') }}</h2>
                <p class="card-text">At [Pawning Center Name], we strive to make your experience with us smooth and hassle-free. Our dedicated team is always ready to assist with any questions or guidance you may need throughout the process.</p>
                <p class="card-text">We understand that every customer has unique needs, and we tailor our services accordingly. Whether you need a quick loan or advice on your options, our knowledgeable staff is here to help you make informed decisions.</p>
                <p class="card-text">Our commitment extends beyond just providing services; we aim to create a supportive environment where you feel valued and understood. We take pride in our role as a community resource, offering financial education and support to empower our clients.</p>
            </div>
        </div>

        <!-- Community Engagement Section -->
        <div class="card mt-4 mb-16" id="community">
            <div class="card-body">
                <h2 class="card-title">{{ __('messages.About-Engagement') }}</h2>
                <p class="card-text">As a part of [Community Name], we believe in giving back. We actively participate in local events, sponsor initiatives, and collaborate with other organizations to enhance the welfare of our community.</p>
                <p class="card-text">We host workshops and informational sessions aimed at educating our community about financial literacy, responsible borrowing, and the services we provide. Our goal is to empower individuals with the knowledge they need to make informed financial decisions.</p>
                <p class="card-text">Through our outreach programs, we also support local charities and causes that matter to our clients, reinforcing our commitment to being more than just a business but a community partner.</p>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    @include('common_pages.footer')
</body>
</html>
