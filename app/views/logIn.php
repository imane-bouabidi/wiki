<?php
ob_start();
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link href="https://cdn.tailwindcss.com" rel="stylesheet"> -->
    <script src="https://cdn.tailwindcss.com/"></script>
    <!-- <link rel="stylesheet" href="View\tailwind config\tailwind.config.js"> -->
</head>
<div class="h-screen overflow-hidden flex items-center justify-center" style="background: #edf2f7;">


    <style>
        @import url('https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.min.css');
    </style>

    <div class="min-w-screen min-h-screen flex items-center justify-center px-5 py-5">
        <div class="bg-gray-100 text-gray-500 rounded-3xl shadow-xl w-full overflow-hidden" style="max-width:1000px">
            <div class="md:flex w-full">
                <div class="hidden md:block w-1/2 bg-indigo-500 py-10 px-10">
                    <img src="asstes/img/wiki-logo.png" alt="wiki-logo">
                </div>
                <form action="index.php?action=logInSubmit" method="post">
                    <div class="w-full md:w-1/2 py-10 px-5 md:px-10">
                        <div class="text-center mb-10">
                            <h1 class="font-bold text-3xl text-gray-900">Log In</h1>
                        </div>
                        <div>
                            <div class="flex -mx-3">
                                <div class="w-full px-3 mb-5">
                                    <label for="" class="text-xs font-semibold px-1">User name</label>
                                    <div class="flex">
                                        <div
                                            class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center">
                                            <i class="mdi mdi-account-outline text-gray-400 text-lg"></i>
                                        </div>
                                        <input type="text" name="UserName"
                                            class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500"
                                            placeholder="John">
                                    </div>
                                </div>
                            </div>
                            <div class="flex -mx-3">
                                <div class="w-full px-3 mb-5">
                                    <label for="" class="text-xs font-semibold px-1">Email</label>
                                    <div class="flex">
                                        <div
                                            class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center">
                                            <i class="mdi mdi-email-outline text-gray-400 text-lg"></i>
                                        </div>
                                        <input type="email" name="email"
                                            class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500"
                                            placeholder="johnsmith@example.com">
                                    </div>
                                </div>
                            </div>
                            <div class="flex -mx-3">
                                <div class="w-full px-3 mb-12">
                                    <label for="" class="text-xs font-semibold px-1">Password</label>
                                    <div class="flex">
                                        <div
                                            class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center">
                                            <i class="mdi mdi-lock-outline text-gray-400 text-lg"></i>
                                        </div>
                                        <input type="password" name="password"
                                            class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500"
                                            placeholder="************">
                                    </div>
                                </div>
                            </div>
                            <div class="flex -mx-3">
                                <div class="w-full px-3 mb-5">
                                    <button
                                        class="block w-full max-w-xs mx-auto bg-indigo-500 hover:bg-indigo-700 focus:bg-indigo-700 text-white rounded-lg px-3 py-3 font-semibold">Log
                                        In</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/zxcvbn/4.4.2/zxcvbn.js"></script>
<?php
$content = ob_get_clean();

include_once 'layout.php';
?>