<!DOCTYPE html>
<html lang="en">
<?php require('partials/head.php') ?>


<body>
    <?php require('partials/navbar.php') ?>
    <?php require('partials/hero.php') ?>
    <main class="flex w-full">
        <div class="p-5 f w-full  basis-2/3 md:p-2.5">
            <div class="w-full grid grid-cols-1 md:grid-cols-2">
                <div class="w-full px-7 pb-12 md:px-2.5 md:pb-5">
                    <div class="flex flex-col items-center">
                        <img
                            src="https://images.pexels.com/photos/1167355/pexels-photo-1167355.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                            alt=""
                            class="w-full h-[300px] object-cover rounded-md" />
                        <div class="mb-4">
                            <span class="mx-1 text-sm">Music</span>
                            <span class="mx-1 text-sm">Life</span>
                        </div>
                        <a href="/single" class="no-underline text-inherit">
                            <h4 class="font-bold text-lg mb-4 cursor-pointer">Lorem ipsum dolor</h4>
                        </a>
                        <span class="text-sm">1 hour ago</span>
                        <p class="text-sm overflow-hidden text-ellipsis line-clamp-4">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto deleniti amet, quae eum quibusdam ratione minus consequatur architecto cupiditate non laboriosam natus distinctio nemo accusamus debitis dolor magnam sint? Architecto provident repellat quidem temporibus culpa praesentium optio, dolores dolorem cupiditate! Repellat ipsum harum cumque, quos maxime perspiciatis molestias voluptates deleniti.
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto deleniti amet, quae eum quibusdam ratione minus consequatur architecto cupiditate non laboriosam natus distinctio nemo accusamus debitis dolor magnam sint? Architecto provident repellat quidem temporibus culpa praesentium optio, dolores dolorem cupiditate! Repellat ipsum harum cumque, quos maxime perspiciatis molestias voluptates deleniti.
                        </p>
                    </div>
                </div>



                <div class="w-full px-7 pb-12 md:px-2.5 md:pb-5">
                    <div class="flex flex-col items-center">
                        <img
                            src="https://images.pexels.com/photos/1167355/pexels-photo-1167355.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                            alt=""
                            class="w-full h-[300px] object-cover rounded-md" />
                        <div class="mb-4">
                            <span class="mx-1 text-sm">Music</span>
                            <span class="mx-1 text-sm">Life</span>
                        </div>
                        <a href="/single" class="no-underline text-inherit">
                            <h4 class="font-bold text-lg mb-4 cursor-pointer">Lorem ipsum dolor</h4>
                        </a>
                        <span class="text-sm">1 hour ago</span>
                        <p class="text-sm overflow-hidden text-ellipsis line-clamp-4">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto deleniti amet, quae eum quibusdam ratione minus consequatur architecto cupiditate non laboriosam natus distinctio nemo accusamus debitis dolor magnam sint? Architecto provident repellat quidem temporibus culpa praesentium optio, dolores dolorem cupiditate! Repellat ipsum harum cumque, quos maxime perspiciatis molestias voluptates deleniti.
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto deleniti amet, quae eum quibusdam ratione minus consequatur architecto cupiditate non laboriosam natus distinctio nemo accusamus debitis dolor magnam sint? Architecto provident repellat quidem temporibus culpa praesentium optio, dolores dolorem cupiditate! Repellat ipsum harum cumque, quos maxime perspiciatis molestias voluptates deleniti.
                        </p>
                    </div>
                </div>
                <!-- Content here -->
            </div>
        </div>
        <div class="basis-1/3 w-full">
            <div class="w-full bg-[#fdfbfb] p-5 flex flex-col items-center">


                <div class="text-center border-t border-b border-black w-4/5 mb-5">
                    <h4 class="text-base font-medium py-2">ABOUT ME</h4>
                </div>
                <img
                    src="https://themegoods-cdn-pzbycso8wng.stackpathdns.com/grandblog/demo/wp-content/uploads/2015/11/aboutme.jpg"
                    alt=""
                    class="w-full object-cover rounded-md mb-5" />
                <p class="text-sm px-2 text-center">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat voluptate dolor nihil tempore sint aspernatur amet at maiores ut perspiciatis.
                </p>

                <div class="text-center border-t border-b border-black w-4/5 my-5">
                    <h4 class="text-base font-medium py-2">CATEGORIES</h4>
                </div>
                <ul class="grid grid-cols-2 gap-x-20 text-center">
                    <li class="capitalize">life</li>
                    <li class="capitalize">music</li>
                    <li class="capitalize">sport</li>
                    <li class="capitalize">style</li>
                    <li class="capitalize">tech</li>
                    <li class="capitalize">cinema</li>
                </ul>

                <div class="text-center border-t border-b border-black w-4/5 my-5">
                    <h4 class="text-base font-medium py-2">FOLLOW US</h4>
                </div>
                <ul class="flex space-x-3">
                    <li><i class="fab fa-facebook-square text-xl"></i></li>
                    <li><i class="fab fa-instagram-square text-xl"></i></li>
                    <li><i class="fab fa-pinterest-square text-xl"></i></li>
                    <li><i class="fab fa-twitter-square text-xl"></i></li>
                </ul>
            </div>
        </div>
    </main>
</body>

</html>