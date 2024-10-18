<html>

<head>
    <title>Weebly Clone</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet" />
</head>

<body class="font-roboto bg-gray-50 flex flex-col min-h-screen">
    <header class="flex flex-wrap justify-between items-center p-6 bg-white shadow-md">
        <div class="flex space-x-6">
            <a class="text-gray-700 hover:text-blue-600" href="#">Websites</a>
            <a class="text-gray-700 hover:text-blue-600" href="#">Online Stores</a>
            <a class="text-gray-700 hover:text-blue-600" href="#">Pricing</a>
            <div class="relative group">
                <button class="text-gray-700 hover:text-blue-600 flex items-center">
                    More
                    <i class="fas fa-chevron-down ml-1"></i>
                </button>
                <!-- Dropdown menu -->
                <div class="absolute hidden group-hover:block mt-2 bg-white border rounded shadow-lg w-48">
                    <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Features</a>
                    <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Help Center</a>
                </div>
            </div>
        </div>
        <div class="flex items-center space-x-6 mt-4 md:mt-0">
            <img alt="Weebly logo" class="h-10" src="https://placehold.co/100x40" />
            <a class="text-gray-700 hover:text-blue-600" href="{{ '/login' }}">Log In</a>
            <a class="text-blue-600 border border-blue-600 px-4 py-2 rounded hover:bg-blue-600 hover:text-white"
                href="{{ '/register' }}">Sign Up</a>
        </div>
    </header>

    <!-- Flex-grow to make sure main content takes available space -->
    <main class="flex flex-col lg:flex-row justify-between items-center p-8 bg-white flex-grow">
        <div class="max-w-lg space-y-6 text-center lg:text-left">
            <h1 class="text-5xl font-bold text-gray-900 leading-tight">
                Build Your Professional Online Store with Ease
            </h1>
            <p class="text-lg text-gray-600">
                Gain full control to launch and grow your business with tools built for entrepreneurs.
            </p>
            <button class="mt-6 bg-blue-600 text-white px-6 py-3 rounded hover:bg-blue-700 transition duration-300">
                Create Your Store
            </button>
        </div>
        <div class="relative mt-8 lg:mt-0 w-full lg:w-1/2">
            <img src="https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/1d62a3751be9d7abfce84da8ca89be7d79f07fed-1232x1232.png?auto=format&fit=fill&q=80&w=849" alt="Gambar" class="rounded-lg" />
        </div>
    </main>

    <!-- Corrected footer -->
    <footer class="mt-auto p-6 bg-white-800 text-black text-center">
        <p>&copy; 2024 Weebly Clone. All Rights Reserved.</p>
    </footer>
</body>

</html>
