<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .custom-card {
            background-color: #eae9e9; /* Change to your desired shade of red */
            color: black; /* Change text color for contrast */
            opacity: 0; /* Initially hidden */
            transform: translateY(20px); /* Start from below */
            transition: opacity 0.5s ease-out, transform 0.5s ease-out; /* Animation effect */
            cursor: pointer; /* Change cursor to pointer */
        }

        .fade-in {
            opacity: 1; /* Fully visible */
            transform: translateY(0); /* Move to original position */
        }

        .zoom {
            transform: scale(1.2); /* Zoom effect */
            z-index: 1000; /* Bring to front */
        }

        .hidden {
            display: none; /* Hide element */
        }
    </style>
</head>
<body>

@include('common_pages.navbar')

<div class="container mt-5">
    <h1 class="text-left" style="font-size: 64px">{{ __('messages.Serv-title') }}</h1>
    <p class="text-left mt-4 mb-10">{{ __('messages.Serv-description') }}</p>

    <div class="row" id="service-cards">
        @foreach ([
            'Serv-max_loan' => 'Rs. 150,000',
            'Serv-interest_rate' => __('messages.Serv-interest_rate_desc'),
            'Serv-min_pawning' => __('messages.Serv-min_pawning_desc'),
            'Serv-grace_period' => __('messages.Serv-grace_period_desc'),
            'Serv-working_hours' => __('messages.Serv-working_hours_desc'),
            'Serv-redemption' => __('messages.Serv-redemption_desc'),
            'Serv-payment_plans' => __('messages.Serv-payment_plans_desc'),
            'Serv-customer_benefits' => __('messages.Serv-customer_benefits_desc'),
        ] as $titleKey => $text)
            <div class="col-md-4 mb-4">
                <div class="card custom-card" data-title="{{ __('messages.' . $titleKey) }}" data-text="{{ $text }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ __('messages.' . $titleKey) }}</h5>
                        <p class="card-text">{{ $text }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="text-center mt-4 mb-20" id="contact-info">
        <p>{{ __('messages.Serv-contact_info') }}</p>
        <ul class="list-unstyled d-flex justify-content-center">
            <li class="mx-1"><strong>076-1515169 /</strong></li>
            <li class="mx-1"><strong>075-0945520 /</strong></li>
            <li class="mx-1"><strong>0788-722740</strong></li>
        </ul>
    </div>

</div>


<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const cards = document.querySelectorAll('.custom-card');
        const observerOptions = {
            root: null, // Use the viewport as the root
            rootMargin: '0px',
            threshold: 0.1 // Trigger when 10% of the card is visible
        };

        const observerCallback = (entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('fade-in');
                    observer.unobserve(entry.target); // Stop observing after fade-in
                }
            });
        };

        const observer = new IntersectionObserver(observerCallback, observerOptions);

        // Observe each card
        cards.forEach(card => {
            observer.observe(card);
            card.addEventListener('click', function() {
                // Zoom this card and hide others
                if (!card.classList.contains('zoom')) {
                    // Add zoom class to the clicked card
                    card.classList.add('zoom');

                    // Hide other cards
                    cards.forEach(otherCard => {
                        if (otherCard !== card) {
                            otherCard.classList.add('hidden');
                        }
                    });

                    // Optionally show a detailed view or toggle back on click
                    // You can add a detailed view modal here if needed

                    // Add click listener to zoomed card to reset
                    card.addEventListener('click', function resetZoom() {
                        card.classList.remove('zoom');
                        cards.forEach(otherCard => {
                            otherCard.classList.remove('hidden');
                        });
                        card.removeEventListener('click', resetZoom); // Remove this listener
                    });
                }
            });
        });
    });
</script>
@include('common_pages.footer')
</body>
</html>
