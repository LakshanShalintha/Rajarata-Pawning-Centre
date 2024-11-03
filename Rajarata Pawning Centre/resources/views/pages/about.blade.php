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
                <h2 class="card-title">Our History</h2>
                <p class="card-text">Founded in [Year], [Pawning Center Name] has been committed to providing reliable and accessible pawn services to our community. Over the years, we have built a solid reputation for trust and excellence, serving countless individuals and families during their times of need.</p>
                <p class="card-text">From humble beginnings, our journey has seen us evolve into a trusted partner for many. We pride ourselves on our understanding of the community's needs and the personal relationships we foster with our clients.</p>
                <p class="card-text">As we continue to grow, our commitment to our roots remains steadfast, ensuring that our services evolve alongside the changing needs of the community.</p>
            </div>
        </div>

        <!-- Mission and Values Section -->
        <div class="card mt-4" id="mission">
            <div class="card-body">
                <h2 class="card-title">Our Mission & Values</h2>
                <p class="card-text">Our mission is to offer fair and transparent pawn services while upholding our values of integrity, respect, and community support. We believe in empowering our clients by providing flexible solutions tailored to their needs.</p>
                <p class="card-text">We are dedicated to maintaining an ethical approach in all our dealings, ensuring that every transaction reflects our commitment to honesty and fairness. Our goal is to be a beacon of support for individuals seeking assistance, providing not just a service but a partnership built on trust.</p>
                <p class="card-text">Our core values guide our operations and decisions. We prioritize:</p>
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
                <h2 class="card-title">Our Commitment to You</h2>
                <p class="card-text">At [Pawning Center Name], we strive to make your experience with us smooth and hassle-free. Our dedicated team is always ready to assist with any questions or guidance you may need throughout the process.</p>
                <p class="card-text">We understand that every customer has unique needs, and we tailor our services accordingly. Whether you need a quick loan or advice on your options, our knowledgeable staff is here to help you make informed decisions.</p>
                <p class="card-text">Our commitment extends beyond just providing services; we aim to create a supportive environment where you feel valued and understood. We take pride in our role as a community resource, offering financial education and support to empower our clients.</p>
            </div>
        </div>

        <!-- Community Engagement Section -->
        <div class="card mt-4 mb-16" id="community">
            <div class="card-body">
                <h2 class="card-title">Community Engagement</h2>
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
