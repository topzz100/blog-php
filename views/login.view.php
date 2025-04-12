<!DOCTYPE html>
<html lang="en">

<?php require('partials/head.php') ?>

<body>
    <div class="h-screen flex justify-center items-center bg-gray-100">
        <div class="bg-white p-8 rounded-lg shadow-md w-96">
            <h4 class="text-3xl font-semibold text-center mb-6">Login</h4>
            <form action="" class="flex flex-col">
                <label class="text-gray-700 mb-2">Email</label>
                <input type="email" placeholder="Smith@mail.com" class="p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 mb-4">
                <label class="text-gray-700 mb-2">Password</label>
                <input type="password" placeholder="Password" class="p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 mb-4">
                <button type="submit" class="w-full bg-red-500 text-white py-2 rounded-lg font-semibold hover:bg-red-600">Login</button>
            </form>
            <div class="text-center mt-4">
                <p class=" font-semibold">OR</p>
                <a href="/register" class="text-green-400 py-2 px-4 rounded-lg font-semibold hover:text-green-600"> Register</a>
            </div>
        </div>
    </div>
</body>

</html>