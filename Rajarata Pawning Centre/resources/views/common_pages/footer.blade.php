<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Responsive Footer</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="m-0 p-0 font-sans">

    <footer class="bg-gray-800 text-white py-8">
        <div class="container mx-auto px-4 flex flex-col md:flex-row justify-between items-start md:items-center">
            <!-- Left Section: Contact Information -->
            <div class="w-full md:w-1/3 text-left mb-4 md:mb-0">
                <h3 class="text-xl font-bold">{{ __('messages.Foot-title') }}</h3>
                <p class="my-2 mt-4">
                    {{ __('messages.Foot-mail') }}: <a href="mailto:rcp@gmail.com" class="text-blue-300">rcp@gmail.com</a>
                </p>
                <p class="mt-3">{{ __('messages.Foot-address_1') }},<br>
                    {{ __('messages.Foot-address_2') }}
                </p>
            </div>

            <!-- Center Section: Navigation Links -->
            <div class="w-full md:w-1/3 text-left md:text-right mb-4 md:mb-0">
                <h3 class="text-xl font-bold mb-2">{{ __('messages.Foot-pages') }}</h3>
                <ul class="list-none p-0">
                    <li class="my-1"><a href="/" class="text-white">{{ __('messages.Foot-page_1') }}</a></li>
                    <li class="my-1"><a href="/about" class="text-white">{{ __('messages.Foot-page_2') }}</a></li>
                    <li class="my-1"><a href="/services" class="text-white">{{ __('messages.Foot-page_3') }}</a></li>
                    <li class="my-1"><a href="/contact" class="text-white">{{ __('messages.Foot-page_4') }}</a></li>
                </ul>
            </div>
        </div>

        <!-- Horizontal Line -->
        <div class="container mx-auto px-4">
            <hr class="border-t border-white w-full my-4">
        </div>

        <!-- Author and Social Icons -->
        <div class="container mx-auto px-4 flex flex-col md:flex-row justify-between items-center">
            <!-- Author Information -->
            <p class="text-gray-400 text-sm mb-2 md:mb-0">{{ __('messages.Foot-Author') }}</p>

            <!-- Social Media Icons -->
            <div class="flex justify-center md:justify-end space-x-4">
                <a href="#" class="text-white text-2xl"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="text-white text-2xl"><i class="fab fa-whatsapp"></i></a>
                <a href="#" class="text-white text-2xl"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </footer>

    <!-- Font Awesome CDN -->
    <script src="https://kit.fontawesome.com/your-kit-id.js" crossorigin="anonymous"></script>

</body>

</html>
