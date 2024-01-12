<?php if(!empty($_SESSION['author'])){ ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
    <link href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<style>
    /* Custom style */
    .header-right {
        width: calc(100% - 3.5rem);
    }

    .sidebar:hover {
        width: 16rem;
    }

    @media only screen and (min-width: 768px) {
        .header-right {
            width: calc(100% - 16rem);
        }
    }
</style>

<body>
    <div x-data="setup()" :class="{ 'dark': isDark }">
        <div
            class="min-h-screen flex flex-col flex-auto flex-shrink-0 antialiased bg-white dark:bg-gray-700 text-black dark:text-white">

            <!-- Header -->
            <div class="fixed w-full flex items-center justify-between h-14 text-white z-10">
                <div
                    class="flex items-center justify-end md:justify-center pl-3 w-14 md:w-64 h-14 bg-black dark:bg-gray-800 border-none">
                    <img class="w-5 h-5 md:w-10 md:h-10 mr-2 rounded-full overflow-hidden"
                        src="https://therminic2018.eu/wp-content/uploads/2018/07/dummy-avatar.jpg" />
                    <span class="hidden md:block">ADMIN</span>
                </div>
                <div class="flex justify-end items-center h-14 bg-black dark:bg-gray-800 header-right">
                    <ul class="flex items-center">

                        <li>
                            <a href="index.php?action=home" class="flex items-end justify-end mr-4 hover:text-blue-100">
                                <span class="inline-flex mr-1">
                                </span>
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="index.php?action=logOut"
                                class="flex items-end justify-end mr-4 hover:text-blue-100">
                                <span class="inline-flex mr-1">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                                        </path>
                                    </svg>
                                </span>
                                Logout
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- ./Header -->

            <!-- Sidebar -->
            <div
                class="fixed flex flex-col top-14 left-0 w-14 hover:w-64 md:w-64 bg-gray-500 dark:bg-gray-900 h-full text-white transition-all duration-300 border-none z-10 sidebar">
                <div class="overflow-y-auto overflow-x-hidden flex flex-col justify-between flex-grow">
                    <ul class="flex flex-col py-4 space-y-1">
                        <li class="px-5 hidden md:block">
                            <div class="flex flex-row items-center h-8">
                                <div class="text-sm font-light tracking-wide text-gray-400 uppercase">Main</div>
                            </div>
                        </li>
                        <li>
                            <a href="index.php?action=authorDash"
                                class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-black dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-white dark:hover:border-gray-800 pr-6">
                                <span class="inline-flex justify-center items-center ml-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25px" height="25px"
                                        viewBox="0 0 24 24" fill="none">
                                        <path clip-rule="evenodd"
                                            d="m12 3.75c-4.55635 0-8.25 3.69365-8.25 8.25 0 4.5563 3.69365 8.25 8.25 8.25 4.5563 0 8.25-3.6937 8.25-8.25 0-4.55635-3.6937-8.25-8.25-8.25zm-9.75 8.25c0-5.38478 4.36522-9.75 9.75-9.75 5.3848 0 9.75 4.36522 9.75 9.75 0 5.3848-4.3652 9.75-9.75 9.75-5.38478 0-9.75-4.3652-9.75-9.75zm9.75-.75c.4142 0 .75.3358.75.75v3.5c0 .4142-.3358.75-.75.75s-.75-.3358-.75-.75v-3.5c0-.4142.3358-.75.75-.75zm0-3.25c-.5523 0-1 .44772-1 1s.4477 1 1 1h.01c.5523 0 1-.44772 1-1s-.4477-1-1-1z"
                                            fill="white" fill-rule="evenodd" />
                                    </svg>
                                </span>
                                <span class="ml-2 text-sm tracking-wide truncate">Gestion des wikis</span>
                            </a>
                        </li>
                        <li>
                            <a href="index.php?action=addWiki"
                                class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-black dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-white dark:hover:border-gray-800 pr-6">
                                <span class="inline-flex justify-center items-center ml-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25px" height="25px"
                                        viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                        <path fill="#ffffff"
                                            d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zM200 344V280H136c-13.3 0-24-10.7-24-24s10.7-24 24-24h64V168c0-13.3 10.7-24 24-24s24 10.7 24 24v64h64c13.3 0 24 10.7 24 24s-10.7 24-24 24H248v64c0 13.3-10.7 24-24 24s-24-10.7-24-24z" />
                                    </svg>
                                </span>
                                <span class="ml-2 text-sm tracking-wide truncate">Add wikis</span>
                            </a>
                        </li>
                    </ul>
                    <p class="mb-14 px-5 py-3 hidden md:block text-center text-xs">Copyright @2024</p>
                </div>
            </div>
            <!-- ./Sidebar -->


            <div id="page-container" class="flex items-center justify-center h-screen">

                <div class="bg-white w-full md:w-1/2 p-8 shadow-lg rounded-md">
                    <h1 class="text-3xl font-bold mb-6">Add New Article</h1>
                    <form action="index.php?action=addWiki" method="post" enctype="multipart/form-data">
                        <div class="mb-4">
                            <label for="image" class="text-sm font-semibold text-gray-600">Image</label>
                            <input type="file" id="image" name="image"
                                class="w-full px-4 py-2 border rounded-md mt-1 focus:outline-none focus:border-indigo-500"
                                required>
                        </div>
                        <div class="mb-4">
                            <label for="title" class="text-sm font-semibold text-gray-600">Title</label>
                            <input type="text" id="title" name="title"
                                class="w-full px-4 py-2 border rounded-md mt-1 focus:outline-none focus:border-indigo-500"
                                required>
                        </div>
                        <div class="mb-4">
                            <label for="content" class="text-sm font-semibold text-gray-600">Content</label>
                            <textarea id="content" name="content"
                                class="w-full px-4 py-2 border rounded-md mt-1 focus:outline-none focus:border-indigo-500"
                                rows="5" required></textarea>
                        </div>
                        <div class="mb-4">
                            <label for="category" class="text-sm font-semibold text-gray-600">category</label>
                            <select id="category" name="category" x-model="newCat"
                                class="w-full px-4 py-2 border rounded-md mt-1 focus:outline-none focus:border-indigo-500"
                                required>
                                <?php foreach ($catsDATA as $cat) { ?>
                                    <option value="<?= $cat->getIdCat() ?>">
                                        <?= $cat->getCatName() ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </div>
                        <!-- Tags Section -->
                        <div>
                            <div class="mb-4">
                                <label for="tags" class="text-sm font-semibold text-gray-600">Select Tags</label>
                                <?php foreach ($tagsDATA as $tag) { ?>
                                    <input type="checkbox" name="tags[]" value="<?= $tag->getIdTag() ?>">
                                    <?= $tag->getTagName() ?>
                                <?php } ?>
                            </div>
                        </div>
                        <!-- End Tags Section -->
                        <div class="flex justify-end">
                            <button type="submit"
                                class="bg-indigo-500 text-white px-6 py-2 rounded-md hover:bg-indigo-700 focus:outline-none">Submit</button>
                        </div>
                    </form>
                </div>
            </div>

            <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
        </div>
    </div>

</body>

</html>

<?php }else  header('Location:index.php?action=home')?>