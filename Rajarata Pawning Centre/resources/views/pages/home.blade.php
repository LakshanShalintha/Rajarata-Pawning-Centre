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
            height: 300px; /* Adjusted height for better appearance */
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

        /* Style for the 9-grid section */
        .grid-section {
            margin-top: 30px;
        }

        .grid-item {
            width: 200px;
            height: 200px;
            background-color: red;
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
    </style>
</head>
<body>

    <!-- Include the Navbar -->
    @include('common_pages.navbar')

    <!-- Main Content -->
    <div class="container mt-5 ">
        <h1 class="text-left mb-8" style="font-size: 64px">Home</h1>


        <!-- Add the Shapes with Images -->
        <div class="row">
            <div class="col-md-12 container">
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

        <!-- New Grid Section (3 Columns, 9 Grid Items) -->
        <div class="row grid-section justify-content-center ">
            <div class="col-md-4 grid-item"></div>
            <div class="col-md-4 grid-item"></div>
            <div class="col-md-4 grid-item"></div>
            <div class="col-md-4 grid-item"></div>
            <div class="col-md-4 grid-item"></div>
            <div class="col-md-4 grid-item"></div>
            <div class="col-md-4 grid-item"></div>
            <div class="col-md-4 grid-item"></div>
            <div class="col-md-4 grid-item"></div>
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
