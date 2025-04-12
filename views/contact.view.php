<!DOCTYPE html>
<html lang="en">

<?php require('partials/head.php') ?>

<body>
    <?php require('partials/navbar.php') ?>

    <div class="w-full flex flex-col items-center p-8 bg-gray-100 min-h-screen">
        <div class="w-full md:w-2/3 lg:w-1/2 bg-white shadow-lg rounded-lg p-6">
            <h2 class="text-2xl font-bold text-gray-700 mb-4 text-center">Contact Us</h2>
            <p class="text-gray-600 text-center mb-6">Have questions? We'd love to hear from you!</p>

            <form action="#" method="POST" class="flex flex-col">
                <label class="text-gray-700 mb-2">Full Name</label>
                <input type="text" class="w-full p-2 border border-gray-300 rounded focus:outline-none mb-4" placeholder="Your Name" required>

                <label class="text-gray-700 mb-2">Email Address</label>
                <input type="email" class="w-full p-2 border border-gray-300 rounded focus:outline-none mb-4" placeholder="Your Email" required>

                <label class="text-gray-700 mb-2">Message</label>
                <textarea class="w-full p-2 border border-gray-300 rounded focus:outline-none h-32 mb-4" placeholder="Your Message" required></textarea>

                <button type="submit" class="bg-green-600 text-white py-2 px-4 rounded-lg font-bold w-full">Send Message</button>
            </form>
        </div>
    </div>
</body>

</html>