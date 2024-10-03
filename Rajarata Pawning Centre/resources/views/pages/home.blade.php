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
    </style>
</head>
<body>

    <!-- Include the Navbar -->
    @include('common_pages.navbar')

    <!-- Main Content -->
    <div class="container mt-xxl-5 ">
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

        <!-- 2-column section with image and text -->
        <div class="row mt-40">
            <p class="" style="font-size: 40px"> Title</p>
            <!-- Left Column: Image -->
            <div class="col-md-6 mt-20">
                <img src="{{ asset('/Images/Home/Logo.webp') }}" alt="Sample Image" class="img-fluid" style="border-radius: 20px;">
            </div>

            <!-- Right Column: Title and Description -->
            <div class="col-md-6 mt-20 d-flex flex-column">
                <h2 class="" style="font-size: 32px">Title of the Section</h2>
                <p class="small mt-10 text-left">For a backend to complement your Next.js with TypeScript site, here are some suitable options:

                    Next.js API Routes (built-in): Since Next.js provides API routes, you can handle server-side logic right within your Next.js app. This can be useful for simpler applications or when you want to keep the backend tightly integrated with your frontend.

                    Advantages: Easy setup, no need for a separate backend service, works well for serverless environments.
                    Use cases: Small to medium-sized applications, serverless functions, or when you need simple API endpoints.
                    Node.js with Express: This is a popular combination for building a scalable backend. You can use Express to handle routes, middleware, and databases.

                    Advantages: Flexibility, large ecosystem, and the ability to scale.
                    Use cases: RESTful APIs, microservices, and when you need more control over the backend.
                    NestJS: A TypeScript-first framework that’s built on top of Node.js and Express. It’s great for building scalable and maintainable applications.

                    Advantages: TypeScript support, built-in modules for database, WebSocket, GraphQL, and microservices.
                    Use cases: Large applications, microservices, and when you want strong TypeScript support.
                    GraphQL with Apollo Server: If your site deals with complex data fetching needs, Apollo Server with GraphQL might be a good fit. You can query exactly the data you need from the backend.

                    Advantages: Efficient data querying, real-time updates with subscriptions, works well with modern frontends.
                    Use cases: Applications requiring fine-grained data fetching or those needing real-time data.
                    Firebase or Supabase: If you prefer a serverless approach or don’t want to manage your own backend infrastructure, Firebase or Supabase could be suitable options. Both provide authentication, databases, file storage, and more.

                    Advantages: Managed services, scalability, fast development.
                    Use cases: MVPs, apps with real-time features, or if you prefer not to manage your backend.
                    What specific features do you need for your backend (e.g., database, authentication, etc.)? That can help narrow down the best choice.
                </p>
            </div>
        </div>


        <p class=" mt-40" style="font-size: 40px">Our Success</p>
        <!-- New Grid Section (3 Columns, 4 Grid Items) -->
        <div class="row grid-section justify-content-center mt-20">
            <!-- Grid Item 1 -->
            <div class="col-md-4 grid-item d-flex flex-column align-items-center">
                <img src="{{ asset('/Images/Home/Logo.webp') }}" alt="Grid Image 1" class="img-fluid" style="border-radius: 17px; width: 100px;">
                <h5 class="mt-3">Title 1</h5>
                <p class="small mt-3">This is a small description for the first grid item.</p>
            </div>

            <!-- Grid Item 2 -->
            <div class="col-md-4 grid-item d-flex flex-column align-items-center">
                <img src="{{ asset('/Images/Home/Logo.webp') }}" alt="Grid Image 2" class="img-fluid" style="border-radius: 17px; width: 100px;">
                <h5 class="mt-3">Title 2</h5>
                <p class="small mt-3">This is a small description for the second grid item.</p>
            </div>

            <!-- Grid Item 3 -->
            <div class="col-md-4 grid-item d-flex flex-column align-items-center">
                <img src="{{ asset('/Images/Home/Logo.webp') }}" alt="Grid Image 3" class="img-fluid" style="border-radius: 17px; width: 100px;">
                <h5 class="mt-3">Title 3</h5>
                <p class="small mt-3">This is a small description for the third grid item.</p>
            </div>

            <!-- Grid Item 4 -->
            <div class="col-md-4 grid-item d-flex flex-column align-items-center">
                <img src="{{ asset('/Images/Home/Logo.webp') }}" alt="Grid Image 4" class="img-fluid" style="border-radius: 17px; width: 100px;">
                <h5 class="mt-3">Title 4</h5>
                <p class="small mt-3">This is a small description for the fourth grid item.</p>
            </div>
        </div>

        <!-- Existing Content -->

        <div class="container mt-5 mb-40">
            <div class="row justify-content-between">
                <!-- Left Side Title and Description -->
                <div class="col-md-6 d-flex flex-column">
                    <h2 class="text-center">Left Title</h2>
                    <ul class="list-unstyled d-flex text-left">
                        <li class="mx-1"><strong>For a backend to complement your Next.js with TypeScript site,/</strong></li>
                        <li class="mx-1"><strong>For a backend to complement your Next.js with TypeScript site, /</strong></li>
                        <li class="mx-1"><strong>For a backend to complement your Next.js with TypeScript site,</strong></li>
                    </ul>
                </div>

                <!-- Right Side Red Grid with Border and Radius -->
                <div class="col-md-6 d-flex justify-content-center">
                    <div style="
                        width: 400px;
                        height: 400px;
                        background-color: red;
                        border-radius: 24px;
                        border: 1px solid;
                    ">
                    </div>
                </div>
            </div>
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
