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


    <div class="custom-expanded u-grey-light-2 u-map u-map-1">
              <div class="embed-responsive">
                <!-- <iframe
                  class="embed-responsive-item"
                  src=""
                  
                  data-map="JTdCJTIycG9zaXRpb25UeXBlJTIyJTNBJTIybWFwLWVtYmVkJTIyJTJDJTIyYWRkcmVzcyUyMiUzQSUyMk1hbmhhdHRhbiUyQyUyME5ldyUyMFlvcmslMjIlMkMlMjJ6b29tJTIyJTNBMTAlMkMlMjJ0eXBlSWQlMjIlM0ElMjJyb2FkJTIyJTJDJTIybGFuZyUyMiUzQSUyMiUyMiUyQyUyMmVtYmVkJTIyJTNBJTIyaHR0cHMlM0ElMkYlMkZ3d3cuYmluZy5jb20lMkZtYXBzJTNGJTI2Y3AlM0QxLjExODkzNX4xMDQuMDQ3MzMxJTI2bHZsJTNEMTclMjZvc2lkJTNEMzYxNDhhOWItMGZjNy00YjkyLWE4ZjctYzQxYTk2NDRkY2MxJTI2aW1naWQlM0QwOTBiNzZlMS05ODQ1LTRkODQtOWMzOS03ZjgwYWEyODYzYmUlMjZ2JTNEMiUyNnNWJTNEMiUyNmZvcm0lM0RTMDAwMjclMjIlN0Q="
                ></iframe> -->
                <iframe
                  class="embed-responsive-item"
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.0586076080717!2d104.04743192678673!3d1.1181309396358665!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d98921856ddfab%3A0xf9d9fc65ca00c9d!2sPoliteknik%20Negeri%20Batam!5e0!3m2!1sid!2sid!4v1699499594284!5m2!1sid!2sid"
                  width="400"
                  height="400"
                  style="border: 0"
                  allowfullscreen=""
                  loading="lazy"
                  referrerpolicy="no-referrer-when-downgrade"
                ></iframe>
              </div>
            </div>
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
