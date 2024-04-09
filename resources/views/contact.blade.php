<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Us - COE TreeMine</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        /* Existing styles from the homepage */
    </style>
</head>
<body class="bg-gray-100">
    @include('components.navbar')

    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-8">
        <h1 class="text-3xl font-bold text-center mb-4">Contact Us</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div>
                <h2 class="text-xl font-semibold mb-2">Get in Touch</h2>
                <!-- Contact Form -->
                <form action="#" method="POST">
                    <input type="text" name="name" placeholder="Your Name" required class="input">
                    <input type="email" name="email" placeholder="Your Email" required class="input">
                    <textarea name="message" placeholder="Your Message" required class="textarea"></textarea>
                    <!-- Captcha or Anti-Spam Features -->
                    <button type="submit" class="btn">Send Message</button>
                </form>
                <!-- End of Contact Form -->
                
                <!-- Social Media Links -->
                <div class="social-links">
                    <!-- Icons or text links to social media -->
                </div>
            </div>

            <div>
                <h2 class="text-xl font-semibold mb-2">Information</h2>
                <!-- Email, Phone, Address -->
                <p><strong>Email:</strong> contact@coetree.com</p>
                <p><strong>Phone:</strong> +1234567890</p>
                <p><strong>Address:</strong> 123 Tree Street, Forest City, Earth</p>

                <!-- Map and Directions -->
                <!-- Embed Google Map or similar -->

                <!-- Business Hours -->
                <p><strong>Business Hours:</strong> Mon-Fri 9:00 AM - 5:00 PM</p>

                <!-- Team Contact Information -->
                <p><strong>Customer Service:</strong> service@coetree.com</p>

                <!-- FAQ Link -->
                <a href="/faq">FAQs</a>
            </div>
        </div>

        <!-- Feedback Section -->
        <div class="feedback">
            <!-- Form or link to form -->
        </div>

        <!-- Newsletter Signup Form -->
        <div class="newsletter-signup">
            <!-- Form for signing up to a newsletter -->
        </div>

        <!-- Privacy Policy Link -->
        <a href="/privacy-policy">Privacy Policy</a>

        <!-- Accessibility Features -->
        <!-- Implement accessibility features across the page -->

        @include('components.footer')
    </div>

    <script>
        // JavaScript for additional functionalities if necessary
    </script>
</body>
</html>
