<!DOCTYPE html>
<html lang="en">

<?php require('partials/head.php') ?>

<body>
    <?php require('partials/navbar.php') ?>
    <div class="w-full flex flex-col items-center p-8">
        <form action="" class="w-3/4 md:w-1/2 flex flex-col relative">
            <div class="flex items-center mb-6">
                <label for="addFile" class="cursor-pointer text-gray-600 border border-gray-400 p-2 rounded-full">
                    <i class="fas fa-plus"></i>
                </label>
                <input type="file" id="addFile" class="hidden" autofocus>
                <input type="text" class="w-full p-2 text-xl border-b border-gray-300 focus:outline-none ml-4" placeholder="Title">
            </div>
            <div class="mb-6">
                <textarea class="w-full p-2 text-sm h-96 border border-gray-300 focus:outline-none" placeholder="Tell your story"></textarea>
            </div>
            <button type="submit" class="absolute top-0 right-0 bg-green-600 text-white py-2 px-4 rounded-lg font-bold">Publish</button>
        </form>
    </div>
</body>

</html>