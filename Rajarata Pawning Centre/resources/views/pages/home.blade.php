<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>

    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">

    <style>
        body {
            background-color: black;
            color: white;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        /* Common style for all shapes */
        .shape {
            height: 550px; /* Adjusted height for better appearance */
            border-radius: 20px; /* Rounded corners */
            display: none; /* Hide all shapes by default */
            transition: opacity 0.5s ease; /* Smooth transition */
            padding: 1px; /* Space for the gradient border */
            background-clip: padding-box; /* Ensure the background color remains inside */
            position: relative;
            background-color: gray; /* Set all grid backgrounds to gray */
        }

        /* Apply the gradient border with 1px width */
        .shape::before {
            content: "";
            position: absolute;
            top: -1px;
            left: -1px;
            right: -1px;
            bottom: -1px;
            background: linear-gradient(45deg, #ff6b6b, #f3ff0a, #2ecc71, #3498db);
            border-radius: 21px; /* Slightly more than the shape's border-radius for perfect overlap */
            z-index: -1;
        }

        /* Images will be full width and height, with object-fit: cover */
        .shape img {
            width: 100%;
            height: 100%;
            object-fit: fill; /* Ensure images fill the grid completely */
            border-radius: 20px; /* Apply rounded corners */
        }

        /* Style for the dots */
        .dots-container {
            margin-top: 20px;
        }
        .dot {
            height: 10px;
            width: 10px;
            background-color: rgb(50, 50, 50);
            border-radius: 50%;
            display: inline-block;
            margin: 0 5px;
        }
        .active {
            background-color: white;
            width: 50px;
            height: 7px;
            border-radius: 20px;
        }

        /* Style for the 4-grid section */
        .grid-section {
            margin-top: 20px;
            margin-bottom: 80px;
        }

        .grid-item {
            width: 300px;
            height: 300px;
            background-color: gray;
            margin: 10px auto;
            border-radius: 20px; /* Rounded corners for the grid shapes */
            position: relative;
        }

        /* Styling for gradient border on the grid shapes */
        .grid-item::before {
            content: "";
            position: absolute;
            top: -1px;
            left: -1px;
            right: -1px;
            bottom: -1px;
            background: linear-gradient(45deg, #ff6b6b, #f3ff0a, #2ecc71, #3498db);
            border-radius: 21px;
            z-index: -1;
        }

         ul.custom-bullets {
             list-style: none; /* Remove default bullets */
             margin-left: 20px; /* Space between text and edge */
         }

        ul.custom-bullets li {
            position: relative; /* Allows positioning the custom bullet */
            padding-left: 20px; /* Indent the list items */
        }

        ul.custom-bullets li::before {
            content: "\2022"; /* Unicode for the bullet character */
            position: absolute;
            left: 0;
            color: white; /* Set bullet color to white */
            font-size: 1.2em; /* Adjust the bullet size */
        }
    </style>
</head>
<body>

    <!-- Include the Navbar -->
    @include('common_pages.navbar')

    <!-- Main Content -->
    <div class="container mt-32 ">
        <!-- Add the Shapes with Images -->
        <div class="row col-lg-16 m-auto">
            <div class="col col-md-14  container">
                <div class="shape shape1">
                    <img src="{{ asset('/Images/Home/Logo.webp') }}" alt="Image 1">
                </div>
                <div class="shape shape2">
                    <img src="{{ asset('images/image2.jpg') }}" alt="Image 2">
                </div>
                <div class="shape shape3">
                    <img src="{{ asset('/Images/Home/Logo.webp') }}" alt="Image 3">
                </div>
                <div class="shape shape4">
                    <img src="{{ asset('images/image4.jpg') }}" alt="Image 4">
                </div>
                <div class="shape shape5">
                    <img src="{{ asset('/Images/Home/Logo.webp') }}" alt="Image 5">
                </div>
            </div>
        </div>

        <!-- Add the Dots for Shape Navigation -->
        <div class="dots-container">
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>

        <!-- 2-column section with image and text -->
        <div class="container col-lg-12 col-md-6 mt-20 d-flex justify-content-center align-items-center" style="min-height: 100vh;">
            <div class="row w-200">
                <p class="text-center w-100" style="font-size: 40px"> {{ __('messages.Home-our-title') }}</p>

                <!-- Left Column: Image -->
                <div class="col-md-6 col-lg-6 mt-10 d-flex justify-content-center">
                    <img src="{{ asset('/Images/Home/Logo.webp') }}" alt="Sample Image" class="img-fluid" style="width: 900px; height: 400px; border-radius: 20px;">
                </div>

                <!-- Right Column: Title and Description -->
                <div class="col-md-6 d-flex flex-column justify-content-center">
                    <h2 class="text-left" style="font-size: 32px">{{ __('messages.Home-our-title') }}</h2>
                    <p class="small mt-10 text-left">{{ __('messages.Home-our-desc') }} </p>
                </div>
            </div>
        </div>



        <p class=" mt-20" style="font-size: 40px">{{ __('messages.Home-Success') }}</p>
        <!-- New Grid Section (3 Columns, 4 Grid Items) -->
        <div class="container mt-10">
            <div class="row grid-section justify-content-center">
                <!-- Grid Item 1 -->
                <div class="col-md-4 grid-item d-flex flex-column align-items-center text-center">
                    <img src="{{ asset('/Images/Home/Logo.webp') }}" alt="Grid Image 1" class="img-fluid" style="border-radius: 17px; width: 100px;">
                    <h5 class="mt-3">{{ __('messages.Home-Success_title_1') }}</h5>
                    <p class="small mt-3">{{ __('messages.Home-Success_title_1-desc') }}</p>
                </div>

                <!-- Grid Item 2 -->
                <div class="col-md-4 grid-item d-flex flex-column align-items-center text-center">
                    <img src="{{ asset('/Images/Home/Logo.webp') }}" alt="Grid Image 2" class="img-fluid" style="border-radius: 17px; width: 100px;">
                    <h5 class="mt-3">{{ __('messages.Home-Success_title_2') }}</h5>
                    <p class="small mt-3">{{ __('messages.Home-Success_title_2-desc') }}</p>
                </div>

                <!-- Grid Item 3 -->
                <div class="col-md-4 grid-item d-flex flex-column align-items-center text-center">
                    <img src="{{ asset('/Images/Home/Logo.webp') }}" alt="Grid Image 3" class="img-fluid" style="border-radius: 17px; width: 100px;">
                    <h5 class="mt-3">{{ __('messages.Home-Success_title_3') }}</h5>
                    <p class="small mt-3">{{ __('messages.Home-Success_title_3-desc') }}</p>
                </div>

                <!-- Grid Item 4 -->
                <div class="col-md-4 grid-item d-flex flex-column align-items-center text-center">
                    <img src="{{ asset('/Images/Home/Logo.webp') }}" alt="Grid Image 4" class="img-fluid" style="border-radius: 17px; width: 100px;">
                    <h5 class="mt-3">{{ __('messages.Home-Success_title_4') }}</h5>
                    <p class="small mt-3">{{ __('messages.Home-Success_title_4-desc') }}</p>
                </div>
            </div>
        </div>


        <!-- Existing Content -->
        <div class="container mt-20 mb-40">
            <div class="row justify-content-center"> <!-- Center the row content -->
                <!-- Right Side White Grid with Border and Radius (Now on the Left) -->
                <div class="col-md-6 d-flex justify-content-center">
                    <div style="
                width: 400px;
                height: 400px;
                background-color: white;  /* Set background color to white */
                border-radius: 24px;
                border: 1px solid;
                padding: 20px;
                color: black;  /* Set text color to black */
                position: relative;
            ">
                        <!-- Flex container for icon and text -->
                        <div style="display: flex; align-items: flex-start;">
                            <!-- Call Icon on Left (with black color) -->
                            <i class="fas fa-phone ml-10 mt-2" style="font-size: 48px; margin-right: 20px; color: black;"></i>

                            <!-- Text on Top Right -->
                            <div style="text-align: left; flex-grow: 1;">
                                <h3 class="ml-15" style="font-size: 40px">{{ __('messages.Home-contact-title') }}</h3>
                                <p class="ml-15 mt-2">{{ __('messages.Home-contact-subtitle') }}</p>
                            </div>
                        </div>

                        <!-- Phone Numbers in Center -->
                        <div style="margin-top: 50px; font-size: 40px; text-align: center;"> <!-- Center text -->
                            <h4>076-1515169</h4>
                            <h4>075-0945520</h4>
                        </div>

                        <!-- Horizontal Line -->
                        <hr style="border: 0; height: 2px; background-color: red; margin: 30px 0;">

                        <!-- Email Section at Bottom -->
                        <div style="position: absolute; bottom: 40px; width: 100%; text-align: center; font-size: 20px">
                            <a href="mailto:rcp@gmail.com" style="color: black; text-decoration: underline;">
                                rcp@gmail.com
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Left Title and Bullets (Now on the Right) -->
                <div class="col-md-6 d-flex flex-column align-items-start"> <!-- Align items to start -->
                    <h2 class="text-left ml-5 mb-10">{{ __('messages.Home-contact-li-title') }}</h2>
                    <ul class="custom-bullets text-left ml-20">
                        <li>{{ __('messages.Home-contact-li1') }}</li>
                        <li>{{ __('messages.Home-contact-li2') }}</li>
                        <li>{{ __('messages.Home-contact-li3') }}</li>
                        <li>{{ __('messages.Home-contact-li4') }}</li>
                        <li>{{ __('messages.Home-contact-li5') }}</li>
                        <li>{{ __('messages.Home-contact-li6') }}</li>
                        <li>{{ __('messages.Home-contact-li7') }}</li>
                        <li>{{ __('messages.Home-contact-li8') }}</li>
                        <li>{{ __('messages.Home-contact-li9') }}</li>
                        <li>{{ __('messages.Home-contact-li10') }}</li>
                    </ul>
                </div>
            </div>

            <!-- Font Awesome link for icons -->
            <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
        </div>




    </div>

    <!-- Include Bootstrap JS -->
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <script>
        const shapes = document.querySelectorAll('.shape');
        const dots = document.querySelectorAll('.dot');
        let currentShape = 0;

        function showNextShape() {
            // Hide all shapes
            shapes.forEach(shape => shape.style.display = 'none');
            // Show the current shape
            shapes[currentShape].style.display = 'block';
            shapes[currentShape].style.opacity = '1'; // Ensure opacity is reset

            // Reset all dots to gray
            dots.forEach(dot => dot.classList.remove('active'));
            // Set the current dot to white (active)
            dots[currentShape].classList.add('active');

            // Move to the next shape
            currentShape = (currentShape + 1) % shapes.length;
        }

        // Show the first shape and activate the first dot immediately
        showNextShape();

        // Set interval to show the next shape every 3 seconds
        setInterval(showNextShape, 3000);
    </script>
         <!-- Include the Footer -->
    @include('common_pages.footer')
</body>
</body>
</html>
