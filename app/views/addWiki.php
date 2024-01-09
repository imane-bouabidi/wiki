<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Article</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 h-screen flex items-center justify-center">
    <div class="bg-white w-full md:w-1/2 p-8 shadow-lg rounded-md">
        <h1 class="text-3xl font-bold mb-6">Add New Article</h1>
        <form action="#" method="post">
            <div class="mb-4">
                <label for="title" class="text-sm font-semibold text-gray-600">Title</label>
                <input type="text" id="title" name="title" class="w-full px-4 py-2 border rounded-md mt-1 focus:outline-none focus:border-indigo-500">
            </div>
            <div class="mb-4">
                <label for="content" class="text-sm font-semibold text-gray-600">Content</label>
                <textarea id="content" name="content" class="w-full px-4 py-2 border rounded-md mt-1 focus:outline-none focus:border-indigo-500" rows="5"></textarea>
            </div>
            <div class="flex justify-end">
                <button type="submit" class="bg-indigo-500 text-white px-6 py-2 rounded-md hover:bg-indigo-700 focus:outline-none">Submit</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
</body>
</html>
