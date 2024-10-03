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
            background-color: #121212;
            color: #ffffff;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        .contact-container {
            padding: 40px;
            max-width: 1200px;
            margin: auto;
        }

        .form-control {
            background-color: #1f1f1f;
            color: #ffffff;
            border: 1px solid #333;
        }

        .form-control:focus {
            border-color: #555;
            box-shadow: none;
        }

        .form-control::placeholder {
            color: #bbb;
        }

        .map {
            width: 100%;
            height: 300px;
            border: 0;
        }

        .line-input {
            display: block;
            width: 100%;
            border: none;
            border-bottom: 2px solid #555;
            background-color: transparent;
            color: #ffffff;
            margin-bottom: 15px;
        }

        .line-input:focus {
            outline: none;
            border-bottom-color: #888;
        }

        .line-input::placeholder {
            color: #bbb;
        }

        .contact-header {
            text-align: center;
            margin-bottom: 40px;
        }

        .contact-form {
            padding: 20px;
            background-color: #1a1a1a;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.5);
        }

        .address-section {
            padding: 20px;
            background-color: #1a1a1a;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.5);
            margin-bottom: 20px;
        }

        .address-title {
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
<!-- Include the Navbar -->
@include('common_pages.navbar')

<!-- Main Content -->
<div class="container contact-container">
    <h1 class="text-left mb-1" style="font-size: 64px">{{ __('messages.Contact-title') }}</h1>

    <div class="row">
        <!-- Left Column - Contact Form -->
        <div class="col-md-6 contact-form mt-4">
            <form>
                <div class="row">
                    <!-- First Name -->
                    <div class="col-md-6 mb-4 mt-10">
                        <input type="text" class="line-input" id="firstName" name="firstName" placeholder="{{ __('messages.first_name') }}" required>
                    </div>

                    <!-- Last Name -->
                    <div class="col-md-6">
                        <input type="text" class="line-input mt-10" id="lastName" name="lastName" placeholder="{{ __('messages.last_name') }}" required>
                    </div>
                </div>

                <!-- Email -->
                <input type="email" class="line-input mb-10" id="email" name="email" placeholder="{{ __('messages.email') }}" required>

                <!-- Contact Number -->
                <input type="number" class="line-input mb-20" id="contactNumber" name="contactNumber" placeholder="{{ __('messages.contact_number') }}" required
                       inputmode="numeric" min="0" oninput="if(this.value.length > 10) this.value = this.value.slice(0, 10);">

                <!-- Message -->
                <textarea class="line-input" id="message" name="message" rows="1" placeholder="{{ __('messages.message') }}" required></textarea>

                <!-- Submit Button -->
                <button type="submit" class="btn btn-primary mt-3">{{ __('messages.Contact-submit') }}</button>
            </form>
        </div>


        <!-- Right Column - Address and Map -->
        <div class="col-md-6 mt-4">
            <div class="address-section">
                <p>{{ __('messages.Contact-address') }}</p>
                <p>{{ __('messages.Contact-address_1') }}</p>
                <p>{{ __('messages.Contact-address_2') }}</p>
                <p>{{ __('messages.Contact-address_3') }}</p>
                <ul class="list-unstyled d-flex text-left -ml-1 mt-2">
                    <li class="mx-1"><strong>076-1515169 /</strong></li>
                    <li class="mx-1"><strong>075-0945520 /</strong></li>
                    <li class="mx-1"><strong>0788-722740</strong></li>
                </ul>
            </div>

            <!-- Map Section -->
            <h3 class="address-title text-center">{{ __('messages.Contact-location') }}</h3>
            <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3840.30480677039!2d81.0150165750044!3d7.730503292287814!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zN8KwNDMnNDkuOCJOIDgxwrAwMScwMy4zIkU!5e1!3m2!1sen!2slk!4v1727793940204!5m2!1sen!2slk" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>

<!-- Include Bootstrap JS -->
<script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- Include the Footer -->
@include('common_pages.footer')

</body>
</html>
