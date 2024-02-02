<?php
session_start();
unset($_SESSION['user_id']);
unset($_SESSION['username']);
unset($_SESSION['nameRole']);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Blog </title>
    
</head>

<body>
<section >
<div class="bg-gray-100 flex justify-center items-center h-screen">

    <div class="lg:p-36 md:p-52 sm:20 p-8 w-full lg:w-1/2">
    
                    <form class="space-y-4 md:space-y-6" action="/Blogging/app/controller/auth.php" method="post">

                        <div>
                        <h3 class="text-3xl font-extrabold">Login</h3>
                            <label for="username" class="text-sm mb-2 block">username</label>
                            <input id="username" type="username" name="username"
                                class="w-full text-sm border border-solid px-4 py-3 rounded-md outline-gray-600"
                                placeholder="username">
                        </div>
                        <div>
                            <label for="password" class="text-sm mb-2 block">Password</label>
                            <input id="password" type="password" name="password" placeholder="***********"
                            class="w-full text-sm border border-solid px-4 py-3 rounded-md outline-gray-600">
                        </div>
                        <button name="login" type="submit"
                            class="w-full shadow-xl py-2.5 px-4 text-sm font-semibold rounded text-white bg-black hover:bg-gray-700 focus:outline-none">log
                            in</button>
                        <P class="text-sm mt-6 text-center">
                            You don't have an account ? please click here
                        </P><a class="text-gray-600 font-semibold hover:underline ml-1 whitespace-nowrap" href="register.php">register</a>
                        <p class="text-sm mt-6 text-center">you want to skip login now? <a href="/Blogging/app/view/home.php" class="text-gray-600 font-semibold hover:underline ml-1 whitespace-nowrap">Next time</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

</body>

</html>