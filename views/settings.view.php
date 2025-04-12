<!DOCTYPE html>
<html lang="en">

<?php require('partials/head.php') ?>

<body>

    <div class="w-full flex flex-col items-center p-8">
        <div class="w-3/4 md:w-1/2 flex flex-col">
            <div class="flex justify-between w-full mb-6">
                <span class="text-lg font-semibold text-gray-700">Update Your Account</span>
                <span class="text-sm text-red-600 cursor-pointer">Delete Account</span>
            </div>
            <form action="" class="flex flex-col relative">
                <label class="text-gray-700 mb-2">Profile Picture</label>
                <div class=" mb-6 relative w-fit">
                    <img src="https://images.pexels.com/photos/1167355/pexels-photo-1167355.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="Profile Picture" class="w-16 h-16 object-cover rounded-full" id="profilePicPreview">

                    <label for="addImg" class="cursor-pointer text-gray-600 border border-gray-400 h-9 w-9 flex items-center justify-center rounded-full ml-4 absolute bottom-0 right-0 left-0 top-0 m-auto">
                        <i class="fas fa-user-circle text-xl"></i>
                    </label>
                    <input type="file" id="addImg" class="hidden">
                </div>
                <label class="text-gray-700 mb-2">Username</label>
                <input type="text" class="w-full p-2 border-b border-gray-300 focus:outline-none mb-4" placeholder="Username">
                <label class="text-gray-700 mb-2">Email</label>
                <input type="email" class="w-full p-2 border-b border-gray-300 focus:outline-none mb-4" placeholder="Email">
                <label class="text-gray-700 mb-2">Password</label>
                <input type="password" class="w-full p-2 border-b border-gray-300 focus:outline-none mb-4" placeholder="Password">
                <button type="submit" class="bg-green-600 text-white py-2 px-4 rounded-lg font-bold w-fit mx-auto">Update</button>
            </form>
        </div>
    </div>

</body>

</html>